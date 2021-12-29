@extends('user.userheader')
@section('user')
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div class="container">
    <div class="row">
      <!-- <div class="page1_block"> -->
        <div class="grid_10">
        @foreach($res as $value)
        <h2 style="text-transform:uppercase;color:#d24ebb">WELCOME {{$value->name}}</h2>
        @endforeach
       
  <div class="container gallery">
    <div class="row">
      <div class="grid_8">
        <!-- <h4>Recent Events</h4> -->
        <div class="row">
          <div class="grid_4">
            <div class="view">  
              <img src="user/images/page1_img8.jpg" alt="" />  
              <div class="mask">
                <a href="user/images/gallery/big1.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img src="user/images/page1_img9.jpg" alt="" />  
              <div class="mask">
                <a href="user/images/gallery/big2.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img src="user/images/page1_img10.jpg" alt="" />  
              <div class="mask">
                <a href="user/images/gallery/big3.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img src="user/images/page1_img11.jpg" alt="" />  
              <div class="mask">
                <a href="user/images/gallery/big4.jpg" class="info fa fa-search" title="Full Image"></a>  
              </div> 
            </div>   
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>
@endsection