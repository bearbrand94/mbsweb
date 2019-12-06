@extends('layouts.constra')

@section('css')
    <style type="text/css">
      .ts-service-box-bg{
        padding-bottom: 50px;
        padding-top: 50px;
      }
      .btn-constra{
      }
  </style>
@endsection

@section('banner')
 <h1 class="banner-title">RECRUITING</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li>Recruiting</li>
 </ol>
@endsection

@section('body')
<div class="container">
  @foreach($menu as $key => $m)
    @component('menu-button', [
      'a_url'     => route('recruiting-article', ['slug' => $m->slug]),
      'title'     => $m->name,
      'image_url' => $m->image_url ? $m->image_url : null,
    ])
    @endcomponent
  @endforeach
</div><!-- Container end -->
@endsection

@section('js')
<script type="text/javascript">
  $(function() {
    $('.menu-button').matchHeight();
  });    
</script>
@endsection