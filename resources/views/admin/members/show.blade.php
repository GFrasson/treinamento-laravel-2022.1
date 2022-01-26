@extends('layouts.master')

@section('content')
@component('admin.components.show')
    @slot('title', 'Detalhes do Membro')
    @slot('content')
        @include('admin.members.form')
    @endslot
    @slot('back')
        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
        <a href="{{ route('members.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
    @endslot
@endcomponent
@endsection
