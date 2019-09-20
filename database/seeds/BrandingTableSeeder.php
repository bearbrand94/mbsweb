<?php

use Illuminate\Database\Seeder;
use App\Branding;

class BrandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $folder_url = 'images/branding/';
        $img_name = ['IMG1.jpg','IMG2.jpg','IMG3.jpg','IMG4.jpg','IMG5.jpg','IMG6.jpg'];
    	$faker = Faker\Factory::create();
    	Branding::truncate();
    	for ($i=0; $i < count($img_name); $i++) { 
			$branding = new Branding;
			$branding->image_url = asset($folder_url.$img_name[$i]);
			$branding->save();
    	}
    }
}
