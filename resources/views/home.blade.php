@extends('layouts.app')


@section('content')
    <h2>Medicine List and Inventory Tracker</h2>
    <p>Keep your medicine stock fully organized with a straightforward inventory system. Easily add new medicines as they arrive, remove discontinued items, and track stock levels in real time to ensure your list is always accurate.</p>
    <a href="{{ route('medicines.index') }}" class="btn btn-primary">All Medicines</a>



    <div class="row g-3 mb-4 mt-1">
        <div class="col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <div class="display-6 fw-bold"> {{ $medicineCount }}</div>
                    <div class="text-muted">medicines on record</div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <div class="display-6 fw-bold"> {{ $typeCount }}</div>
                    <div class="text-muted">types on record</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="col-sm-6">
            <div class="card-body d-flex align-items-center gap-4">
                <img src="{{ asset('img/me.jpg') }}" alt="" width="96" height="96"
                class="rounded-circle object-fit-cover">
                <div>
                    <h5 class="mb-1">Renan James Z. Miranda</h5>
                    <div class="text-muted small">BSIT . 4th Year . Block 4C</div>
                </div>
            </div>
        </div>
    </div>
@endsection

