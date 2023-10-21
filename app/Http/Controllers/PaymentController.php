<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = Payment::all();
        // return $lecturers;
        if (count($payment) > 0) {
            return view("admin/payment/index")->with('payment_data', $payment);
        }
        return view("admin/payment/index")->with('payment_data', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $payment = Payment::all();
        if($request->lang=='0'){
            return view("admin/payment/create")->with('payment_data', $payment);
        }else{
            return view("admin/payment/create_chin")->with('payment_data', $payment);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'bank_name_th'=>$request->bank_name_th,
                'bank_number'=>$request->bank_number,
                'bank_name_ch'=>'',
            ];

        }else{ //ภาษาจีีน
            $prepareData=[
                'bank_name_ch'=>$request->bank_name_ch,
                'bank_number'=>$request->bank_number,
                'bank_name_th'=>'',
            ];
        }
        $payment = Payment::create($prepareData);
        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $payment_type = Payment::all();
        if($request->lang=='0'){
            return view("admin/payment/edit")->with('payment_data' ,$request);
        }else{
            return view("admin/payment/edit_ch")->with('payment_data' ,$request);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            $prepareData=[
                'bank_name_th'=>$request->bank_name_th,
                'bank_number'=>$request->bank_number,
            ];
        }else{ //ภาษาจีีน
            $prepareData=[
                'bank_name_ch'=>$request->bank_name_ch,
                'bank_number'=>$request->bank_number,
            ];
        }
        $payment_update = Payment::find($request->id);
        $payment_update->update($prepareData);
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $payment_del = Payment::find($request->id);
        $payment_del->delete();
        return redirect()->route('payment.index');
    }
}
