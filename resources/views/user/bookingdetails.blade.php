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
              <td style="font-size:20px">service</td>
              <!-- <td></td> -->
              <td style="font-size:20px">date</td>
              <td style="font-size:20px">time</td>
              <td style="font-size:20px">status</td>
              <td></td>
              <td style="font-size:20px">Total</td>
              <td style="font-size:20px">Recipt</td>
            </tr>
            @foreach($result as $value)
            <tr>
              <td>{{$value->b_id}} <input type="hidden" name="id" id="bid" value="{{$value->b_id}}"></td>
              <td>{{$value->event}}</td>
              <td>{{$value->place}}</td>
              <td>{{$value->venuetype}}
             
             @if($value->service=="")
             <td>
              @foreach($srs as $serv)
              <div id="ckbx">
                <input type="checkbox" name="chk" id="chk" class="chk" value="{{$serv->id}}">{{$serv->name}}<br>
                <input type="text" value="{{$serv->s_price}}" name="s_price" id="s_price">
                @endforeach
              </div>
              </td>
              @else
              <td>
                @php 
                $values=explode(',',$value->service)
                @endphp
              @foreach($srs as $serv)
              
                @if(in_array("$serv->id", $values))
                {{$serv->name}}<br>
                @endif
                @endforeach
             
              </td>
           @endif
              <td>{{$value->date}}</td>
              <td>{{$value->time}}</td>
              <td>{{$value->status}}</td>
              <td><a href="/update/{{$value->id}}">Book</a></td>
              <td>
              <input type="text" name="e_price" id="e_price"value="{{$value->total}}"> 
            </td>
            <td><a href="/viewrecipt/{{$value->b_id}}">Recipt</a></td>
            </tr>
            @endforeach
          </table>
           <script>
            $(document).ready(function(){

              $('.chk').click(function(){
              var row = $(this).closest('tr');
              var chk = $(this).closest('div');
              var e_price = parseInt(row.find("#e_price").val()); 
                var s_price = parseInt(chk.find("#s_price").val());
                var id = parseInt(row.find("#bid").val()); 
                var sid = parseInt(chk.find("#chk").val()); 

                // alert(sid)
                    // }
                    
             
              var tot= parseInt(e_price)+parseInt(s_price);
              //  var c=row.find('#coin').val()
              // alert(tot)
              // var total =  parseInt(qty)*parseInt(price);
              row.find('#e_price').val(tot);
              // row.find('#tot1').val(tot);
             
            $.ajax({
                    url: "/updateServ/"+id,
                    method: 'get',
                    cache: false,
                    data: {
                      serv:sid,
                      tot:tot
                    },
                 
                    success: function(response) {
                        alert(response)
                        // console.log(response);
                    }
                });
               
            });
           

          
          });
           </script>
        
          </div>
        </div> 
        
      </div> 
    </div>
  </div>
</section>
@endsection