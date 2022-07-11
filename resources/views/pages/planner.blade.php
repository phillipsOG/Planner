

@extends('layouts.master')
@section('title', 'Planner')
@section('planner')
    <h2>Planner</h2>

@section('plans')
    @include('pages.add-to-planner')
@show
@endsection
