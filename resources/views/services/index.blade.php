@extends('layouts.app')

@section('title', 'Browse Campus Services')

@section('content')
<form method="GET" action="{{ route('services.index') }}">
    <input type="text" name="search" placeholder="Search services" value="{{ request('search') }}">
    <select name="category">
        <option value="">Select Category</option>
        <option value="Technology" {{ request('category') == 'Technology' ? 'selected' : '' }}>Technology</option>
        <option value="Health" {{ request('category') == 'Health' ? 'selected' : '' }}>Health</option>
    </select>
    <button type="submit">Search</button>
</form>

<div class="services">
    @foreach($services as $service)
        <div class="service-item">
            <h3>{{ $service->name }}</h3>
            <p>{{ $service->description }}</p>
            <a href="{{ route('services.show', $service->id) }}">View Details</a>
        </div>
    @endforeach
</div
@endsection
