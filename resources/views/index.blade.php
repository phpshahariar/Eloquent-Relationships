@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                @if(Auth::check())

                <div class="alert alert-success">
                    From - {{ Auth::user()->address->street}}
                </div>

                @endif


                <div class="card-header">Index</div>
                @foreach($posts as $post)
                    <div class="card-body">
                        <h3>{!! $post->title !!}</h3>
                        <hr>
                        <p>
                            {!! $post->category->name !!}
                            {!! $post->user->name !!}
                        </p>
                        <div class="">

                            @foreach($post->images as $image)
                                <img src='{{asset("image/$image->image")}}' alt="" height="100" width="100" /> 
                            @endforeach

                            {!! $post->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
