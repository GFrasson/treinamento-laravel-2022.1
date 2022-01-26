@if ($body != '' || !($createFirst ?? true) || request('search') || request('year'))
    <div class="card mt-4">
        @if (isset($create) || isset($titulo))
            <div class="card-header card-outline cor-backend">
                <h3 class="float-left m-0 table-title"><i class="{{ $icon ?? null }} mr-2"></i>{{ $titulo ?? null }}</h3>
                @if (isset($create))
                    <div class="float-right mr-2">
                        <div class="input-group input-group-sm">
                            <a href="{{ $create }}">
                                <button type="button" class="btn btn-dark icone-add-table">
                                    <b><i class="fas fa-plus-circle "></i> Adicionar</b>
                                </button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <div class="card-body table-responsive ">
            <table  class="table table-hover table-striped" id="{{ $id ?? null }}">
                <thead>
                    <tr>
                        {{ $head ?? null }}
                    </tr>
                </thead>
                <tbody id="tbody">
                    @if($body != '')
                        {{ $body ?? null }}
                    @else
                        <td>Nenhum item encontrado<td>
                        <td></td>
                        <td></td>
                    @endif
                </tbody>
            </table>
            <div style="margin-top: 40px;"></div>
            {{ $footer ?? null }}
        </div>
    </div>
@else
    <div class="text-center" style="color: #949699">
        <i class="fas fa-exclamation-circle" style="font-size: 10em"></i>
        <p class="mb-4 h2">Nenhum item encontrado!</p>
        <a href="{{ $create ?? '#' }}">
            <button type="button" class="btn btn-dark">
                <b><i class="fas fa-plus-circle"></i> Adicionar novo item</b>
            </button>
        </a>
    </div>
@endif

@push('js')
    <script>
        $('select[value]').each(function () {
            $(this).val($(this).attr('value'));
        });
    </script>
@endpush