<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $card = Card::all();
        // return $card;
        if (count($card) > 0) {
            return view("admin/card/index")->with('data_card', $card);
        }
        return view("admin/card/index")->with('data_card', '');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->lang=='0'){
            return view("admin/card/create");
        }else{
            return view("admin/card/create_chin");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/cards',$fileNameToStore);

                $prepareData=[
                    'card_name_th'=>$request->subject,
                    'card_image'=>$fileNameToStore,
                    'card_desc_th'=>$request->decs,
                    'card_name_ch'=>'',
                    'card_desc_ch'=>'',
                ];
            }else{

                $prepareData=[
                    'card_name_th'=>$request->subject,
                    'card_image'=>'noimages.png',
                    'card_desc_th'=>$request->decs,
                    'card_name_ch'=>'',
                    'card_desc_ch'=>'',
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/cards',$fileNameToStore);

                $prepareData=[
                    'card_name_ch'=>$request->subject,
                    'card_image'=>$fileNameToStore,
                    'card_desc_ch'=>$request->decs,
                    'card_name_th'=>'',
                    'card_desc_th'=>'',
                ];
            }else{

                $prepareData=[
                    'card_name_ch'=>$request->subject,
                    'card_image'=>'noimages.png',
                    'card_desc_ch'=>$request->decs,
                    'card_name_th'=>'',
                    'card_desc_th'=>'',
                ];
            }
        }

        $card = Card::create($prepareData);
        return redirect()->route('card.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        // return $request;
        if($request->lang=='0'){
            return view("admin/card/edit")->with('data_card', $request);
        }else{
            return view("admin/card/edit_ch")->with('data_card', $request);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, card $card)
    {
        if($request->_lang == '0'){ //ภาษาไทย
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/cards',$fileNameToStore);

                $prepareData=[
                    'card_name_th'=>$request->subject,
                    'card_image'=>$fileNameToStore,
                    'card_desc_th'=>$request->decs,
                ];
            }else{

                $prepareData=[
                    'card_name_th'=>$request->subject,
                    'card_desc_th'=>$request->decs,
                ];
            }

        }else{ //ภาษาจีีน
            if($request->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension= $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/images/cards',$fileNameToStore);

                $prepareData=[
                    'card_name_ch'=>$request->subject,
                    'card_image'=>$fileNameToStore,
                    'card_desc_ch'=>$request->decs,
                ];
            }else{

                $prepareData=[
                    'card_name_ch'=>$request->subject,
                    'card_desc_ch'=>$request->decs,
                ];
            }
        }

        $card_update =  Card::find($card->id);
        $card_update->update($prepareData);
        return redirect()->route('card.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $card_del = Card::find($request->id);
        $card_del->delete();
        return redirect()->route('card.index');
    }
}
