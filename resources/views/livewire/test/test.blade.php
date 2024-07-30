<div>
    @extends('layouts.route', [
        'title' => 'Example',
        'subTitle' => '(listar)',
        'module' => $view . '.components.module.' . $module,
    ])

    @section('object')
        <div class="card card-small mb-4">
            <div class="card-body p-3">
                {{ $route }}
            </div>
        </div>
    @endsection
</div>
