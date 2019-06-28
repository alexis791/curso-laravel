@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense from {{$expenseReport->title}}</h1>
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
            <form action="/expense_report/{{ $expenseReport->id }}/expenses/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Type amount" value="{{ old('amount') }}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection