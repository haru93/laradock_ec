@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">
						<h5 class="card-title">{{ $product->unitprice }}</h5>
                        <p class="card-text">{{ $product->memo }}</p>
                        <input type='submit' class='btn btn-success btn-style mb20' value='カートに入れる'>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection