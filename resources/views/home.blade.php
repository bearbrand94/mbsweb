@extends('layouts.constra')

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
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('branding')}}">
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center">
              <img src="{{ asset('images/icon-image/branding.png') }}">
              <div class="ts-service-box-content">
                 <h4>Branding</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
        </a>
        <a href="{{route('tips')}}">
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center">
              <img src="{{ asset('images/icon-image/tips.png') }}" width="72px;" height="72px;">
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
           <div class="ts-service-box-bg text-center">
              <img src="{{ asset('images/icon-image/recruit.png') }}" width="72px;" height="72px;">
              <div class="ts-service-box-content">
                 <h4>Recruiting</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
      </a>
        <div class="col-md-4" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center">
              <img src="{{ asset('images/icon-image/setting.png') }}" width="72px;" height="72px;">
              <div class="ts-service-box-content">
                 <h4>Account Setting</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
    </div>


</div><!-- Container end -->
@endsection
