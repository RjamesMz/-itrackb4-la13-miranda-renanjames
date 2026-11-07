@extends('layouts.app')

@section('content')
    <h1>Page not found</h1>
    <p>Error Page must have been deleted or corrupted</p>
    <a href="{{ route('medicines.index') }}">Back to the list</a>
@endsection
