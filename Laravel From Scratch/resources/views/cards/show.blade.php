@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-md-6 col-md-offset-3">

        <h1>
            {{ $card->title }}
        </h1>
        <ul class="list-group">


        @foreach($card->notes as $note)
            <li class="list-group-item">
                {{ $note->body }}
                <a href="#" class="pull-right"> {{ $note->user->username }}</a>
            </li>
        @endforeach
        </ul>


        <form method="post" action="/cards/{{ $card->id }}/notes">
            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" class="form-control">{{ old ('body') }}</textarea>
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add note</button>
            </div>
        </form>

    </div>
</div>
@stop

@if(count($errors)) {
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach   
    </ul>
@endif
@section('footer')

@stop