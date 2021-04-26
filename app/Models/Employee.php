<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';

    public function designation()
    {
    	return $this->belongsTo('App\Models\Designation', 'designation', 'id');
    }

    public function salary()
    {
    	return $this->belongsTo('App\Models\Salary', 'id', 'employee_id');
    }
}
