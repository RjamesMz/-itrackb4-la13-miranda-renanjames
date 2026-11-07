@extends('layouts.app')

@section('content')
    <h1>Internal Server Error</h1>
    <p>An error occurred while processing your request.</p>
    <a href="{{ route('medicines.index') }}">Back to the list</a>
@endsection
