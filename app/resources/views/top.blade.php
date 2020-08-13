@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TOP') }}</div>

                <div class="card-body">
                    @foreach($tests as $test)
                    <p>{{ $test->id }}</p>
                    <p>{{ $test->title }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection