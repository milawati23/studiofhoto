<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;

class NotaController extends Controller
{
    public function show($id)
    {
        $transaction = Transaction::find($id);

        return view('nota.show', compact('transaction'));
    }


    public function cetak($id)
    {
        $transaction = Transaction::find($id);

        $pdf = Pdf::loadView('nota.pdf', compact('transaction'));

        return $pdf->download('nota-transaksi.pdf');
    }
}