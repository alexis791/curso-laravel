@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_report/">Back</a>
        </div>
    </div>

    <hr>

<div class="row">
    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
    
    <div class="row">
        <div class="col">
            <form action="/expense_report/{{$report->id}}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type an email" value="{{ old('email') }}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection