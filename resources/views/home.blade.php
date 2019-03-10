@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach(Auth::user()->posts as $post)
                    <div class="card-body">
                        <h3>{!! $post->title !!}</h3>
                        <hr>
                        <p>
                            {!! $post->category->name !!}
                            {!! $post->user->name !!}
                        </p>
                        <div class="">
                            {!! $post->description !!}
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
