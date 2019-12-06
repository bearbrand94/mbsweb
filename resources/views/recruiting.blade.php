@extends('layouts.constra')

@section('css')
<style type="text/css">
  .post-body{
    padding-top: 0px;
    margin-top: -10px;
  }
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

          <div class="sidebar sidebar-left">
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
            <div class="post">
              <div class="post-body">
                <div class="entry-header">
                  <h2 class="entry-title">
                    <a href="{{route('article-detail', ['slug' => $lead->slug])}}">
                      {{$lead->title}}
                    </a>
                  </h2>
                  <div class="post-meta">
                    <span class="post-author">
                      <i class="fa fa-bookmark"></i><a href="#"> {{$lead->category_name}}</a>
                    </span>

                    <span class="post-comment"><i class="fa fa-calendar"></i> {{date('F d, Y', strtotime($lead->created_at))}}</span>
                  </div>
                </div><!-- header end -->

                <div class="entry-content">
                  <p>{!! substr(strip_tags($lead->content), 0, 300) !!}...</p>
                </div>

                <div class="post-footer">
                  <a href="{{route('article-detail', ['slug' => $lead->slug])}}" class="btn btn-primary">Read More</a>
                </div>
              </div><!-- post-body end -->
            </div><!-- 1st post end -->
            @endforeach
          @else
            <div class="post">
              <p class="entry-title">Tidak Ada Artikel Untuk Kategori <i>{{$header->name}}</i></p>
            </div><!-- 1st post end -->         
          @endif

          <div class="paging">
            {{ $leads->links() }}
          </div>

        </div><!-- Content Col end -->

      </div><!-- Main row end -->

    </div><!-- Container end -->
@endsection
