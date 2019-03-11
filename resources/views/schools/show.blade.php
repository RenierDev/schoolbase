@extends('layouts.app')

@section('content')

    <h1> {{$school->Institution_Name}} </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Suburb</th>
                <th>NatEmis</th>
                <th>EIDistrict</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$school->Institution_Name}}</td>
                <td>{{$school->Suburb}}</td>
                <td>{{$school->NatEmis}}</td>
                <td>{{$school->EIDistrict}}</td>
            </tr>
        </tbody>
    </table>

@endsection