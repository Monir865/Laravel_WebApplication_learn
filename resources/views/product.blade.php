@extends('layouts.main')

@section('product-section')

    <h1>Let's try to hit a button</h1><br>

    <a href="{{route('customer.register.form')}}">
        <button class="btn btn-primary">Click</button>
    </a>
@endsection