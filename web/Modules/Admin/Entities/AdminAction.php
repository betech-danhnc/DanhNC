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
    // Constants
    //-----------------------------------------------------
    /** Private: action only can access if user/role was assign */
    const PERMISSION_PRIVATE        = '1';
    /** Protected: action can access by all users was logged */
    const PERMISSION_PROTECTED      = '2';
    /** Public: action can access by any user (include guest) */
    const PERMISSION_PUBLIC         = '3';
    
    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------
    /** Fillable array */
    protected $fillable = [
        'name', 'controller_id', 'key', 'permission', 'status', 'created_by'
    ];
    
    //-----------------------------------------------------
    // Utility methods
    //-----------------------------------------------------
    /**
     * {@inheritdoc}
     */
    public function getShowLink() {
        return url('admin/admin-actions', ['id' => $this->id]);
    }
    
    /**
     * Get controller name
     * @return string Name of controller
     */
    public function getController() {
        $controller = AdminController::find($this->controller_id);
        if ($controller) {
            return $controller->name;
        }
        return '';
    }
    
    /**
     * Get link to controller show
     * @return string Html string
     */
    public function getControllerLink() {
        $controller = AdminController::find($this->controller_id);
        if ($controller) {
            return $controller->getShowLinkTag('name');
        }
        return '';
    }
    
    /**
     * Get permission string
     * @return string Permission as string
     */
    public function getPermissionValue() {
        if (isset(self::getArrayPermission()[$this->permission])) {
            return self::getArrayPermission()[$this->permission];
        }
        return '';
    }
    /**
     * Get permission as html format
     * @return string Permission as html format
     */
    public function getPermission() {
        if (isset(self::getArrayPermission()[$this->permission])) {
            $permission = self::getArrayPermission()[$this->permission];
            switch ($this->permission) {
                case self::PERMISSION_PRIVATE:
                    return '<span class="badge badge-danger">' . $permission . '</span>';
                case self::PERMISSION_PROTECTED:
                    return '<span class="badge badge-warning">' . $permission . '</span>';
                case self::PERMISSION_PUBLIC:
                    return '<span class="badge badge-success">' . $permission . '</span>';

                default:
                    break;
            }
            return;
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
            'key'           => 'required',
            'controller_id' => 'required',
            'permission'    => 'required',
        ];
    }
    
    /**
     * Get array permission
     * @return Array Key=>Value array
     */
    public static function getArrayPermission() {
        return [
            self::PERMISSION_PRIVATE    => 'Private',
            self::PERMISSION_PROTECTED  => 'Protected',
            self::PERMISSION_PUBLIC     => 'Public',
        ];
    }
}
