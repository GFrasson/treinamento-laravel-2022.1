@extends('layouts.master')

@section('content')
    @component('admin.components.table')
        @slot('create', route('members.create'))
        @slot('titulo', 'Membros')
        @slot('head')
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('members.show', $member->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
    
                        <form class="form-delete d-inline-block" action="{{ route('members.destroy', $member->id) }}" method="post">
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