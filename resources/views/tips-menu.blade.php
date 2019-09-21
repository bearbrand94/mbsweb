@extends('layouts.constra')

@section('banner')
 <h1 class="banner-title">TIPS / FAQ</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li>Tips</li>
 </ol>
@endsection

@section('body')
<div class="container">
  <div class="row">
    @foreach($menu as $m)
      <a href="{{route('tips-article', ['slug' => $m->slug])}}">
          <div class="col-md-4" style="margin-bottom: 30px;">
             <div class="ts-service-box-bg text-center" style="min-height: 210px;">
                <img src="{{ $m->icon_url ? $m->icon_url : asset('images/icon-image/leadsgen.png') }}">
                <div class="ts-service-box-content">
                   <h4>{{$m->name}}</h4>
               </div>
             </div>
          </div><!-- Col 1 end -->
      </a>
    @endforeach
  </div>
</div><!-- Container end -->
@endsection
