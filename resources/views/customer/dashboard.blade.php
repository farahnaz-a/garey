@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ Auth::user()->name }}'s Dashboard
@endsection


@section('content')

    <div class="text-center">
        <h5 style="padding: 100px; margin: 0 auto;">Your order details will be here</h5>

        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>

@endsection