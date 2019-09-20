@extends('layouts.constra')

@section('banner')
 <h1 class="banner-title">leads</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li>Leads Gen</li>
 </ol>
@endsection

@section('body')
<div class="container">
  @foreach($menu as $key => $m)

  @if(($key+1) % 4 == 0)
  <div class="row">
  @endif
    <a href="{{route('article', ['slug' => $m->slug])}}">
        <div class="col-md-3" style="margin-bottom: 30px;">
           <div class="ts-service-box-bg text-center" style="min-height: 206px;">
              <img src="{{ $m->icon_url ? $m->icon_url : asset('images/icon-image/leadsgen.png') }}">
              <div class="ts-service-box-content">
                 <h4>{{$m->name}}</h4>
             </div>
           </div>
        </div><!-- Col 1 end -->
    </a>
  @if(($key+1) % 4 == 0)
  </div>
  @endif
  @endforeach
</div><!-- Container end -->
@endsection
