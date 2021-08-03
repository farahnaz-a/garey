@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ Auth::user()->name }}'s Dashboard
@endsection


@section('content')

    <div class="text-center">
        <h5 style="padding: 100px; margin: 0 auto;">Your order details will be here</h5>
    </div>

@endsection