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
    /** Fillable array */
    protected $fillable = [
        'id', 'status', 'created_by', 'created_at', 'updated_at'
    ];
    
    /**
     * Get rules validate model
     * @return Array
     */
    public static function getRules()
    {
        return [];
    }
}
