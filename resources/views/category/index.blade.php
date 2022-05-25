@extends('layouts.app')

@section("title") Category Manager @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">Category Manager</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        <i class="feather-layers"></i>
                        Category List
                    </h4>
                    <hr>
                    <form action="{{ route('category.store') }}" method="post" class="row g-3 mb-3">
                        @csrf
                        <div class="col-auto ">
                            <input type="text" name="title" placeholder="New Category" value="{{ old("title") }}" class="form-control @error("title") is-invalid @enderror form-control-lg " required>
                        </div>
                        <div class="col-auto ">
                            <button class="btn btn-primary btn-lg">Add Category</button>
                        </div>
                        @error("title")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @if(session('message'))
                            <small class="text-success">{{ session('message') }}</small>
                        @endif
                    </form>
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
