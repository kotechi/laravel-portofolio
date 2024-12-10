<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\DataKeuntungan;

class KeuanganController extends Controller
{
    public function index()
    {
        // Ambil data keuntungan dari database
        $dataKeuntungan = DataKeuntungan::selectRaw('tanggal, SUM(pembeli) as total_pembeli')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->get();

        // Pisahkan data untuk chart
        $tanggal = $dataKeuntungan->pluck('tanggal')->toArray(); // Data tanggal (sumbu X)
        $totalPembeli = $dataKeuntungan->pluck('total_pembeli')->toArray(); // Data pembeli (sumbu Y)

        // Buat chart dengan Larapex Charts
        $chart = (new LarapexChart)->lineChart()
            ->setTitle('Pembelian Harian')
            ->setSubtitle('Jumlah pembelian berdasarkan tanggal')
            ->addData('Jumlah Pembeli', $totalPembeli) // Data sumbu Y
            ->setXAxis($tanggal); // Data sumbu X

        return view('admin.chart.index', compact('chart'));
    }
}
