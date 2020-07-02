@extends('layouts.app')

@section('content')
<div>
    <h3>Pizzas Order</h3>
    <a href="/">Home</a> / <a href="/pizzas/create">Place order</a>
    
    
    @if(!empty($orders))
    <ul>
        @foreach($orders as $order)
        <li>{{$loop->index+1}} {{ $order->name }} <a href="/pizzas/{{$order->id}}">See order</a></li>
        @endforeach
    </ul>
    @endif
</div>
@endsection