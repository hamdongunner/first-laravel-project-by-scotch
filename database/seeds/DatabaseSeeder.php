<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    DB::table('users')->delete(); // حتى كل ما اسوي سيد يصيرون ١٠ بس .. تنمسح القديمة
     factory(App\User::class, 10)->create(); // نحط ١٠ فيك يوزرس
    }
}
