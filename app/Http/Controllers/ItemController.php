<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
     
    
    public function index()
    {
        //
       
        $item = new Item();
        $item = $item::all();
        return view("items")->with("item",$item);

    }

    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //    dd($request);
        $this->validate(request(), [
            'name' => 'required',
            'price_creation' => 'required',
            'price_selling' => 'required',
            'category' => 'required'
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->price_creation = $request->input('price_creation');
        $item->price_selling = $request->input('price_selling');
        $item->category = $request->input('category');
        
        if($item->save()){
            return json_encode(array ('type'=>'success', 'title'=>'Add Done', 'msg'=>'The new product has been added.'));
        }else{
            return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'There some error while adding the product.'));
        }
     
        
    }

    public function update(Request $request){
        $item = new Item();
        $item = $item::find($request->id);
        $item->name = $request->input('name');
        $item->price_creation = $request->input('price_creation');
        $item->price_selling = $request->input('price_selling');
        $item->category = $request->input('category');  

       
        if($item->update()){
            return json_encode(array ('type'=>'success', 'title'=>'Update Done', 'msg'=>'The update done successfully.'));
        }else{
            return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'There is error while update'));
        }
    }

    public function delete($id)
    {
        //

        $item = new Item();
        $delete = $item::find($id)->forceDelete();

        if($delete){
            return redirect('/item');
        }else{
            return redirect('/item');
        }
    }
}
