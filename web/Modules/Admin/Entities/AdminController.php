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
    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------
    /** Fillable array */
    protected $fillable = [
        'name', 'module_id', 'description', 'status', 'created_by'
    ];
    
    //-----------------------------------------------------
    // Utility methods
    //-----------------------------------------------------
    /**
     * {@inheritdoc}
     */
    public function getShowLink() {
        return url('admin/admin-controllers', ['id' => $this->id]);
    }
    
    /**
     * Get module name
     * @return string Name of module
     */
    public function getModule() {
        $module = AdminModule::find($this->module_id);
        if ($module) {
            return $module->name;
        }
        return '';
    }
    
    /**
     * Get link to module show
     * @return string Html string
     */
    public function getModuleLink() {
        $module = AdminModule::find($this->module_id);
        if ($module) {
            return $module->getShowLinkTag('name');
        }
        return '';
    }


    //-----------------------------------------------------
    // Static methods
    //-----------------------------------------------------
    /**
     * {@inheritdoc}
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
