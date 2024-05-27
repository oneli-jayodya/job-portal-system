<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'applies';
    protected $primarykey ='id';
    protected $fillable = [
        'name',
        'email',
        'gender',
        'birthday',
        'nic',
        'describe',
        'job_title',
        'company',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
