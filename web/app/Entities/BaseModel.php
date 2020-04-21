<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the base model class.
 *
 * @property int $id                Id
 * @property int $status            Status
 * @property int $created_by        Created by
 * @property string $created_at     Created date
 * @property string $updated_at     Updated date
 */
class BaseModel extends Model
{
    //-----------------------------------------------------
    // Constants
    //-----------------------------------------------------
    //-----------------------------------------------------
    // Properties
    //-----------------------------------------------------
    /** Fillable array */
   
    
    //-----------------------------------------------------
    // Utility methods
    //----------------------------------------------------
    /**
     * Get show link of model
     * @return string Show link of model
     */
    public function getShowLink() {
        return '';
    }
    
    /**
     * Get show link with "<a>" tag
     * @param string $field Name of field
     * @return string Html string
     */
    public function getShowLinkTag($field = 'name') {
        return '<a href="' . $this->getShowLink() . '">' . $this->$field . '</a>';
    }
    
    //-----------------------------------------------------
    // Static methods
    //-----------------------------------------------------
    /**
     * Get rules validate model
     * @return Array
     */
    public static function getRules()
    {
        return [];
    }
    
    /**
     * Load list items as select array
     * @param string $field         Name of field
     * @param bool $emptyOption     True if need empty option, false otherwise
     * @return array Key=>Value array
     */
    public static function loadItemsAsSelectArray($field = 'name', $emptyOption = false) {
        $retVal = [];
        $models = self::all();
        if ($emptyOption) {
            $retVal['0'] = 'Select';
        }
        foreach ($models as $model) {
            $retVal[$model->id] = $model->$field;
        }
        return $retVal;
    }
}
