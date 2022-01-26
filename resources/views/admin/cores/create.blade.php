@extends('layouts.master')

@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Núcleo')
    @slot('url', route('cores.store'))
    @slot('form')
        @include('admin.cores.form')
    @endslot
@endcomponent

@endsection