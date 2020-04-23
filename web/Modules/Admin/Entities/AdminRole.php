<?php

namespace Modules\Admin\Entities;


//This is the model class for table "admin_modules".
 
  protected $id             
  protected $name           
  protected $description   
  protected $status            
  protected $created_by        
  protected $created_at    
  protected $updated_at    

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
        'name','code','working_type','isStaff','weight','status', 'created_by'
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
    public static function getRules()
    {
        return [
            'name'          => 'required',
            'code'   => 'required',
            'working_type' =>'required',
            'isStaff'=>'required',
            'weight'=>'required',
            'status'=>'required',
        ];
    }
}

