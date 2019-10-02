@extends('layouts.constra')

@section('banner')
  <div class="logo" style="padding-top: 50px;">
    <img src="{{ asset('images/logo.png')}}" alt="">
  </div>
  <h1 class="banner-title" style="color: black; font-size: 2.5em;">{{session('auth_data')->nama_agen}}</h1>
  <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg text-center" placeholder="Search Here" autocomplete="off" style="width: 50%; float: none; margin: 0 auto;">
@endsection

@section('body')
<div class="container">
    <div class="row">
        <a href="{{route('leadsgen')}}">
            <div class="col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
    <div class="row">
        <a href="{{route('leadsgen')}}">
            <div class="col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-offset-3 col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
        <a href="{{route('leadsgen')}}">
            <div class="col-md-3 col-xs-4" style="margin-bottom: 30px;">
               <div class="ts-service-box-bg text-center">
                  <img src="{{ asset('images/icon-image/leadsgen.png') }}" style="background-color: rgb(220,220,220);   border-radius: 50%; padding: 10px;">
                  <div class="ts-service-box-content">
                     <h4>Leads Gen</h4>
                 </div>
               </div>
            </div><!-- Col 1 end -->
        </a>
    </div>



</div><!-- Container end -->
@endsection
