<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trx extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'dci',
        'dco',
        'jumlahkamar',
        'hargatotal',
        'bukti',
        'status',
        'iduser',
        'idhotel'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'idhotel');
    }
}