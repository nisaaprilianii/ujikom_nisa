<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Sepatu;
use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_member = Member::count();
        $jumlah_sepatu = Sepatu::count();
        $penjualan = Penjualan::Select()->orderBy('tgl_bayar', 'desc')
                        ->limit(5)
                        ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->subDays(7);
        $total_minggu = Penjualan::Select(Penjualan::raw('SUM(jumlah_bayar) as total_price'))
                        ->whereBetween('tgl_bayar', [$endDate, $today])->first();
        return view('home.dashboard', compact('penjualan', 'jumlah_member',  'jumlah_sepatu'), ['total_minggu' => $total_minggu]);
    }

    public function indexMember()
    {
        $penjualan = Penjualan::Select()->where('id_member', Auth::User()->id)->get();
        // dd($penjualan);
        return view('home.dashboard-member', compact('penjualan'));
    }
}
