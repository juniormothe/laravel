@php
    $module = $module ? $module : null;
    $view = $view ? $view : null;
    $data = $data ? $data : null;
@endphp

@if ($data)
    @switch($module)
        @case('view')
            @component($view . '.components.view.details', [
                'data' => $data,
            ])
            @endcomponent
        @break

        @case('edit')
            @component($view . '.components.view.edit', [
                'data' => $data,
            ])
            @endcomponent
        @break

        @case('delete')
            @component($view . '.components.view.delete', [
                'data' => $data,
            ])
            @endcomponent
        @break
    @endswitch
@else
    <div class="row">
        <div class="col-12 text-center">
            Nenhum item encontrado!
        </div>
    </div>
@endif
