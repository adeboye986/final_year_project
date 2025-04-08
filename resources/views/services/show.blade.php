@extends('layouts.app')

@section('content')
    <div class="service-detail">
        <h1>{{ $service->name }}</h1>
        <p>{{ $service->description }}</p>
        <p>Price: ${{ $service->price }}</p>
        <p>Category: {{ $service->category }}</p>
        @if($service->image)
            <img src="{{ asset('images/' . $service->image) }}" alt="{{ $service->name }}">
        @endif
    </div>
@endsection
