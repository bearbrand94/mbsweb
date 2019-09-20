<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function create_category($name, $parent=null){
		$category = new Category;
		$category->setName($name);
		$category->parent_id = $parent;
		$category->save();
    }

    public function create_ctips($name, $icon_name = null){
        $folder_url = 'images/icon-image/';
		$category = new Category;
		$category->setName($name);
        $category->icon_url = $icon_name ? asset($folder_url.$icon_name) : null;
		$category->type=1;
		$category->save();
    }

    public function run()
    {
    	Category::truncate();
    	$this->create_category("Rawat Inap / Kesehatan");
    	$this->create_category("Asuransi Orang Kaya / Pengusaha");
    	$this->create_category("Single & Millenials");
    	$this->create_category("Claim");
    	$this->create_category("Tips");
    	$this->create_category("Kondisi Kritis / Income Protection");
    	$this->create_category("Syariah");
    	$this->create_category("Warisan");
    	$this->create_category("Pensiun");
    	$this->create_category("Pendidikan Anak");
    	$this->create_category("Investment");
		$this->create_category("Business Insurance");

		$this->create_ctips("HO (handling objection) tentang Produk", "fact1.png");
		$this->create_ctips("HO (handling objection) tentang Uang / Budget", "fact2.png");
		$this->create_ctips("HO (handling objection) tentang Perusahaan", "fact3.png");
		$this->create_ctips("HO (handling objection) tentang Agen / Anda", "fact4.png");
		$this->create_ctips("HO (handling objection) Lainnya", "branding.png");
		$this->create_ctips("Trigger");

        $this->create_category("Tips Dapet Cewek Cantik", 5);
        $this->create_category("Tips Dapet Cewek Seksi", 5);
    }
}
