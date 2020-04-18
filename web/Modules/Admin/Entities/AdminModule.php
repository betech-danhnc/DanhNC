<?php

namespace Modules\Admin\Entities;

/**
 * This is the model class for table "admin_modules".
 *
 * @property int $id                Id
 * @property string $name           Name
 * @property string $description    Description
 * @property int $status            Status
 * @property int $created_by        Created by
 * @property string $created_at     Created date
 * @property string $updated_at     Updated date
 */
class AdminModule extends AdminModel
{
    /** Fillable array */
    protected $fillable = [
        'name', 'description', 'status', 'created_by'
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
        ];
    }
}
