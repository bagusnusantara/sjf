<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\purchase_planning_hdr;
use App\po_detail;
use App\so_detail;
use App\so_terbayar;
use App\so_hdr;
use App\so_hdr1;
use App\st_um;
use App\customer;
use App\ItemPlanning;
use DB;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       return view('Laporan.index');
     }
     public function indexOutletAll(Request $request)
      {

           return view('Laporan.OutletAll.index');
      }
      public function edit($so_hdr_so_num)
      {
          $dtl = so_detail::find($so_hdr_so_num);
          return view('invoice_print');
      }
      public function show($so_num)
      {
          $hdr = so_hdr::find($so_num);
          $dtl = so_detail::where('so_hdr_so_num', '=', $hdr->so_num)->get();
          $bayar = so_terbayar::where('so_hdr_so_num', '=', $hdr->so_num)->get();
          return view('Laporan.invoice_print',compact('hdr','dtl','bayar'));
      }
    }
