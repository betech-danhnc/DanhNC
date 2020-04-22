<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminModuleSeeder::class);
         $this->call(AdminControllerSeeder::class);
         $this->call(AdminActionSeeder::class);
         $this->call(AdminMenuSeeder::class);
         $this->call(AdminRoleSeeder::class);
    }
}
