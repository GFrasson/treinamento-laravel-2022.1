@extends('layouts.master')

@section('content')
@component('admin.components.show')
    @slot('title', 'Detalhes do Núcleo')
    @slot('content')
        @include('admin.cores.form')
        <div class="container">
            <ul>
                @foreach ($core->members as $member)
                    <li>
                        {{ $member->name }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endslot
    @slot('back')
        <a href="{{ route('cores.edit', $core->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
        <a href="{{ route('cores.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
    @endslot
@endcomponent
@endsection