<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //
    public function index(){
        $orders=Pizza::all();
        // return $orders;
        return view('pizzas',['orders'=>$orders]);
    }

    public function show($id){
        $order=Pizza::where('id',$id)->get();
        $ord=$order[0];
        $t=json_decode($ord->toppings);
        // return $order;
        return view('pizzas.show',['order'=>$ord,'toppings'=>$t]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();

        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->name=request('name');
        $pizzaArr=request('toppings');
        $pizzaArr=json_encode($pizzaArr);
        $pizza->toppings=$pizzaArr;

        $pizza->save();
        return redirect('/')->with('msg','Thank your for patronizing us, your order has been placed');
    }

    public function destory($id){
        $order=Pizza::findOrfail($id);
        $order->delete();

        return redirect('/')->with('msg','Order completed');
    }
}
