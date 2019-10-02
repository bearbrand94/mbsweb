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
        <a href="{{route('leadsgen')}}">
            <div class="col-md-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('{{ asset('images/menu-icon/icon1.jpg') }}'); background-size: 100%;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('branding')}}">
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('{{ asset('images/menu-icon/icon2.jpg') }}'); background-size: 100%;">
              <div class="ts-service-box-content">
                 <h4>Branding</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
        </a>
        <a href="{{route('tips')}}">
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('{{ asset('images/menu-icon/icon3.jpg') }}'); background-size: 100%;">
              <div class="ts-service-box-content">
                 <h4>Tips</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
        </a>
    </div>
    <div class="row">
      <a href="{{route('leadsgen')}}">
        <div class="col-md-offset-2 col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('{{ asset('images/menu-icon/icon4.jpg') }}'); background-size: 100%;">
              <div class="ts-service-box-content">
                 <h4>Recruiting</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
      </a>
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url('{{ asset('images/menu-icon/icon5.jpg') }}'); background-size: 100%;">
              <div class="ts-service-box-content">
                 <h4>Account Setting</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
    </div>


</div><!-- Container end -->
@endsection
