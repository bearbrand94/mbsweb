<?php

use Illuminate\Database\Seeder;
use App\Lead;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function create_lead($title, $category = 0){
    	$faker = Faker\Factory::create();
    	$folder_url = 'images/leads/';
    	$img_name = ['lead1.jpg', 'lead2.jpg', 'lead3.jpg','lead4.jpg', 'lead5.jpg', 'lead6.jpg'];
		$lead = new Lead;
		$lead->setTitle($title);
		$lead->category_id = $category;
		$lead->image_url = asset($folder_url.$img_name[rand(0,count($img_name)-1)]);
		// $lead->content = $faker->randomHtml(2,3);
		$lead->content = $faker->paragraphs($nb = 5, $asText = true);
		$lead->save();
    }

    public function run()
    {
        //
        Lead::truncate();
        $this->create_lead('Uangkan Kesehatan Anda',1);
        $this->create_lead('Kuatir Kena Penyakit Keturunan',1);
        $this->create_lead('Sudah Punya BPJS, Masih Perlu Asuransi Swastakah?',1);
        $this->create_lead('Bagaimana Caranya Punya Jaminan Biaya Berobat yang Cepat?',1);
        $this->create_lead('Asuransi Kesehatan BUKAN Melindungi Kesehatan Anda Saja Tapi Juga Uang Simpanan dan Aset Anda',1);
        $this->create_lead('Sakit Itu Menderita, tetapi Tombok Biaya Tambah Derita…',1);

        $this->create_lead('Berderma Sampai Akhir Hayat',2);
        $this->create_lead('Begini Caranya Membuat Aset Awet 20 Turunan Bahkan Lebih',2);
        $this->create_lead('Membangun Rumah Ibadah Dengan Uang Yang Terbatas',2);
        $this->create_lead('Sang Penerus, Pemilik Bisnis Keluarga',2);
        $this->create_lead('Apa Gunanya Asuransi Untuk Orang Yang Sudah Super Kaya',2);
        $this->create_lead('Lindungi Aset Anda',2);
        $this->create_lead('Bebek Emas',2);
        $this->create_lead('Keluarga Tidak Harus Mawut meski Bisnis Bangkrut',2);
    }
}
