<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['students_id', 'email', 'password', 'nickname', 'firstname', 'lastname', 'faculty_id','area_id','profile_picture'];

    public function faculty()
    {
        return $this->belongsTo(faculty::class, 'faculty_id');
    }

    public function area()
    {
        return $this->belongsTo(area::class, 'area_id');
    }

}
