<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'matric_no', 'gender', 'date_of_birth', 'citizenship', 'marital_status', 'religion', 'active_status', 'year_of_study', 'id_no', 'email'];
}
