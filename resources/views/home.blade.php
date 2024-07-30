@extends('layouts.app')

@section('content')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 text-center text-sm-left mb-0">
            <nav aria-label="breadcrumb mb-0">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <h5 class="mb-0">Information</h5>
                    </li>
                    <div class="ml-auto">
                        <li class="breadcrumb-item">technical</li>
                    </div>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <tbody>
                            @foreach ($info as $key => $value)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td style="padding: 0px" colspan="10"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
