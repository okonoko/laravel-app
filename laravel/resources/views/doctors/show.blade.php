@extends('template')

@section('title')
    @if (isset($title))
        {{$title}}
    @endif
@endsection('title')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            {{$doctor->name}}
        </div>
        <table class="card-body">
            <div class="table">
                <tr>
                    <td>Name:</td>
                    <td>{{$doctor->name}}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{$doctor->email}}</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>{{$doctor->phone}}</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>{{$doctor->address}}</td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>{{$doctor->status}}</td>
                </tr>
            </div>
        </table>
    </div>
</div>
@endsection('content')