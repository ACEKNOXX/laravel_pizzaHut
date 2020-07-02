@extends('layouts.app')

@section('content')
<div>
    <h4>Place order</h4>
    <div class="row">
    <form action="/pizzas/create" method="POST" class="col s12">
        @csrf

        <div class="row">
            <div class="input-field col s12 m6">
            <input id="name" type="text" name="name" class="validate">
            <label for="name">Your name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <select name="type">
                <option value="" >Choose your option</option>
                <option value="volcano" >volcano</option>
                <option value="beef and suya" >beef and suya</option>
                <option value="bigmack" >bigmack</option>
                </select>
                <label>Select type</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <select name="base">
                <option value="">Choose your option</option>
                <option value="sausage" >sausage</option>
                <option value="fish" >fish</option>
                <option value="stake" >stake</option>
                </select>
                <label>Select base</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <h6>Extra toppings</h6>
                <p>
                    <label>
                        <input type="checkbox" name="toppings[]" value="mushrooms"/>
                        <span>Mushrooms</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="toppings[]" value="pepper"/>
                        <span>pepper</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="toppings[]" value="garlic"/>
                        <span>garlic</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="toppings[]" value="olives"/>
                        <span>olives</span>
                    </label>
                </p>
            </div>
        </div>
        <div class="row">
            <button class="col s12 m6 btn" type="submit" name="add_pizza">order pizza</button>
        </div>
    </form>
</div>
@endsection