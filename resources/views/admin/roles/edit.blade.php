@extends('layouts.master')

@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar cargo')
    @slot('url', route('roles.update', $role->id))
    @slot('form')
        @include('admin.roles.form')
    @endslot
@endcomponent

@endsection