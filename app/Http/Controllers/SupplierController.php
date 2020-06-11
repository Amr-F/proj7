<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
public function index(){
    return view('supplier.index',['supplier'=>Supplier::all()]);
}
    public function create (){
        return view ('supplier.create');
}


    public function store (){

        Supplier::create(request()->validate([
            'name'=>'required',
            'phone'=>'required',
        ]));
        return redirect('/supplier/index');
    }
}
