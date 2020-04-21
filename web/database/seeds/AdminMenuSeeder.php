<?php

use Illuminate\Database\Seeder;
use Modules\Admin\Entities\AdminMenu;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminMenu::truncate();
        $data = [
            [
                'id'                => '1',
                'action_id'         => '0',
                'view'              => '',
                'link'              => '',
                'icon'              => 'fas fa-tachometer-alt',
                'icon_thumb'        => '',
                'display_order'     => '1',
                'name'              => 'Dashboard',
                'type'              => AdminMenu::TYPE_BACK_END,
                'parent_id'         => '0',
            ],
            [
                'id'                => '2',
                'action_id'         => '1',
                'view'              => '',
                'link'              => '',
                'icon'              => '',
                'icon_thumb'        => '',
                'display_order'     => '1',
                'name'              => 'Modules',
                'type'              => AdminMenu::TYPE_BACK_END,
                'parent_id'         => '1',
            ],
            [
                'id'                => '3',
                'action_id'         => '4',
                'view'              => '',
                'link'              => '',
                'icon'              => '',
                'icon_thumb'        => '',
                'display_order'     => '2',
                'name'              => 'Controllers',
                'type'              => AdminMenu::TYPE_BACK_END,
                'parent_id'         => '1',
            ],
            [
                'id'                => '4',
                'action_id'         => '7',
                'view'              => '',
                'link'              => '',
                'icon'              => '',
                'icon_thumb'        => '',
                'display_order'     => '3',
                'name'              => 'Actions',
                'type'              => AdminMenu::TYPE_BACK_END,
                'parent_id'         => '1',
            ],
        ];
        AdminMenu::insert($data);
    }
}
