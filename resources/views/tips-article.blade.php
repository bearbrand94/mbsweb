@extends('layouts.constra')
@section('css')
<style type="text/css">
  ol { padding-left: 1.5em; }
</style>
@endsection
@section('banner')
 <h1 class="banner-title">TIPS</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li><a href="{{route('tips')}}">Tips</a></li>
    <li>{{Request::segment(3)}}</li>
 </ol>
@endsection

@section('body')
      <div class="container">
         <div class="row">
            <div class="hidden-sm hidden-xs col-lg-3 col-md-3 col-sm-12">
               <div class="sidebar sidebar-left">
                  <div class="widget">
                     <h3 class="widget-title">Tips Category</h3>
                     <ul class="nav nav-tabs nav-stacked service-menu">
                        @foreach($menu as $m)
                          <li class="{{ Request::url() === route('tips-article', ['slug' => $m->slug]) ? 'active' : ''}}"><a href="{{route('tips-article', ['slug' => $m->slug])}}">{{$m->name}}</a></li>
                        @endforeach
                     </ul>
                  </div><!-- Widget end -->
               </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->
            <div class="col-md-9">
               <!-- <h3 class="border-title border-left">Construction general</h3> -->
               <div class="panel-group panel-classic" id="tips-group1">
                @foreach($tips as $cnt => $t)
                  <div class="panel panel-default">
                      <div class="panel-heading">
                         <h4 class="panel-title"> 
                           <a data-toggle="collapse" class="{{$cnt == 0 ? '' : 'collapsed'}}" data-parent="#tips-group1" href="#collapse{{$t->id}}">
                           {{$t->title}}</a> 
                         </h4>
                      </div>
                      <div id="collapse{{$t->id}}" class="panel-collapse collapse {{$cnt == 0 ? 'in' : ''}}">
                           <div class="panel-body">
                              {!!$t->content!!}
                        </div>
                      </div>
                  </div><!--/ Panel 1 end-->
                @endforeach
               </div><!-- Accordion end -->
            </div><!-- Col end -->  
            <div class="hidden-md hidden-lg col-lg-3 col-md-3 col-sm-12">
               <div class="sidebar sidebar-left">
                  <div class="widget">
                     <h3 class="widget-title">Tips Category</h3>
                     <ul class="nav nav-tabs nav-stacked service-menu">
                        @foreach($menu as $m)
                          <li class="{{ Request::url() === route('tips-article', ['slug' => $m->slug]) ? 'active' : ''}}"><a href="{{route('tips-article', ['slug' => $m->slug])}}">{{$m->name}}</a></li>
                        @endforeach
                     </ul>
                  </div><!-- Widget end -->
               </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->
         </div><!-- Content row end -->

      </div><!-- Container end -->
@endsection
