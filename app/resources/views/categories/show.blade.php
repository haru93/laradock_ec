@extends('layouts.app')

@section('content')
    <div class="container">
        <p>【 {{ $category->name }} 】 カテゴリ</p>
        <p>{{ $category->products->count() }} 件</p>

        <div class="row justify-content-center">
            @foreach ($category->products as $product)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('products.show', compact('product')) }}">{{ $product->name }}</a>
                    </div>
                    <div class="card-body">
						<h5 class="card-title">{{ $product->unitprice }} 円（税込）</h5>
                        <p class="card-text">{{ $product->memo }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection