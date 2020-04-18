<?php

namespace Modules\Admin\Entities;

/**
 * This is the model class for table "admin_controllers".
 *
 * @property int $id                Id
 * @property string $name           Name
 * @property int $module_id         Id of module belongs to
 * @property string $description    Description
 * @property int $status            Status
 * @property int $created_by        Created by
 * @property string $created_at     Created date
 * @property string $updated_at     Updated date
 */
class AdminController extends AdminModel
{
    protected $fillable = [
        'name', 'module_id', 'description', 'status', 'created_by'
    ];
    
    /**
     * Get rules validate model
     * @return Array
     */
    public static function getRules()
    {
        return [
            'name'          => 'required',
            'description'   => 'required',
            'module_id'     => 'required',
        ];
    }
}
