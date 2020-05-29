<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class regController extends Controller
{
    public function johnmayer()
    {
        return view('johnmayer');
    }

    public function lauv()
    {
        return view('lauv');
    }

    public function kodaline()
    {
        return view('kodaline');
    }
    public function ticketing()
    {
        $concert = DB::table('tb_concert')->get();
        $ticket = DB::table('tb_ticket')->get();

        return view('ticketing', ['concert' => $concert], ['ticket' => $ticket]);
    }

    public function purchase(Request $request)
    {
        DB::table('tb_order')->insert([

            'cust_id' => $request->cust_id,
            'concert_id' => $request->concert,
            'ticket_id' => $request->class,
            'order_quantity' => $request->amount,
            'status' => 'paid'
        ]);

        return view('purchase');
    }

    public function usertickets()
    {
        $id = Auth::user()->id;
        $orderdetails = DB::table('orderdetails')->where(['cust_id' => $id], '=', ['status' => 'paid'])->get();

        return view('tickets', ['details' => $orderdetails]);
    }

    public function cancel(Request $request)
    {
        DB::table('tb_order')->where('order_id', $request->id)->update([
            'status' => 'cancelled'
        ]);

        return view('cancel');
    }
}
