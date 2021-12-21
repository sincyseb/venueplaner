@extends('user.indexheader')
@section('index')
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_9">
        <h4>About Our Agency</h4>
        <div class="row">
          <div class="grid_8">
            <img src="/user/images/page2_img.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              @foreach( $result as $value)
              <p class="text1 offset__1">{{$value->about}}</p>
              @endforeach
              
           
            </div>
            <div class="clear"></div>
          </div>
        </div>
       
</section>
@endsection
<!--==============================
              footer
=================================-->
