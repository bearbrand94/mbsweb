@extends('layouts.constra')

@section('css')
    <style type="text/css">
      .ts-service-box-bg{
        padding-bottom: 50px;
        padding-top: 50px;
      }
      .btn-constra{
      }
  </style>
@endsection

@section('banner')
 <h1 class="banner-title">MENU</h1>
 <ol class="breadcrumb">
    <li>Selamat Datang, {{session('auth_data')->nama_agen}}</li>
 </ol>
@endsection

@section('body')
<div class="container">
    <div class="row">
    @component('menu-button', [
      'a_url'     => route('leadsgen'),
      'title'     => 'Leads Gen',
      'image_url' => asset('images/menu-icon/icon1.jpg')
    ])
    @endcomponent
    @component('menu-button', [
      'a_url'     => route('branding'),
      'title'     => 'Branding',
      'image_url' => asset('images/menu-icon/icon2.jpg')
    ])
    @endcomponent
    @component('menu-button', [
      'a_url'     => route('tips'),
      'title'     => 'Tips',
      'image_url' => asset('images/menu-icon/icon3.jpg')
    ])
    @endcomponent
    @component('menu-button', [
      'a_url'     => route('recruiting'),
      'title'     => 'Recruiting',
      'image_url' => asset('images/menu-icon/icon4.jpg')
    ])
    @endcomponent

    </div>
</div><!-- Container end -->
@endsection
