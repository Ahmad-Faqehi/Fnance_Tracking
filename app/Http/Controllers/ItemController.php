<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
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

        // // Todo: Chcek if email already usded
        // if(User::where('email', '=', $user->email)->first()){
        //     return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'The email is already used.'));
        // }
        
        // if($user->save()){
            
        // auth()->login($user);
        // return json_encode(array ('type'=>'success', 'title'=>'That Great', 'msg'=>'The registration done successfully.'));
        // }else{
        //     return json_encode(array ('type'=>'error', 'title'=>'Error', 'msg'=>'There is error while registering'));
        // }        
        
    }
}
