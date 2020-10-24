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
                         <li class="list-group-item">
                            <a href="/hobby/{{ $hobby->id }}" title="show_details">{{ $hobby->name }}</a>
                            @auth
                            <a href="/hobby/{{  $hobby->id }}/edit" class="btn btn-sm btn-light ml-2"><i class="fas fa-edit"></i> Edit Hobby</a>
                            <form action="/hobby/{{ $hobby->id }}" class="float-right" style="display: inline" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Delete" class="btn btn-sm btn-outline-danger">
                            </form>
                            @endauth
                        </li>   
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-3">
                {{ $hobbies->links() }}
            </div>
            @auth
            <div class="mt-2">
                <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> Create New Hobby</a>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
