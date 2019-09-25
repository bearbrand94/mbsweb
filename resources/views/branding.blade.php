@extends('layouts.constra')

@section('css')
<style type="text/css">
  .project-cat{
    margin-left: 35%;
    margin-top: 30px;
    padding: 4px 16px;
    font-size: 12px;
    /*color: white;*/
  }
  .project-cat:hover{
    cursor: pointer;
  }
</style>
@endsection

@section('banner')
 <h1 class="banner-title">BRANDING</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li>Branding</li>
 </ol>
@endsection

@section('body')
      <div class="container">
         <div id="isotope" class="isotope">
            @foreach($branding as $b)
           <div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item">
              <div class="isotope-img-container">
                 <a class="gallery-popup" href="{{$b->media_url}}">
                    <img class="img-responsive" src="{{$b->media_url}}" alt="">
                    <span class="gallery-icon"><i class="fa fa-search"></i></span>
                 </a>
                 <div class="project-item-info">
                    <div class="project-item-info-content" onclick="alert('A')">
                      <span class="project-cat">Download</span>
                    </div>
                 </div>
              </div>

           </div>
           @endforeach
         </div><!-- Isotop end -->
      </div><!-- Conatiner end -->
@endsection
