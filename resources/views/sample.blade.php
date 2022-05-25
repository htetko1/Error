@extends('layouts.app')

@section("title") Sample @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item"><a href="#">Sample</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sample Page</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        <i class="feather-message-square"></i>
                        Sample Page
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet assumenda, at deserunt dolores, doloribus dolorum eligendi error illo maiores nisi obcaecati odit porro possimus provident sed sunt, ut veritatis?
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
