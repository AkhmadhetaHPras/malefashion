<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\DetailOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Orders-ListAll';        
        $orders = Order::with('address','detailorder')->paginate(10);   
        
        $address = Address::all();
        $detailorder = DetailOrder::all();

        return view('admin.app-order-list', compact('title', 'orders', 'address', 'detailorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function view(){
    //     return view('admin.app-order-in');
    // }

    public function incoming()
    {
        $title = 'Orders-Incoming';        
        $orders = Order::where('status','Waiting Confirmation')->paginate(10);   
        
        $address = Address::all();       

        return view('admin.app-order-in', compact('title', 'orders', 'address'));
    }

    public function invoice($id)
    {
        $order = Order::find($id);

        // return view('invoice', ['order' => $order]);
        $pdf = PDF::loadview('admin.app-invoice-print', ['order' => $order]);
        return $pdf->stream();
    }

    public function accept($id){        
        $orders = Order::find($id);        

        $orders->status = 'Processed';
        $orders->save();

        foreach($orders->detailorder as $i) {
            $i->variant->stock -= $i->quantity;
            $i->variant->save();
        }
        //jika data berhasil diupdate, akan kembali ke halaman incoming order
        return Redirect::back()
            ->with('success', 'Update order status successfully!');
    }

    public function reject($id){
        $orders = Order::with('address', 'detailorder')->where('id', $id)->first();

        $orders->status = 'Rejected';
        $orders->save();

        //jika data berhasil diupdate, akan kembali ke halaman incoming order
        return redirect()->route('orders-in')
            ->with('success', 'Update order status successfully!');
    }
}
