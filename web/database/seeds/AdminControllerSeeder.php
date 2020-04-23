<?php

use Illuminate\Database\Seeder;
use Modules\Admin\Entities\AdminController;

class AdminControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminController::truncate();
        $data = [
            [
                'id'            => '1',
                'name'          => 'admin-modules',
                'module_id'     => '1',
                'description'   => 'Modules',
            ],
            [
                'id'            => '2',
                'name'          => 'admin-controllers',
                'module_id'     => '1',
                'description'   => 'Controllers',
            ],
            [
                'id'            => '3',
                'name'          => 'admin-actions',
                'module_id'     => '1',
                'description'   => 'Actions',
            ],
            [
                'id'            => '4',
                'name'          => 'admin-menu',
                'module_id'     => '1',
                'description'   => 'Menu',
            ],
            [
                'id'            => '5',
                'name'          => 'api-tokens',
                'module_id'     => '2',
                'description'   => 'API tokens',
            ],
            [
                'id'            => '6',
                'name'          => 'api-requests',
                'module_id'     => '2',
                'description'   => 'API requests',
            ],
            [
                'id'            => '7',
                'name'          => 'admin-roles',
                'module_id'     => '1',
                'description'   => 'Roles',
            ],
        ];
        AdminController::insert($data);
    }
}
