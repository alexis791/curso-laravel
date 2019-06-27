@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Report {{ $report->title }}</h1>
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
            <p>Details..</p>
            <table class="table">
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amout }}</td>
                        <td>{{ $expense->created_at }}</td>
                    </tr>
                @endforeach
            </table>    
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn" href="/expense_reports/{{ $report->id}}/expenses/create">New Space</a>
        </div>
    </div>
@endsection