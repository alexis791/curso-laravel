@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h2>¿Desea Eliminar <i>{{$report->title}}</i>?</h2>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <form action="/expense_report/{{$report->id}}" method="POST">
                @csrf
                @method('delete')
                <a class="btn btn-danger" href="/expense_report/">Cancel</a>
                <button class="btn btn-success" type="submit">Confirm</button>
            </form>
        </div>
    </div>
@endsection