@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <i class="fa fa-home"></i>
                    {{ __('You are logged in!') }}
                    <button class="btn btn-primary test">Test</button>
                </div>
                <br>
                {{ date('d - m - y | h : i : a') }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('foot')
    <script>
        $('.test').click(function (){
            alert("home");
        })
    </script>

@endsection
