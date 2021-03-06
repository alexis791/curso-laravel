@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit {{ $report->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_report/">Backt</a>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="/expense_report/{{$report->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{$report->title}}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection