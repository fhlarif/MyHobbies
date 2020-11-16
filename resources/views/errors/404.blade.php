@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
    <a class="not-found" href="/hobby/">Go back</a>
    <style>
        .not-found{
            margin: auto;
      width: 50%;
      border: 3px solid green;
      padding: 10px;
        }
    </style>   


@section('message', __('Not Found. Go back to this link: http://myhobbies.test/sdsd'))
