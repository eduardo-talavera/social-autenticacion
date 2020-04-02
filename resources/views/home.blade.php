@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session()->has('flash'))
                        <div class="alert alert-success">{{ session('flash') }}</div>
                    @endif

                    Has iniciado sesion
                    @if(session('alert'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
