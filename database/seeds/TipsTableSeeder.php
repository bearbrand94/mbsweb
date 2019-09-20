<?php

use Illuminate\Database\Seeder;
use App\Tips;

class TipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function create_tips($title, $category = 0){
    	$faker = Faker\Factory::create();
		$tips = new Tips;
		$tips->title = $title;
		$tips->category_id = $category;
		$tips->content = $faker->paragraphs(2, $asText = true);
		$tips->save();
    }

    public function run()
    {
    	Tips::truncate();
        $this->create_tips('Mengapa nilai tunai saya kecil terus, tidak sesuai jumlah dana yang sudah saya setorkan?',13);
        $this->create_tips('Rugi dong saya karena nilai tunainya lebih kecil daripada setorannya?',13);
        $this->create_tips('Kapan investasi naik lagi? Selain di unit link, Anda punya investasi lainnya? Apakah anda bisa pastikan kapan investasi tsb akan naik lagi?',13);
        $this->create_tips('Apakah dana investasi saya dapat ditarik dan dinikmati setelah saya selesai masa pembayaran saya ?',13);
        $this->create_tips('Mengapa sering dengar kasus klaim tidak dibayarkan perusahaan asuransi?',13);

        $this->create_tips('Produk anda lebih mahal preminya ?',14);
        $this->create_tips('Masih banyak kebutuhan lain dan juga masih banyak cicilan.',14);
        $this->create_tips('Saya nggak pernah nabung dibank.. habis buat bayar cicilan.',14);
        $this->create_tips('Saya Sudah Punya Banyak Sekali Asuransi.',14);
    }
}
