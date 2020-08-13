@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            @foreach ($products as $product)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">
						<h5 class="card-title">{{ $product->unitprice }}</h5>
                        <p class="card-text">{{ $product->memo }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection