<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Vegan restaurant for school Project">
  <meta name="author" content="Remi, Moun-Moun, Kojak">
  <meta name="keyword" content="Vegan,restaurant,esgi">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin</title>
  <link rel="stylesheet" href="/vendor/DataTables/datatables.min.css">
  {{-- {!! Html::style('vendor/DataTables/datatables.min.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/flag-icon.min.css">
  {{-- {!! Html::style('vendor/css/flag-icon.min.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/font-awesome.min.css">
  {{-- {!! Html::style('vendor/css/font-awesome.min.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/simple-line-icons.min.css">
  {{-- {!! Html::style('vendor/css/simple-line-icons.min.css') !!} --}}
  <link rel="stylesheet" href="/css/style.css">
  {{-- {!! Html::style('css/style.css') !!} --}}
  <link rel="stylesheet" href="/css/shared.css">
  {{-- {!! Html::style('css/shared.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/daterangepicker.min.css">
  {{-- {!! Html::style('vendor/css/daterangepicker.min.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/gauge.min.css">
  {{-- {!! Html::style('vendor/css/gauge.min.css') !!} --}}
  <link rel="stylesheet" href="/vendor/css/toastr.min.css">
  {{-- {!! Html::style('vendor/css/toastr.min.css') !!} --}}

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1 px-3" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto col-md-2">
      <li class="nav-item">
        <a href="/" class="btn btn-outline-dark"> <i class="fa fa-globe" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link nav-pill avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="admin/users/{{ Auth::user()->id }}"><i class="fa fa-user"></i> Profile<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="/users/{{ Auth::user()->id }}/edit"><i class="fa fa-pencil"></i> Edit Profile<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i> Logout<span class="badge badge-warning">42</span></a>
        </div>
      </li>

    </ul>
  </header>
  <div class="app-body">
