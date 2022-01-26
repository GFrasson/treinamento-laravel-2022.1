@extends('layouts.master')

@section('content')
@component('admin.components.show')
    @slot('title', 'Detalhes do Cargo')
    @slot('content')
        @include('admin.roles.form')
    @endslot
    @slot('back')
        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
        <a href="{{ route('roles.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
    @endslot
@endcomponent
@endsection