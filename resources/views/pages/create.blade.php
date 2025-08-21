@extends('components.layouts.app')
@section('title', 'Create Customer')

@section('content')
    <div class="">
        <h1>Create Customer</h1>
        <form action="{{ route('pages.store') }}" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="text" name="phone">

            <label>Address:</label>
            <textarea name="address"></textarea>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection