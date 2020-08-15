@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('categories.show', compact('category')) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection