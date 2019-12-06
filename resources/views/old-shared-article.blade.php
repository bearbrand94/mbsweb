@extends('layouts.guest-constra')

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
                       <a>{{$category->name}}</a>
                    </div>
                 </div>
                 
              </div><!-- post-body end -->
           </div><!-- post content end -->
        </div><!-- Content Col end -->


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="sidebar sidebar-right">
             <div class="ts-team-wrapper">
                    @if($agen->foto != "")
                    <img alt="" src="{{$agen->foto}}" class="img-responsive" width="75px;" height="75px;">
                    @else
                    <img alt="" src="{{asset('images/avatar/avatar1.jpg')}}" class="img-responsive">
                    @endif
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

              <!-- CONTACT FORM -->
        </div><!-- Sidebar Col end -->
     </div><!-- Main row end -->
  </div><!-- Conatiner end -->
@endsection

@section('js')
@endsection

<!--                 <div class="comments-form border-box">
                    <h3 class="title-normal">Contact Me</h3>

                    <form role="form">
                       <div class="row">
                          <div class="col-md-12">
                             <div class="form-group">
                                <textarea class="form-control required-field" id="message" placeholder="Your Message" rows="5" required></textarea>
                             </div>
                           </div>

                          <div class="col-md-12">
                             <div class="form-group">
                                <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                             </div>
                             <div class="form-group">
                                <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
                             </div>
                             <div class="clearfix" style="margin-top: -25px;">
                                <button class="btn btn-primary btn-block" type="submit">Send Message</button> 
                             </div>
                           </div>
                        </div>
                     </form>
                  </div> -->