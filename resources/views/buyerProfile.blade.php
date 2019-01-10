@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buyer Profile</div>
				<h1>{{ Auth::user()->type }}</h1>
            </div>
        </div>
    </div>
</div>
@endsection