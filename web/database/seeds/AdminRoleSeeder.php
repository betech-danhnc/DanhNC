<?php

use Illuminate\Database\Seeder;
use Modules\Admin\Entities\AdminRole;

class AdminRoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        AdminRole::truncate();
        $data = [
            [
                'id' => '1',
                'name' => 'Super admin',
                'code' => 'SUPER_ADMIN',
                'weight' => '1',
            ]
        ];
        AdminRole::insert($data);
    }

}
