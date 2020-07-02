@extends('layouts.app')


@section('content')
<div class="">
    <h3>Home</h3>
    <p class="green-text">{{ session('msg')}}</p>
    <p>Check out all orders <a href="/pizzas">See orders</a></p>
    <p>Create orders <a href="/pizzas/create">Create order</a></p>
</div>
@endsection