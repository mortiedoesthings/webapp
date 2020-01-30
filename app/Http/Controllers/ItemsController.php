<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::get();
        return response()->json($items);
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
      $validator = Validator::make($request->all(), [
         'title' => 'required',
         'description' => 'required',
         'price' => 'required',
     ]);

     if ($validator->fails()) {
         return ['response' => $validator->messages(), 'success' => false];
     }

     $items = new Item();
     $items->title = $request->input('title');
     $items->description = $request->input('description');
     $items->price = $request->input('price');
     $items->save();

     return response()->json($items);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::find($id);
        return ;
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
      $validator = Validator::make($request->all(), [
         'title' => 'required',
         'description' => 'required',
         'price' => 'required',
     ]);

     if ($validator->fails()) {
         return ['response' => $validator->messages(), 'success' => false];
     }

     $items = Item::find(id);
     $items->title = $request->input('title');
     $items->description = $request->input('description');
     $items->price = $request->input('price');
     $items->save();

     return response()->json($items);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function getItems()
    {
    }
}
