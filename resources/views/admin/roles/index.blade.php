@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('roles.create'))
        @slot('titulo', 'Cargos')
        @slot('head')
            <th>Nome</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
    
                        <form class="form-delete d-inline-block" action="{{ route('roles.destroy', $role->id) }}" method="post">
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