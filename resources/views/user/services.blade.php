@extends('user.indexheader')
@section('index')
<!--=====================
          Content
======================-->

      @foreach($result as $value)
      <div class="grid_4">
        <div class="box">
          <div class="maxheight">
            <p style="font-size:30px" ><strong>{{$value->name}}</strong><p>
          <img src="{{asset('uploads/'.$value->image)}}" alt="">
            <div class="box_bot">
              <p class="text1 offset__1">{{$value->description}}</p>
              <a href="#" class="link1">More</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!--  -->
</section>

@endsection