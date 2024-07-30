<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name', 'Outra coisa') }}</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
    href="{{ asset('assets/styles/shards-dashboards.1.1.0.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/extras.1.1.0.min.css') }}">
<!--
    <link rel="stylesheet" href="{{ asset('assets/styles/accents/danger.1.1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/accents/info.1.1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/accents/secondary.1.1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/accents/success.1.1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/accents/warning.1.1.0.css') }}">
    -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<style>
    td {
        vertical-align: middle !important;
    }

    .breadcrumb {
        display: flex;
        justify-content: space-between;
    }

    .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: none;
    }

    .form-control {
        border-color: #666 !important;
    }

    .is-invalid {
        border-color: red !important;
    }
</style>
