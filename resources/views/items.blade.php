@extends('layouts.layout')
@section('food')
<br>

<div class="container">
<div class="card-container">

@foreach($items as $item)
<div class="card">
        <img src="/img/{{$item->file}}" alt="Pizza" class="card-image">
        <h1>{{$item->name}}</h1>
        <p class="price">{{$item->price}}</p>
        <p>{{$item->details}} </p>
        <p><button>Add to Cart</button></p>
    </div>
 @endforeach


</div>
</div>


@endsection