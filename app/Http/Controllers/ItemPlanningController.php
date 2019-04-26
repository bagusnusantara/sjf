<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\item_planning;
use DB;
use App\Http\Controllers\Controller;

class ItemPlanningController extends Controller
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
       $item_planning_list = item_planning::all();
       return view('ItemPlanning.index',compact('item_planning_list'));
     }
     // public function indexOutletAll(Request $request)
     //  {
     //
     //
     //       return view('Laporan.LaporanAll');
     //  }
     //  public function edit($so_hdr_so_num)
     //  {
     //      $dtl = so_detail::find($so_hdr_so_num);
     //      return view('invoice_print');
     //  }
     //  public function show($so_num)
     //  {
     //      $hdr = so_hdr::find($so_num);
     //      $dtl = so_detail::where('so_hdr_so_num', '=', $hdr->so_num)->get();
     //      $bayar = so_terbayar::where('so_hdr_so_num', '=', $hdr->so_num)->get();
     //      return view('Laporan.invoice_print',compact('hdr','dtl','bayar'));
     //  }
    }
