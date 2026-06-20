<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'transaction_id',
        'jumlah_bayar',
        'kembalian',
        'metode_bayar',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
