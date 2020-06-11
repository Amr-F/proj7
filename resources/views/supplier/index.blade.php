@extends('layouts.app')

@section('content')

<div id="wrapper">
    <div id="page" class="container">

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($supplier as $supplier)
                    <tr>
                        <td>{{ $supplier -> name}}</td>
                        <td>{{$supplier -> phone}}</td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
</div>
</div>
@endsection
