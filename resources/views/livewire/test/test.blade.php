<div>
    <div class="page-header row no-gutters py-4">
        <div class="col-12 text-center text-sm-left mb-0">
            <nav aria-label="breadcrumb mb-0">
                @component($view . '.components.page-header.header', [
                    'm' => $m,
                    'view' => $view,
                    'list' => $list,
                    'data' => $data,
                    'title' => 'Example',
                ])
                @endcomponent
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-body p-3">
                    @switch($m)
                        @case('insert')
                            @livewire('test.insert-update', [
                                'route' => $route,
                                'filter' => $f,
                                'page' => $page,
                                'type' => 1,
                            ])
                        @break

                        @case('home')
                            @component($view . '.components.list.list', [
                                'list' => $list,
                            ])
                            @endcomponent
                        @break

                        @case('view')
                        @case('edit')

                        @case('delete')
                            @component($view . '.components.view.view', [
                                'm' => $m,
                                'w' => $w,
                                'f' => $f,
                                'page' => $page,
                                'route' => $route,
                                'view' => $view,
                                'data' => $data,
                            ])
                            @endcomponent
                        @break

                        @default
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
