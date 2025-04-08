@extends('layouts.app')

@section('content')
    <h1>Your Services</h1>
    <div class="services">
        @foreach($services as $service)
            <div class="service-item">
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <a href="{{ route('services.show', $service->id) }}">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
