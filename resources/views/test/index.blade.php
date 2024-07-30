@extends('layouts.app')

@section('content')
    @livewire('test.test', [
        'route' => Route::currentRouteName(),
        'view' => 'test',
    ])
@endsection
