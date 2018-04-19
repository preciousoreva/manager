@extends('layouts.app')

@section ('content')
    <div class="col-md-6 col-lg-6 col-md-offset-2 ">
        <div class="card-header">Companies</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($companies as $company)
                    <li class="list-group-item active">{{ $company->name }}</li>
                @endforeach

            </ul>
        </div>
    </div>

@endsection
