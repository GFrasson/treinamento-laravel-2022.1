@extends('layouts.master')

@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar membro')
    @slot('url', route('members.update', $member->id))
    @slot('form')
        @include('admin.members.form')
    @endslot
@endcomponent

@endsection