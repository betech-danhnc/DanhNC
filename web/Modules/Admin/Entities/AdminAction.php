<?php

namespace Modules\Admin\Entities;

/**
 * This is the model class for table "admin_actions".
 *
 * @property int $id                Id
 * @property int $controller_id     Id of controller belongs to
 * @property string $name           Name
 * @property string $key            Key of action (index/create/show)
 * @property int $permission        Permission (1-Private, 2-Protected, 3-Public)
 * @property int $status            Status
 * @property int $created_by        Created by
 * @property string $created_at     Created date
 * @property string $updated_at     Updated date
 */
class AdminAction extends AdminModel
{
    //-----------------------------------------------------
    // Permission
    //-----------------------------------------------------
    /** Private: action only can access if user/role was assign */
    const PERMISSION_PRIVATE        = '1';
    /** Protected: action can access by all users was logged */
    const PERMISSION_PROTECTED      = '2';
    /** Public: action can access by any user (include guest) */
    const PERMISSION_PUBLIC         = '3';
    /** Fillable array */
    protected $fillable = [
        'name', 'controller_id', 'key', 'permission', 'status', 'created_by'
    ];
    
    /**
     * Get rules validate model
     * @return Array
     */
    public static function getRules()
    {
        return [
            'name'          => 'required',
            'key'           => 'required',
            'controller_id' => 'required',
            'permission'    => 'required',
        ];
    }
}
