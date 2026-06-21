<h2 align="center">
    Studio Foto
</h2>

<hr>

<h3 align="center">
    Nota Transaksi
</h3>

<p>
Kode Transaksi:
{{ $transaction->kode_transaksi }}
</p>

<p>
Total:
Rp {{ number_format($transaction->total) }}
</p>

<p>
Status:
{{ $transaction->status }}
</p>

<br>

<button onclick="window.print()"
style="padding:10px 20px;background:green;color:white;border-radius:5px;">
Cetak Nota
</button>

<br><br>

<p align="center">
Terima kasih sudah menggunakan jasa kami.
</p>