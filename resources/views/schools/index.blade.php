@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($schools as $school)
            
            <div class="col-lg-4">
                <div class="card">
                    
                    @if($school->NoFeeSchool == 'YES')
                    <div class="card-header bg-danger text-white">{{$school->Institution_Name}}</div>
                    @else
                    <div class="card-header bg-success text-white">{{$school->Institution_Name}}</div>
                    @endif
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Province: <span class="float-right">{{$school->Province}}</span>
                            </li>
                            <li class="list-group-item">
                                District: <span class="float-right">{{$school->EIDistrict}}</span>
                            </li>
                            <li class="list-group-item">
                                Status: <span class="float-right">{{$school->Status}}</span>
                            </li>
                            <li class="list-group-item">
                                Sector: <span class="float-right">{{$school->Sector}}</span>
                            </li>
                            <li class="list-group-item">
                                Phase: <span class="float-right">{{$school->Phase}}</span>
                            </li>
                            <li class="list-group-item">
                                OwnerLand: <span class="float-right">{{$school->OwnerLand}}</span>
                            </li>                                        
                                    
                        </ul>
                    </div>
                    <div class="card-footer">
                        NatEmis: <span class="float-right">{{$school->NatEmis}}</span>
                    </div>
                </div>
            </div>
            
        @endforeach
        {{$schools->links()}}
    </div>
@endsection