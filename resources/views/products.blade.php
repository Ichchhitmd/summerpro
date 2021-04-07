@extends('layouts.layout')
@section('food')
<div class="card-container"> 
<div class="card">
  <img src="/img/pepizza.jpg" alt="Pizza" class="card-image">
  <h1>Pepperoni Pizza</h1>
  <p class="price">Rs.550</p>
  <p>Best pepperoni pizza in town</p>
  <p><button>Add to Cart</button></p>
</div> 

<div class="card">
  <img src="/img/speghet.jpeg" alt="Spaghetti" class="card-image" >
  <h1>Spaghetti</h1>
  <p class="price">Rs.450</p>
  <p>Chicken Spaghetti cause there's no room for Veg.</p>
  <p><button>Add to Cart</button></p>
</div> 

<div class="card">
  <img src="/img/shwar.jpg" alt="shawarma" class="card-image">
  <h1> Shawarma</h1>
  <p class="price">Rs.320</p>
  <p>Fucking best.</p>
  <p><button>Add to Cart</button></p>
</div> 
</div>
@endsection