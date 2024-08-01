@php
    $m = $m ? $m : false;
    $w = $w ? $w : false;
    $f = $f ? $f : false;
    $page = $page ? $page : false;
    $route = $route ? $route : false;
    $view = $view ? $view : false;
    $data = $data ? $data : false;
@endphp
<div class="row">
    @if ($data)
        <div class="col-12 mb-1">
            {{ Str::upper($data->name) }}
        </div>
        <div class="col-12 mb-3">
            <hr style="margin: 0px">
        </div>
        @switch($m)
            @case('view')
                <div class="col-12">
                    @component($view . '.components.view.details', [
                        'data' => $data,
                    ])
                    @endcomponent
                </div>
            @break

            @case('edit')
                <div class="col-12">
                    @livewire('test.insert-update', [
                        'route' => $route,
                        'filter' => $f,
                        'page' => $page,
                        'type' => 2,
                        'data' => $data,
                    ])
                </div>
            @break

            @case('delete')
                <div class="col-12">
                    @livewire('test.delete', [
                        'route' => $route,
                        'filter' => $f,
                        'data' => $data,
                    ])
                </div>
            @break

            @default
        @endswitch
    @else
    @endif
</div>
