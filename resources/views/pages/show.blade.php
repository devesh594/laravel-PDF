@extends('components.layouts.app')
@section('title', 'Customer Details')

@section('content')
    <div class="">
        <h1>Customer Details</h1>
        <p><strong>Name:</strong> {{ $customer->name }}</p>
        <p><strong>Email:</strong> {{ $customer->email }}</p>
        <p><strong>Phone:</strong> {{ $customer->phone }}</p>
        <p><strong>Address:</strong> {{ $customer->address }}</p>
    </div>
    <div class="flex gap-2">
        <a href="{{ route('pages.pdf', $customer->id) }}" class="btn btn-primary">Download PDF</a></button>
        <a href="{{ route('pages.edit', $customer->id) }}" class="btn btn-success">Edit</a>
    </div>
    <div>
        <form action="{{ route('pages.destroy', $customer->id) }}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this customer?');" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection