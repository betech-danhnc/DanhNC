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
                'name'          => 'api-tokens',
                'module_id'     => '2',
                'description'   => 'API tokens',
            ],
            [
                'id'            => '5',
                'name'          => 'api-requests',
                'module_id'     => '2',
                'description'   => 'API requests',
            ],
        ];
        AdminController::insert($data);
    }
}
