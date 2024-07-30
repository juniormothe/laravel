<div>
    <div class="page-header row no-gutters py-4">
        <div class="col-12 text-center text-sm-left mb-0">
            <nav aria-label="breadcrumb mb-0">
                @switch($module)
                    @case('insert')
                        @component($view . '.components.module.insert')
                        @endcomponent
                    @break

                    @case('home')
                        @component($view . '.components.module.home', [
                            'total' => $list->total(),
                        ])
                        @endcomponent
                    @break

                    @case('view')
                    @case('edit')

                    @case('delete')
                        @component($view . '.components.module.view')
                        @endcomponent
                    @break

                    @default
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <h5 class="mb-0"> Title
                                </h5>
                            </li>
                        </ol>
                @endswitch
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-body p-3">
                    @switch($module)
                        @case('home')
                            @component($view . '.components.home.home', [
                                'list' => $list,
                            ])
                            @endcomponent
                        @break

                        @case('insert')
                            @component($view . '.components.insert.insert', [])
                            @endcomponent
                        @break

                        @case('view')
                        @case('edit')

                        @case('delete')
                            @component($view . '.components.view.view', [
                                'module' => $module,
                                'view' => $view,
                                'data' => $data,
                            ])
                            @endcomponent
                        @break

                    @endswitch
                </div>
            </div>
        </div>
    </div>
</div>
