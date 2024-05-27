<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobpost extends Model
{
    use HasFactory;

    protected $table = 'jobposts';
    protected $primarykey ='id';
    protected $fillable = [
        'title',
        'category',
        'job_type',
        'company',
        'city',
        'description',
        'deadline',
        'user_id'
    ];
}
