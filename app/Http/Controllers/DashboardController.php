<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\purchase_planning_hdr;
use App\po_detail;
use App\so_detail;
use App\so_hdr;
use App\st_um;
use App\ItemPlanning;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
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
     public function getDashboard(Request $request)
      {
           $so_hdr = so_hdr::select(\DB::raw('SUM(grand_total) as total'), 'so_date')->groupBy(\DB::raw('so_date'))->get();
           //dd($so_hdr);
           return view('dashboard',compact('so_hdr'));
      }

      public function getFilteredData(Request $request) {
          $so = DB::select('select SUM(grand_total) as total, so_date
                            from so_hdr
                            where so_date >= ? and so_date <= ?
                            group by so_date', [$request->start, $request->end]);
          return response()->json($so, 200);
      }

      public function edit($so_hdr_so_num)
      {
          $dtl = so_detail::find($so_hdr_so_num);
          return view('invoice_print');
      }
      public function show($so_hdr_so_num)
      {
          $dtl = so_detail::find($so_hdr_so_num);
          return view('invoice_print');
      }
    }
