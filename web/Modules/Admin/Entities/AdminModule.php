<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id                Id of record
 * @property string $name           Name of module
 * @property string $description    Description of module
 * @property int $status            Status
 * @property datetime $created_date Created date
 * @property int $created_by        Creator
 */
class AdminModule extends Model
{
    protected $fillable = [];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_modules';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function role()
//    {
//        return $this->belongsTo('Role');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function articles()
//    {
//        return $this->hasMany('Article');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function comments()
//    {
//        return $this->hasMany('Comment');
//    }
}
