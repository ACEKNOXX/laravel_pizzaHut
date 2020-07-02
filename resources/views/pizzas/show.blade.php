@extends('layouts.app')

@section('content')
<div>
    <h4>{{$order->name}}'s order</h4>
    <p>type: {{$order->type}}</p>
    <p>base: {{$order->base}}</p>
    @if(!empty($toppings))
    <p>Toppings:</p>
    <ul>
        @foreach($toppings as $top)
        <li> <i class="material-icons">chevron_right</i> {{$top}}</li>
        @endforeach
    </ul>
    @endif
    <p> <a href="/pizzas">Back to orders</a></p>

    <form action="/pizzas/{{$order->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" name="delet_order" class='btn red'><i class="material-icons">delete_forever</i></button>
    </form>
</div>
@endsection