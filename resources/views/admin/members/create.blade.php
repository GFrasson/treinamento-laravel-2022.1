@extends('layouts.master')

@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar membro')
    @slot('url', route('members.store'))
    @slot('form')
        @include('admin.members.form')
    @endslot
@endcomponent

@endsection