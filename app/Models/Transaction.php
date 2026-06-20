<<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'total',
        'status',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}