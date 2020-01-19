@extends('template')

@section('title')
    @if (isset($title))
        {{$title}}
    @endif
@endsection('title')

@section('content')
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Doctor</th>
            <th scope="col">Patient</th>
            <th scope="col">Date</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($visits as $visit)

        <tr>
            <th scope="row">{{$visit->id}}</th>
            <td>{{$visit->doctor_id}}</td>
            <td>{{$visit->patient_id}}</td>
            <td>{{$visit->date}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>
@endsection('content')