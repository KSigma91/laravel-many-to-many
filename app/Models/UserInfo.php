<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'birth'
    ];

    public function user() {
        return $this->belongsTo('App/Models/User');
    }
}
