<?php

namespace Modules\Admin\Entities;

/**
 * This is the model class for table "admin_modules".
 *
 * @property int $id                Id
 * @property string $name           Name
 * @property string $code           Description
 * @property int $weight            Weight
 * @property int $status            Status
 * @property int $created_by        Created by
 * @property string $created_at     Created date
 * @property string $updated_at     Updated date
 */
class AdminRole extends AdminModel
{
    //-----------------------------------------------------
    // Constants
    //-----------------------------------------------------
    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------

    /** Fillable array */
    protected $fillable = [
        'name', 'code', 'weight', 'status', 'created_by'
    ];

    //-----------------------------------------------------
    // Utility methods
    //----------------------------------------------------

    /**
     * {@inheritdoc}
     */
    public function getShowLink() {
        return url('admin/admin-roles', ['id' => $this->id]);
    }

    //-----------------------------------------------------
    // Static methods
    //-----------------------------------------------------

    /**
     * {@inheritdoc}
     */
    public static function getRules() {
        return [
            'name' => 'required',
            'code' => 'required',
            'weight' => 'required',
        ];
    }

}
