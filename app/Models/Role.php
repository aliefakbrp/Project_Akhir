<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['idrole'];

    // protected $guarded = [];

    public function trxrole()
    {
        return $this->hasOne(Trxrole::class);
    }
}