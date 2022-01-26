@extends('layouts.master')

@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar cargo')
    @slot('url', route('roles.store'))
    @slot('form')
        @include('admin.roles.form')
    @endslot
@endcomponent

@endsection