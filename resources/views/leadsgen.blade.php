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
</style>
@endsection
@section('banner')
 <h1 class="banner-title">
  {{$header->name}}
 </h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li><a href="{{route('leadsgen')}}">leads gen</a></li>
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
                          <li><a href="{{route('article', ['slug' => $submenu->slug])}}">{{$submenu->name}}</a></li>
                          @endforeach
                          <li><a href="{{route('article', ['slug' => $m->slug])}}">All {{$m->name}}</a></li>
                        </ul>
                      </li>
                    @else
                      <li class="{{ Request::url() === route('article', ['slug' => $m->slug]) ? '' : ''}}">
                        <a href="{{route('article', ['slug' => $m->slug])}}">{{$m->name}}</a>
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
            <a href="{{route('article-detail', ['slug' => $lead->slug])}}">
            <div class="row Aligner">
              <div class="col-xs-3">
                <img src='<?php 
                  $path1 = "$lead->image_url";
                  $path2 = "https://via.placeholder.com/150";
                  echo file_exists($path1) ? $path1 : $path2; 
                ?>' style="height: 150px; width: 150px;" class="hidden-xs">
                <img src='<?php 
                  $path1 = "$lead->image_url";
                  $path2 = "https://via.placeholder.com/75";
                  echo file_exists($path1) ? $path1 : $path2; 
                ?>' style="height: 75px; width: 75px;" class="hidden-sm hidden-md hidden-lg hidden-xl">
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
<!--             <ul class="pagination">
              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul> -->
          </div>

        </div><!-- Content Col end -->

      </div><!-- Main row end -->

    </div><!-- Container end -->

@endsection
