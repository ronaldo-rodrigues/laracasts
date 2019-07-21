@extends('layouts.app')
@section('content')

    @foreach($cards as $card)
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
    </div>

    </div>
    @endforeach
@stop


@section('footer')

@stop