@extends('layouts.constra')

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
                           <a href="{{route('article', ['slug' => $category->slug])}}">
                              <i class="fa fa-angle-left" style="margin-right: 5px;"></i> {{$category->name}}
                           </a>
                        </div>

                        <div class="pull-right col-xs-12 col-md-8 text-right">
                           <div class="form-inline">
                             <div class="form-group" style="width: 100%;">
                              <label>Share:</label>
                              <input type="text" disabled name="" class="form-control" value="{{route('shared-article', ['slug' => $lead->slug, 'token' => session('auth_data')->token] )}}">
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

                  <!-- CONTACT FORM -->
<!-- 	               <div class="comments-form border-box">
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

   	                        <div class="col-md-12">
   	                           <div class="form-group">
   	                              <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
   	                           </div>
   	                        </div>
      	                     <div class="clearfix" style="margin-top: -25px;">
      	                        <button class="btn btn-primary btn-block" type="submit">Send Message</button> 
      	                     </div>
                           </div>
                        </div>
                     </form>
                  </div> -->
            </div><!-- Sidebar Col end -->

         </div><!-- Main row end -->

      </div><!-- Conatiner end -->
@endsection

@section('js')
<script type="text/javascript">
   function link_copy(){
       var input = document.createElement('input');
       input.setAttribute('value', "{{route('shared-article', ['slug' => $lead->slug, 'token' => session('auth_data')->token] )}}");
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