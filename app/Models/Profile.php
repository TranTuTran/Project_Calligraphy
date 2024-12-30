<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    public function national()
    {
        return $this->belongsTo(National::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
