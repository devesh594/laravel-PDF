@extends('components.layouts.app')
@section('title', 'Edit Customer')

@section('content')
    <div class="">
        <h1>Edit Customer</h1>
        <form action="{{ route('pages.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Name:</label>
            <input type="text" name="name" value="{{ $customer->name }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ $customer->email }}" required>

            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $customer->phone }}" required>

            <label>Address:</label>
            <textarea name="address" required>{{ $customer->address }}</textarea>

            <button type="submit">Update</button>
        </form>
    </div>

@endsection