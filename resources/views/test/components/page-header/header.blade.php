@php
    $m = $m ? $m : false;
    $view = $view ? $view : false;
    $list = $list ? $list : false;
    $data = $data ? $data : false;
    $title = $title ? $title : 'NULL';
@endphp
@switch($m)
    @case('home')
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <h5 class="mb-0">{{ $title }} <small
                        style="font-size: 14px; color: #666">({{ $list ? $list->total() : 0 }})</small></h5>
            </li>
            <li class="breadcrumb-item">
                <table>
                    <tr>
                        <td title="inserir">
                            <button wire:click="controlModule('insert')"
                                style="padding: 4px; padding-left: 6px; padding-right: 6px;" type="submit"
                                class="btn btn-sm btn-outline-secondary">
                                <i class="material-icons">add</i>
                            </button>
                        </td>
                    </tr>
                </table>
            </li>
        </ol>
    @break

    @case('insert')
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <h5 class="mb-0">{{ $title }} <small style="font-size: 14px; color: #666">(inserir)</small></h5>
            </li>
            <li class="breadcrumb-item">
                <table>
                    <tr>
                        <td title="fechar">
                            <button wire:click="controlModule('home')"
                                style="padding: 4px; padding-left: 6px; padding-right: 6px;" type="submit"
                                class="btn btn-sm btn-outline-secondary">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                </table>
            </li>
        </ol>
    @break

    @case('view')
    @case('edit')

    @case('delete')
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <h5 class="mb-0">{{ $title }} <small style="font-size: 14px; color: #666">(item)</small></h5>
            </li>
            <li class="breadcrumb-item">
                <table>
                    <tr>
                        @if ($view)
                            <td style="padding-right: 10px">
                                @component($view . '.components.select-module.select', [])
                                @endcomponent
                            </td>
                        @endif
                        <td title="fechar">
                            <button wire:click="controlModule('home')"
                                style="padding: 4px; padding-left: 6px; padding-right: 6px;" type="submit"
                                class="btn btn-sm btn-outline-secondary">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                </table>
            </li>
        </ol>
    @break

    @default
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <h5 class="mb-0">{{ $title }}</h5>
            </li>
        </ol>
@endswitch
