<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('transactions.index', compact('transactions'));
    }


    public function store(Request $request)
    {
        Transaction::create([

            'kode_transaksi' => 'TRX'.time(),

            'total' => $request->harga * $request->jumlah,

            'status' => 'paid'

        ]);


        return redirect('/transactions');
    }


    public function destroy($id)
    {
        Transaction::find($id)->delete();

        return redirect('/transactions');
    }
}