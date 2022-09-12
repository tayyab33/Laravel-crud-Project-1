<?php

namespace App\Http\Controllers;

use App\Models\SalesBooks;
use Illuminate\Http\Request;

class SalesBooksController extends Controller
{
    public function index()
    {
        $Sales = SalesBooks::all();
        return view("index", ["Sales" => $Sales]);
    }
     public function save(Request $request)
    {
        $SalesBooks = new SalesBooks;
        $SalesBooks->bookprice = $request->bookprice;
        $SalesBooks->bookname = $request->bookname;
        $SalesBooks->save();
        return redirect('/');
    }
       public function update(Request $request, $id){
           $SalesBooks = SalesBooks::find($id);
           $SalesBooks->bookname = $request->bookname;
           $SalesBooks->bookprice = $request->bookprice;
           $SalesBooks->save();
           return redirect('/');
       }
       public function updateshow($id){
           $Sales = SalesBooks::find($id);
           return view('/update', compact('Sales'));
       }
       public function delete($id){
           $Sales = SalesBooks::find($id)->delete();
            return redirect('/');
       }
}
