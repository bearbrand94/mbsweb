@extends('layouts.constra-old')

@section('css')
    <style type="text/css">
      .ts-service-box-bg{
        background-color: white;
      }
      .ts-service-box-content>h4{
         color: black;
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
            <div class="col-md-offset-1 col-md-2" style="margin-bottom: 30px; ">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-2" style="margin-bottom: 30px; ">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Branding</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-2" style="margin-bottom: 30px; ">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Tips</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-2" style="margin-bottom: 30px; ">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Recruiting</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-2" style="margin-bottom: 30px; ">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>My Account</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
    </div>



</div><!-- Container end -->
@endsection
