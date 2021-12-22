@extends('user.indexheader')
@section('index')
<!--=====================
          Content
======================-->
<section id="content" class="gallery1"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div class="container">
    <div class="row">
      @foreach($result as $value)
      <div class="grid_3">
        <div class="block2">
          <div class="maxheight"><a href="" class="text1">{{$value->name}}
          </a><a href=""><img src="uploads/{{$value->gallery}}"  alt=""></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection