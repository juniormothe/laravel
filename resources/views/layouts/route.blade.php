@php
    $title = isset($title) ? $title : 'Null';
    $subTitle = isset($subTitle) ? $subTitle : false;
    $module = isset($module) ? $module : false;
@endphp
<div class="page-header row no-gutters py-4">
    <div class="col-12 text-center text-sm-left mb-0">
        <nav aria-label="breadcrumb mb-0">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <h5 class="mb-0">{{ $title }}
                        @if ($subTitle)
                            <small style="color: #666; font-size: 14px">{{ $subTitle }}</small>
                        @endif
                    </h5>
                </li>
                @if ($module && file_exists('../resources/views/' . str_replace('.', '/', $module) . '.blade.php'))
                    <div class="ml-auto">
                        <li class="breadcrumb-item">
                            @component($module)
                            @endcomponent
                        </li>
                    </div>
                @endif
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col">
        @yield('object')
    </div>
</div>
