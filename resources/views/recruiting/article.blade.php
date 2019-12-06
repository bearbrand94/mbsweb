@extends('layouts.constra')

@section('css')
  <style type="text/css">
    .entry-title{
      color: rgb(255, 182, 0);
    }
  </style>
@endsection

@section('body')
      <div class="container">
         <div class="row">
          <img src="">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
               <div class="post-content post-single">
                  <div class="post-media post-image image-angle">
                     <img src="{{$post->image_url}}" class="img-responsive" alt="" width="70%">
                  </div>

                  <div class="post-body">
                     <div class="entry-header">
                        <h1 class="entry-title">
                          {{$post->title}}
                        </h1>
                     </div><!-- header end -->

                     <div class="entry-content">
                        {!!$post->content!!}
                     </div>

                     <div class="tags-area clearfix">
                        <div class="post-tags pull-left">
                           <a href="{{route('recruiting-article', ['slug' => $category->slug])}}">
                              <i class="fa fa-angle-left" style="margin-right: 5px;"></i> {{$category->name}}
                           </a>
                        </div>

                        <div class="pull-right col-xs-12 col-md-8 text-right">
                           <div class="form-inline">
                             <div class="form-group" style="width: 100%;">
                              <label>Share:</label>
                              <input type="text" disabled name="" class="form-control" value="{{route('shared-article', ['slug' => $post->slug, 'id' => session('auth_data')->kode_agen] )}}">
                              <button class="btn btn-primary" onclick="link_copy()" id="btn-copy">Copy Link</button>
                             </div>
                          </div>
                        </div>
                     </div>
                     
                  </div><!-- post-body end -->
               </div><!-- post content end -->
            </div><!-- Content Col end -->


            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="sidebar sidebar-right">
                 <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                       <img alt="" src="{{asset('images/avatar/avatar1.jpg')}}" class="img-responsive">
                    </div>
                    <div class="ts-team-content-classic">
                       <h3 class="ts-name">{{session('auth_data')->nama_agen}}</h3>
                       <p class="ts-designation"><i class="fa fa-envelope" style="margin-right: 5px;"></i> {{session('auth_data')->email_agen}}</p>
                       <p class="ts-designation"><i class="fa fa-phone" style="margin-right: 8px;"></i> {{session('auth_data')->no_hp}}</p>
                       <p class="ts-description">{{session('auth_data')->nama_agen}} is a {{session('auth_data')->jabatan_agen}} on MBS Prudential Agency</p>
                       <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                          <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                       </div><!--/ social-icons-->
                    </div>
                 </div><!--/ Team wrapper 1 end -->
            </div><!-- Sidebar Col end -->

         </div><!-- Main row end -->

      </div><!-- Conatiner end -->
@endsection

@section('js')
<script type="text/javascript">
   function link_copy(){
       var input = document.createElement('input');
       input.setAttribute('value', "{{route('shared-article', ['slug' => $post->slug, 'id' => md5( session('auth_data')->kode_agen ) ])}}");
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