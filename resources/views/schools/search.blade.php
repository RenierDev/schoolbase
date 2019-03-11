@extends('layouts.app')

@section('content')
    <h1>Search a school</h1>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search schools"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
    <div class="container">
        @if(isset($schools))
        {{-- <p> The Search results for your query <b> {{ $query }} </b> are :</p> --}}
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
                @foreach($schools as $school)
                <tr>
                    <td>{{$school->Institution_Name}}</td>
                    <td>{{$school->Suburb}}</td>
                    <td>{{$school->NatEmis}}</td>
                    <td>{{$school->EIDistrict}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
        <p>{{ $message }}</p>
        @endif
    </div>
@endsection