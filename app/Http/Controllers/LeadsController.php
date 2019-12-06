<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Lead;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Cookie\SessionCookieJar;

class LeadsController extends Controller
{
    private $menu;
    public function __construct()
    {
        $menu = Category::where('type', 'LEADS')->where('parent_id',null)->get();
        for ($i=0; $i < count($menu); $i++) { 
            $menu[$i]->submenu = Category::where('parent_id', $menu[$i]->id)->get();
        }
        $this->menu = $menu;
    }

    public function index(){
        return view('leadsgen-menu')->with('menu', $this->menu);
    }

    public function shared_article($slug, $id){
        $jar = session('jar');
        $client = new Client(['cookies' => $jar]);
        $shared_agen = null;
        try {
            $res = $client->request('POST', config('app.mbs_api')."/detailAgen", [
                'form_params' => [
                    'id'  => $id
                ]
            ]);
            $body = json_decode($res->getBody());
            if($body->Status == "true"){ // 200 = Success
                // Auth::login($request->username, TRUE);
                $shared_agen = $body->Message->Data; // { "type": "User", ..
                // print_r($user_info);
            }
            else{
                return "Agen Not Found";
            }
        } catch (RequestException $e) {
            return "Agen Not Found";
        }
        $lead = Lead::where('slug', $slug)->first();
        $category = Category::find($lead->category_id);
        return view('shared-article')->with('lead', $lead)->with('category', $category)->with('agen', $shared_agen);
    }

    public function article($slug){
        $header = Category::where('slug', $slug)->first();
        $leads = Category::where('cms_categories.slug',$slug)->join('cms_posts as leads', 'leads.category_id', '=', 'cms_categories.id')->select('leads.*', 'cms_categories.name as category_name')->paginate(5);
    	return view('leadsgen')->with('menu', $this->menu)->with('header', $header)->with('leads', $leads)->with('type', "leadsgen");
    }

    public function article_detail($slug){
        $lead = Lead::where('slug', $slug)->first();
        $category = Category::find($lead->category_id);
        return view('article')->with('lead', $lead)->with('category', $category)->with('type', 'leadsgen');
    }
}
