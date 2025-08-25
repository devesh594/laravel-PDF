@extends('components.layouts.app')
@section('title', 'Customer List')

@section('content')
    <h1>Welcome to Customer Management System 🎉</h1>
    <div class="mx-auto flex items-center justify-center">
        <a href="{{ route('pages.create') }}" class="btn btn-primary"
            style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Create Customer</a>
    </div>
@endsection