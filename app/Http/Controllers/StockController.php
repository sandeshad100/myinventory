<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\stock;
use App\Models\category;

class StockController extends Controller
{
    //inc quantity

    public function getForm(){
        $categories = category::all();
        return view('buy',compact('categories'));
    }
    public function incItem($id)
    {
        $item = stock::find($id);
        return view('/increase', compact('item'));
    }
    public function incItemView(Request $request,$id)
    {
        $item = stock::find($id);
        $item->qty = ($item->qty + $request->qty);
        $item->update();
        return redirect()->route('show');
    }
     //dec quantity
     //pass id from display to increase form
     public function decItem($id)
     {
         $item = stock::find($id);
         return view('/decrease', compact('item'));
     }
     //get qty value and update then retuen view(display)
     public function decItemView(Request $request,$id)
     {
         $item = stock::find($id);
         $item->qty = ($item->qty - $request->qty);
         $item->update();
         return redirect()->route('show');
     }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $stock = new stock;
        $stock->item = $req->item;
        $stock->category_id = $req->category;
        $stock->qty = $req->qty;
        $stock->rate = $req->rate;
        $stock->save();
        return redirect('/display');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        $data =  stock::all();
        $category = category::all();
        return view('/display', compact('data','category'));
    }
    public function incForm()
    {
        return view('/display');
    }

    //category
    public function addCategory()
    {

        return view('/category');
    }
    public function addCategoryView(Request $request)
    {
      
       $category_tbl = new category;
       $category_tbl->category_name = $request->category;
       $category_tbl->save();
        return redirect()->route('show');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
    }
}
