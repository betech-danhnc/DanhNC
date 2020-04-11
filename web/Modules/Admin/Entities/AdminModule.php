<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

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
class AdminModule extends Model
{
    protected $fillable = [
        'name', 'description', 'status', 'created_by'
    ];
}
