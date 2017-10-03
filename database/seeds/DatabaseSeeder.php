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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        App\User::truncate();
        $this->call(UsersTableSeeder::class);
        
        App\Article::truncate();
        $this->call(ArticlesTableSeeder::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
