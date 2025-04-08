@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container mx-auto px-4">
    <div class="text-center py-12">
        <h1 class="text-4xl font-bold text-green-800">Welcome to CampusConnect</h1>
        <p class="mt-4 text-lg text-gray-600">Find or offer services and resources on your campus with ease.</p>
        <a href="/services" class="mt-6 inline-block bg-green-700 text-white px-6 py-3 rounded-xl hover:bg-green-800">Explore Services</a>
    </div>
</div>
@endsection
