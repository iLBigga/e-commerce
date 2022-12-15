@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show</h1>
    <figure>
        <img src="{{ $product->image }}" alt="{{ $product->name }}">
    </figure>
    <ul>
        <li>{{ $product->name }}</li>
        <li>{{ $product->description }}</li>
    </ul>
</div>
@endsection