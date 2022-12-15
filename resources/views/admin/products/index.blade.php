@extends('layouts.app')

@section('content')
<div class="container">
    <h1>index</h1>
    <ul>
        @foreach ($products as $p)
            <li>
                {{$p->name}}
                <a href="{{ route('admin.products.show', $p) }}" type="button" class="btn btn-primary btn-sm">Apri</a>
            </li>      
        @endforeach
    </ul>
</div>
@endsection