@extends('layouts.constra')

@section('css')
<style type="text/css">
  .post-body{
    padding-top: 0px;
    margin-top: -10px;
  }
  .Aligner {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .Aligner-item {
    max-width: 50%;
  }

  .Aligner-item--top {
    align-self: flex-start;
  }

  .Aligner-item--bottom {
    align-self: flex-end;
  }
.link:hover { color: #00FF00; } /* CSS link hover (green) */
.dropdown-backdrop {
  position: static;
}
</style>
@endsection
@section('banner')
 <h1 class="banner-title">
  {{$header->name}}
 </h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li><a href="{{route($type)}}">{{$type}}</a></li>
    <li>{{$header->slug}}</li>
 </ol>
@endsection

@section('body')
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

          <div class="sidebar sidebar-left hidden-xs hidden-sm">
            <div class="widget">
               <h3 class="widget-title">Categories</h3>
               <ul class="nav nav-tabs nav-stacked">
                  @foreach($menu as $m)
                    @if(count($m->submenu) > 0)
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$m->name}} <i
                            class="fa fa-angle-down pull-right"></i></a>
                        <ul class="dropdown-menu pull-right" role="menu">
                          @foreach($m->submenu as $submenu)
                          <li><a href="{{route($type.'-article', ['slug' => $submenu->slug])}}">{{$submenu->name}}</a></li>
                          @endforeach
                          <li><a href="{{route($type.'-article', ['slug' => $m->slug])}}">All {{$m->name}}</a></li>
                        </ul>
                      </li>
                    @else
                      <li class="{{ Request::url() === route($type.'-article', ['slug' => $m->slug]) ? '' : ''}}">
                        <a href="{{route($type.'-article', ['slug' => $m->slug])}}">{{$m->name}}</a>
                      </li>
                    @endif
                  @endforeach
               </ul>
            </div><!-- Widget end -->
          </div><!-- Sidebar end -->
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          @if(count($leads) > 0)
            @foreach($leads as $lead)
            <a href="{{route($type.'-article-detail', ['slug' => $lead->slug])}}">
            <div class="row Aligner">
              <div class="col-xs-3">
                <img src='{{$lead->image_url}}' style="height: 150px; width: 150px;" class="hidden-xs">
                <img src='{{$lead->image_url}}' style="height: 75px; width: 75px;" class="hidden-sm hidden-md hidden-lg hidden-xl">
              </div>
              <div class="col-xs-9">
                <p style="font-size: 20px; font-weight: 800">
                  {{$lead->title}}
                </p>
              </div>
            </div>
            </a>
            <hr>
            @endforeach
          @else
            <div class="post">
              <p class="entry-title">Tidak Ada Artikel Untuk Kategori <i>{{$header->name}}</i></p>
            </div><!-- 1st post end -->         
          @endif

          <div class="paging">

            {{ $leads->links() }}
            <div class="hidden-md hidden-lg row col-sm-12" style="margin-top: 40px;">
               <div class="sidebar sidebar-left">
                  <div class="widget">
                     <h3 class="widget-title">Tips Category</h3>
                     <ul class="nav nav-tabs nav-stacked service-menu">
                  @foreach($menu as $m)
                    @if(count($m->submenu) > 0)
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$m->name}} <i
                            class="fa fa-angle-down pull-right"></i></a>
                        <ul class="dropdown-menu pull-right" role="menu">
                          @foreach($m->submenu as $submenu)
                          <li><a href="{{route($type.'-article', ['slug' => $submenu->slug])}}">{{$submenu->name}}</a></li>
                          @endforeach
                          <li><a href="{{route($type.'-article', ['slug' => $m->slug])}}">All {{$m->name}}</a></li>
                        </ul>
                      </li>
                    @else
                      <li class="{{ Request::url() === route($type.'-article', ['slug' => $m->slug]) ? '' : ''}}">
                        <a href="{{route($type.'-article', ['slug' => $m->slug])}}">{{$m->name}}</a>
                      </li>
                    @endif
                  @endforeach
                     </ul>
                  </div><!-- Widget end -->
               </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

          </div>

        </div><!-- Content Col end -->

      </div><!-- Main row end -->

    </div><!-- Container end -->

@endsection
