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
              <h3>Detail</h3>
              <table class="table">
                  @foreach( $report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->created_at }}</td>
                    </tr>
                  @endforeach
              </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_report/{{ $report->id }}/expenses/create">New Space</a>
            <a class="btn btn-success" href="/expense_report/{{ $report->id }}/confirmSendMail">Send Mail</a>
        </div>
    </div>
@endsection