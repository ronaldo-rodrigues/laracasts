@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="/notes/{{ $note->id }}">

                {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea name="body" class="form-control"> {{ $note->body }}</textarea>
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update note</button>
                </div>
            </form>

        </div>
    </div>
@stop


@section('footer')

@stop