<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class ProductController extends Controller
{
    public function showProductForm() 
    {
        return view('ProductForm');
    }

    public function useProductForm(Request $request) 
    {
        // Validation rules with correct syntax
        $request->validate([  
            'name' => 'required|string|max:30',  // Correct usage of 'max:30'
            'title' => 'required|string|max:10', // Correct usage of 'max:10'
            'tin' => 'required|numeric',
            'stock' => 'required|numeric' 
        ]);
    
        // Ensure you are working with the correct model
        $stock = new Stock();
        $stock->name = $request->name;
        $stock->title = $request->title;
        $stock->tin = $request->tin;
        $stock->stock = $request->stock;
    
        // Save the model instance correctly
        $stock->save();
        
        return redirect()->back()->with('message', 'Product Added in Stock!');
    }

    public function showProductStore()
        {
            $stock=Stock::all();
            return view('ProductStore',['stock'=>$stock]);
        }

        
    public function delete(Stock $stock)
    {
        $stock->delete();
        return redirect()->back()->with('message','Product Deleted!');
    }

    public function edit(Stock $stock)
    {
        return view('editForm',['stock'=> $stock]);
    }
    
    public function update(Request $request, Stock $stock) 
    {
                // Validation rules with correct syntax
                $request->validate([  
                    'name' => 'required|string|max:30',  // Correct usage of 'max:30'
                    'title' => 'required|string|max:10', // Correct usage of 'max:10'
                    'tin' => 'required|numeric',
                    'stock' => 'required|numeric' 
                ]);
            
                // Ensure you are working with the correct model
                $stock->name = $request->name;
                $stock->title = $request->title;
                $stock->tin = $request->tin;
                $stock->stock = $request->stock;
            
                // Save the model instance correctly
                $stock->save();
                return redirect()->back()->with('message', 'Successfully Updated in Stock!');
    }

}
