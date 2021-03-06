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
        // 各テーブルへのデータの流し込みを呼び出す
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        // $this->call(ClassesTableSeeder::class);
        // $this->call(SongsTableSeeder::class);
        // $this->call(PracticesTableSeeder::class);
        // $this->call(ScalesTableSeeder::class);
        // $this->call(GenresTableSeeder::class);
        // $this->call(TemposTableSeeder::class);
        // $this->call(GendersTableSeeder::class);
    }
}
