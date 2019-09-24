@extends('layouts.guest-constra')

@section('css')

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
                        <h2 class="entry-title">
                           <a href="#">{{$lead->title}}</a>
                        </h2>
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
	                  <div class="team-img-wrapper">
	                     <img alt="" src="{{asset('images/avatar/avatar1.jpg')}}" class="img-responsive">
	                  </div>
	                  <div class="ts-team-content-classic">
	                     <h3 class="ts-name">Nama Agen</h3>
	                     <p class="ts-designation"><i class="fa fa-envelope" style="margin-right: 5px;"></i> Email Agen</p>
	                     <p class="ts-designation"><i class="fa fa-phone" style="margin-right: 8px;"></i> No. Handphone</p>
	                     <p class="ts-description">[Nama Agen] is a [Jabatan] on MBS Prudential Agency</p>
	                     <div class="team-social-icons">
	                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
	                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
	                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
	                     </div><!--/ social-icons-->
	                  </div>
	               </div><!--/ Team wrapper 1 end -->

                  <!-- CONTACT FORM -->
	               <div class="comments-form border-box">
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
                  </div>
            </div><!-- Sidebar Col end -->

         </div><!-- Main row end -->

      </div><!-- Conatiner end -->
@endsection

@section('js')
@endsection