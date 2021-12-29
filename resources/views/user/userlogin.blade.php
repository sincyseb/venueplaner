@extends('user.header')
@section('main-body')

<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
<h4 style="padding-left:1000px"><a href="/adminlogin"> Admin Login</a></h4>
  <div class="container">
    <div class="row">
      <div class="grid_9">
        <h4>Login</h4>
      
        <div class="row">
          <div class="col-sm-4">
          
            <form action="/login" method="post"> 
              @csrf
              <div class="form-group">
                    <label> Email:</label>
                    <input type="email" name="email" class="form-control">
                    @error("email")
                    <p style="color:red">{{$errors->first("email")}}
                    @enderror
              </div>
              <div class="form-group">
                    <label> Password:</label>
                    <td><input type="password" name="password" class="form-control"></td>
                    @error("password")
                    <p style="color:red">{{$errors->first("password")}}
                    @enderror
              </div>
              <div class="form-group">
                    
                    <input type="submit" name="submit" value="login" class="btn btn- #ff66d9">

              </div>
              @if (session('error'))
                    <p style="color:red">{{session('error')}}</p>
                    @endif
           </form>
           
        
          </div>
        </div> 
        
      </div> 
    </div>
  </div>
</section>

@endsection

