@extends('user.header')
@section('main-body')

<!--=====================
          Content
======================-->
<!-- <style>
    .form{
        cellspacing:20px;
    }
</style> -->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>

  <div class="container">
    <div class="row">
      <div class="grid_9">
        <h4>Register</h4>
      
        <div class="row">
          <div class="grid_9">
          
            <form action="/reg" method="post" class="contact-form"> 
                @csrf
                <div class="form-group">
                    <label> Name:</label>
                    <input type="text" name="name" class="form-control">
              </div>
            <div class="form-group">
                    <label> Email:</label>
                    <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                    <label> Password:</label>
                    <td><input type="password" name="password" class="form-control"></td>
              </div>
              <div class="form-group">
                    <label> Contact:</label>
                    <input type="text" name="contact" class="form-control">
              </div>
              <div class="form-group">
                    <label> Place:</label>
                    <input type="text" name="place" class="form-control">
              </div>
              <div class="form-group">
                    <label> City/Town:</label>
                    <input type="text" name="city" class="form-control">
              </div>
              <div class="form-group">
                    
                    <input type="submit" name="submit" value="Register" class="btn btn- #ff66d9">
              </div>
           </form>
           
        
          </div>
        </div> 
        
      </div> 
    </div>
  </div>
</section>

@endsection

