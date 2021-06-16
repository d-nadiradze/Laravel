@extends('layout')

@section('links')
    <link href="{{ asset('css/p2style.css') }}" rel="stylesheet">
@endsection

@section('content')

    <h2 class="header">user data table</h2>

    <div class="table">
        <table id="header">
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Date of Birth</th>
            </tr>
        </table>
        <table id="customers">
            @foreach($data as $el)
            <tr>
                <td>{{$el->name}}</td>
                <td>{{$el->country}}</td>
                <td>{{$el->dateofbirth}}</td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
