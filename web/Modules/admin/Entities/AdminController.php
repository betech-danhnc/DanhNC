<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class AdminController extends Model
{
  
    protected $fillable = [
        'name','module_id','description', 'status', 'created_by',
    ];
}
