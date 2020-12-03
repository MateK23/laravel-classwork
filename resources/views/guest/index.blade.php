@extends('layouts.app')

@section('content')

{{--  news  --}}


@foreach($news as $value)

<div class="row">
    <div class="col-md-4 col-lg-3">
        <div class="card">
            <img src="{{ $value->image }}">
            {{--  {{ assets("uploads_dir')."/".$value->image }}  --}}
            <h1>{{ $value->title }}</h1>
            <a href="">{{ $value->readmore }}</a>
        </div>
    </div>
</div>
@endforeach

@endsection
