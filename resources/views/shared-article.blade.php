@extends('layouts.guest-constra')

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
  .team-social-icons a i {
    color: #555;
    font-size: 2rem;
    margin-top: 10px;
  }

  #category:hover{
    background-color: white;
    color: #7c7c7c;
    border-color: #dadada;
  }
/*  .dock{
    right: 0;
    margin-top: auto;
    margin-bottom: auto;
    position: absolute;
  }*/
  </style>
@endsection

@section('body')
      <div class="post-media post-image image-angle hidden-md hidden-lg hidden-xl">
         <img src="{{$lead->image_url}}" class="img-responsive" alt="" width="100%"></img>
      </div>
      <div class="hidden-sm hidden-xs" style="margin-top: 20px;"></div>
      <div class="container" style="max-width: 768px;">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

               <div class="post-content post-single">
                  <div class="post-media post-image image-angle hidden-sm hidden-xs text-center">
                     <img src="{{$lead->image_url}}" alt="" height="400px;">
                     <!-- <img src="https://via.placeholder.com/150" alt="" width="100%" height="500px;"> -->
                  </div>
                  <div class="post-body">
                     <div class="entry-header">
                        <h1 class="entry-title text-center">
                          {{$lead->title}}
                        </h1>
                     </div><!-- header end -->

                     <div class="entry-content">
                        {!!$lead->content!!}
                     </div>

                     <div class="tags-area clearfix">
                        <div class="post-tags pull-left">
                           <a id="category">
                              {{$category->name}}
                           </a>
                        </div>
                     </div>
                     
                  </div><!-- post-body end -->
               </div><!-- post content end -->
            </div><!-- Content Col end -->

         </div><!-- Main row end -->

          <div class="row Aligner">
            <div class="col-xs-5 text-center">
              <img src='{{$agen->foto}}' style="height: 150px; width: 150px;" class="hidden-xs img-circle">
              <img src='{{$agen->foto}}' style="height: 125px; width: 125px;" class="hidden-sm hidden-md- hidden-lg hidden-xl img-circle"">
            </div>
            <div class="col-xs-7">
             <h3 class="ts-name" style="margin-bottom: 5px;">{{$agen->nama_agen}}</h3>
             <p class="ts-designation" style="margin-bottom: 0px;"><i class="fa fa-envelope" style="margin-right: 5px;"></i> {{$agen->email_agen}}</p>
             <p class="ts-designation" style="margin-bottom: 0px;"><i class="fa fa-phone" style="margin-right: 8px;"></i> {{$agen->no_hp}}</p>
             @if(isset($agen->whatsapp_agen) && $agen->whatsapp_agen != "")
             <p class="ts-designation" style="margin-bottom: 5px;"><i class="fa fa-whatsapp" style="margin-right: 8px;"></i> {{$agen->whatsapp_agen}}</p>
             @endif
             <p class="ts-description" style="margin-bottom: 0px;">{{$agen->nama_agen}} is a {{$agen->jabatan_agen}} on MBS Prudential Agency</p>
             <div class="team-social-icons">
                 @if(isset($agen->email_agen) && $agen->email_agen != "")
                <a target="_blank" href="mailto:{{$agen->email_agen}}"><i class="fa fa-envelope-o"></i></a>
                 @endif
                 @if(isset($agen->instagram_agen) && $agen->instagram_agen != "")
                 <a target="_blank" href="https://www.instagram.com/{{$agen->instagram_agen}}"><i class="fa fa-instagram"></i></a>
                 @endif                          
                 @if(isset($agen->whatsapp_agen) && $agen->whatsapp_agen != "")
                 <a target="_blank" href="https://api.whatsapp.com/send?phone={{$agen->whatsapp_agen}}"><i class="fa fa-whatsapp"></i></a>
                 @endif
             </div><!--/ social-icons-->
            </div>
          </div>
      </div><!-- Conatiner end -->
@endsection

@section('js')
@endsection
