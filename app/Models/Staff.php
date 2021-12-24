<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * @var string
     */
    protected $table = 'staff';

    /** 
    * @var string
    */
    protected $primaryKey = 'id';

    /** 
     * @var array
     */
    protected $fillable = ['name', 'designation', 'address'];

    
}
