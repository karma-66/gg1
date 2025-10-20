<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
