<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{
    use HasFactory;
    public function test()
    {
        return $this->hasMany(test3::class);
    }
}
