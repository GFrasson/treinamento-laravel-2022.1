@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('cores.create'))
        @slot('titulo', 'Núcleo')
        @slot('head')
            <th>Nome</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($cores as $core)
                <tr>
                    <td>{{ $core->name }}</td>
                    <td>{{ $core->email }}</td>
                    <td class="options">
                        <a href="{{ route('cores.show', $core->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('cores.edit', $core->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
    
                        <form class="form-delete d-inline-block" action="{{route('cores.destroy', $core->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection