<?php

use Illuminate\Database\Seeder;
use Modules\Admin\Entities\AdminAction;

class AdminActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminAction::truncate();
        $data = [
            [
                'id'                => '1',
                'controller_id'     => '1',
                'name'              => 'List',
                'key'               => 'index',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '2',
                'controller_id'     => '1',
                'name'              => 'Create',
                'key'               => 'create',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '3',
                'controller_id'     => '1',
                'name'              => 'Update',
                'key'               => 'edit',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '4',
                'controller_id'     => '2',
                'name'              => 'List',
                'key'               => 'index',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '5',
                'controller_id'     => '2',
                'name'              => 'Create',
                'key'               => 'create',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '6',
                'controller_id'     => '2',
                'name'              => 'Update',
                'key'               => 'edit',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '7',
                'controller_id'     => '3',
                'name'              => 'List',
                'key'               => 'index',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '8',
                'controller_id'     => '3',
                'name'              => 'Create',
                'key'               => 'create',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
            [
                'id'                => '9',
                'controller_id'     => '3',
                'name'              => 'Update',
                'key'               => 'edit',
                'permission'        => AdminAction::PERMISSION_PRIVATE,
            ],
        ];
        AdminAction::insert($data);
    }
}
