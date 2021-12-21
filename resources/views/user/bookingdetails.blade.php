@extends('user.userheader')
@section('user')
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_9">
        <h4>Book your event</h4>
      
        <div class="row">
          <div class="col-sm-12">
          <table class="table table-bordered">
            <tr>
              <td style="font-size:20px">id</td>
              <td style="font-size:20px">event</td>
              <td style="font-size:20px">place</td>
              <td style="font-size:20px">venue</td>
              <td style="font-size:20px">sevice</td>
              <td></td>
              <td style="font-size:20px">date</td>
              <td style="font-size:20px">time</td>
              <td style="font-size:20px">status</td>
              <td style="font-size:20px">button</td>
            </tr>
            @foreach($result as $value)
            <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->event}}</td>
              <td>{{$value->place}}</td>
              <td>{{$value->venuetype}},{{$value->price}}</td>
              <td>
              @php
    $values = explode(",",$value->service);
@endphp
                <input type="checkbox" name="chk" id="chk" value="1" <?php if(in_array("1", $values)){ echo " checked=\"checked\""; } ?>>Light and sound Service<br>
                <input type="checkbox" name="chk" id="chk" value="2" <?php if(in_array("2", $values)){ echo " checked=\"checked\""; } ?>>Stage decoration
              {{$value->s_price}}
              </td>
              <td> <?php if(in_array("2", $values))
              { ?>
                {{$value->s_price}}
             <?php  } ?></td>
              <td>{{$value->date}}</td>
              <td>{{$value->time}}</td>
              <td>{{$value->status}}</td>
              <td><a href="/update/{{$value->id}}">Book</a></td>
            </tr>
            @endforeach
          </table>
           
        
          </div>
        </div> 
        
      </div> 
    </div>
  </div>
</section>
@endsection