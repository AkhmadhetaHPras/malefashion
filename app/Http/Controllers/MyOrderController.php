<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class MyOrderController extends Controller
{
    public function index()
    {

        $title = 'Home';
        $myorder = User::find(Auth::user()->id)->order;

        $waiting = User::find(Auth::user()->id)->waitingorder;
        $processed = User::find(Auth::user()->id)->proceedorder;
        $sent = User::find(Auth::user()->id)->sentorder;
        // $paid = User::find(Auth::user()->id)->paidorder;
        $completed = User::find(Auth::user()->id)->completeorder;
        $canceled = User::find(Auth::user()->id)->canceledorder;

        // return dd($myorder);
        return view('myorders', compact('title', 'waiting', 'processed', 'sent', 'completed', 'canceled'));
    }

    public function invoice($id)
    {
        $order = Order::find($id);

        // return view('invoice', ['order' => $order]);
        $pdf = PDF::loadview('invoice', ['order' => $order]);
        return $pdf->stream();
    }
}
