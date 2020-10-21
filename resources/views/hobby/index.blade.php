@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All of the hobbies</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($hobbies as $hobby)
                         <li class="list-gorup-items">{{ $hobby->name }}</li>   
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
