@extends('layouts.constra')

@section('css')
  <style type="text/css">
    .entry-title{
      color: rgb(255, 182, 0);
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
    .img-circle {
        border-radius: 50%;
    }
  section{
    padding-top: 0px;
  }



  .team-social-icons a i {
    color: #555
  }
  </style>
@endsection

@section('body')
      <div class="post-media post-image image-angle hidden-md hidden-lg hidden-xl">
         <img src="{{$lead->image_url}}" class="img-responsive" alt="" width="100%">
      </div>
      <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
         <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
               <div class="post-content post-single">
                  <div class="post-media post-image image-angle hidden-sm hidden-xs">
                     <img src="{{$lead->image_url}}" class="img-responsive" alt="" width="100%">
                  </div>
                  <div class="post-body">
                     <div class="entry-header">
                        <h1 class="entry-title">
                          {{$lead->title}}
                        </h1>
                     </div><!-- header end -->

                     <div class="entry-content">
                        {!!$lead->content!!}
                     </div>

                     <div class="tags-area clearfix">
                        <div class="post-tags pull-left">
                           <a href="{{route('article', ['slug' => $category->slug])}}">
                              <i class="fa fa-angle-left" style="margin-right: 5px;"></i> {{$category->name}}
                           </a>
                        </div>

                        <div class="pull-right hidden-xs col-sm-8 col-md-8 text-right">
                           <div class="form-inline">
                             <div class="form-group" style="width: 100%;">
                              <label>Share:</label>
                              <input type="text" disabled name="" class="form-control" value="{{route('shared-article', ['slug' => $lead->slug, 'id' => session('auth_data')->kode_agen] )}}">
                              <button class="btn btn-primary" onclick="link_copy()" id="btn-copy">Copy Link</button>
                             </div>
                          </div>
                        </div>

                        <div class="pull-left row col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="margin-top: 15px;">
                           <div class="form-inline">
                             <div class="form-group" style="width: 100%;">
                              <label>Share:</label>
                              <input type="text" disabled name="" class="form-control" value="{{route('shared-article', ['slug' => $lead->slug, 'id' => session('auth_data')->kode_agen] )}}">
                              <button class="btn btn-primary" onclick="link_copy()" id="btn-copy">Copy Link</button>
                             </div>
                          </div>
                        </div>

                     </div>
                     
                  </div><!-- post-body end -->
               </div><!-- post content end -->
            </div><!-- Content Col end -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
               <div class="sidebar sidebar-right">
	               <div class="ts-team-wrapper">
	                  <div class="team-img-wrapper">
                      <!-- Image shown will be avatar1.jpg for now because API is not showing "foto" data on login -->
                      @if(isset(session('auth_data')->foto))
                        @if(session('auth_data')->foto != "")
                        <img alt="" src="{{session('auth_data')->foto}}" class="img-responsive">
                        @else
                        <img alt="" src="{{asset('images/avatar/avatar1.jpg')}}" class="img-responsive">
                        @endif
                      @else
                        <img alt="" src="{{asset('images/avatar/avatar1.jpg')}}" class="img-responsive">
                      @endif
	                  </div>
	                  <div class="ts-team-content-classic">
	                     <h3 class="ts-name">{{session('auth_data')->nama_agen}}</h3>
	                     <p class="ts-designation"><i class="fa fa-envelope" style="margin-right: 5px;"></i> {{session('auth_data')->email_agen}}</p>
	                     <p class="ts-designation"><i class="fa fa-phone" style="margin-right: 8px;"></i> {{session('auth_data')->no_hp}}</p>
                       @if(isset(session('auth_data')->whatsapp_agen) && session('auth_data')->whatsapp_agen != "")
                       <p class="ts-designation"><i class="fa fa-whatsapp" style="margin-right: 8px;"></i> {{session('auth_data')->whatsapp_agen}}</p>
                       @endif
	                     <p class="ts-description">{{session('auth_data')->nama_agen}} is a {{session('auth_data')->jabatan_agen}} on MBS Prudential Agency</p>
	                     <div class="team-social-icons">
                           @if(isset(session('auth_data')->email_agen) && session('auth_data')->email_agen != "")
                          <a target="_blank" href="mailto:{{session('auth_data')->email_agen}}"><i class="fa fa-envelope-o"></i></a>
                           @endif
                           @if(isset(session('auth_data')->instagram_agen) && session('auth_data')->instagram_agen != "")
                           <a target="_blank" href="https://www.instagram.com/{{session('auth_data')->instagram_agen}}"><i class="fa fa-instagram"></i></a>
                           @endif                          
                           @if(isset(session('auth_data')->whatsapp_agen) && session('auth_data')->whatsapp_agen != "")
                           <a target="_blank" href="https://api.whatsapp.com/send?phone={{session('auth_data')->whatsapp_agen}}"><i class="fa fa-whatsapp"></i></a>
                           @endif
	                     </div><!--/ social-icons-->
	                  </div>
	               </div><!--/ Team wrapper 1 end -->
               </div>
            </div><!-- Sidebar Col end -->
         </div><!-- Main row end -->

          <div class="row Aligner hidden-md hidden-lg hidden-xl">
            <div class="col-xs-5 text-center">
              <img src='<?php 
                $path1 = isset(session('auth_data')->foto) ? session('auth_data')->foto : null;
                $path2 = "https://via.placeholder.com/150";
                echo file_exists($path1) ? $path1 : $path2; 
              ?>' style="height: 150px; width: 150px;" class="hidden-xs img-circle">
              <img src='<?php 
                $path1 = "$lead->image_url";
                $path2 = "https://via.placeholder.com/150";
                echo file_exists($path1) ? $path1 : $path2; 
              ?>' style="height: 125px; width: 125px;" class="hidden-sm img-circle"">
            </div>
            <div class="col-xs-7">
             <h3 class="ts-name" style="margin-bottom: 5px;">{{session('auth_data')->nama_agen}}</h3>
             <p class="ts-designation" style="margin-bottom: 0px;"><i class="fa fa-envelope" style="margin-right: 5px;"></i> {{session('auth_data')->email_agen}}</p>
             <p class="ts-designation" style="margin-bottom: 0px;"><i class="fa fa-phone" style="margin-right: 8px;"></i> {{session('auth_data')->no_hp}}</p>
             @if(isset(session('auth_data')->whatsapp_agen) && session('auth_data')->whatsapp_agen != "")
             <p class="ts-designation" style="margin-bottom: 5px;"><i class="fa fa-whatsapp" style="margin-right: 8px;"></i> {{session('auth_data')->whatsapp_agen}}</p>
             @endif
             <p class="ts-description" style="margin-bottom: 0px;">{{session('auth_data')->nama_agen}} is a {{session('auth_data')->jabatan_agen}} on MBS Prudential Agency</p>
             <div class="team-social-icons">
                 @if(isset(session('auth_data')->email_agen) && session('auth_data')->email_agen != "")
                <a target="_blank" href="mailto:{{session('auth_data')->email_agen}}"><i class="fa fa-envelope-o"></i></a>
                 @endif
                 @if(isset(session('auth_data')->instagram_agen) && session('auth_data')->instagram_agen != "")
                 <a target="_blank" href="https://www.instagram.com/{{session('auth_data')->instagram_agen}}"><i class="fa fa-instagram"></i></a>
                 @endif                          
                 @if(isset(session('auth_data')->whatsapp_agen) && session('auth_data')->whatsapp_agen != "")
                 <a target="_blank" href="https://api.whatsapp.com/send?phone={{session('auth_data')->whatsapp_agen}}"><i class="fa fa-whatsapp"></i></a>
                 @endif
             </div><!--/ social-icons-->
            </div>
          </div>
      </div><!-- Conatiner end -->
@endsection

@section('js')
<script type="text/javascript">
   function link_copy(){
       var input = document.createElement('input');
       input.setAttribute('value', "{{route('shared-article', ['slug' => $lead->slug, 'id' => md5(session('auth_data')->kode_agen)] )}}");
       document.body.appendChild(input);
       input.select();
       var result = document.execCommand('copy');
       document.body.removeChild(input);
       tempAlert("Link Copied!",1000);
       $('#btn-copy').html("Link Copied!").css('color', 'white').css('background-color', 'black');
       return result;
   }   
</script>
@endsection