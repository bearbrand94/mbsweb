@extends('layouts.constra')

@section('banner')
 <h1 class="banner-title">leads</h1>
 <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Menu</a></li>
    <li>Leads Gen</li>
 </ol>
@endsection

@section('body')
<div class="container">
  @foreach($menu as $key => $m)
    @component('menu-button', [
      'a_url'     => route('leadsgen-article', ['slug' => $m->slug]),
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