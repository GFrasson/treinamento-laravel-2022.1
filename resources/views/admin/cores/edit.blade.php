@extends('layouts.master')

@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Núcleo')
    @slot('url', route('cores.update', $core->id))
    @slot('form')
        @include('admin.cores.form')
    @endslot
@endcomponent

@endsection