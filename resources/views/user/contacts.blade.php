@extends('user.header')
@section('main-body')
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="clear"></div>
      <div class="grid_5">
        <h4>Contact Info</h4>
        <p class="text1 offset__1">Eventrum event planner is a high-quality, luxury, boutique-oriented floral and event designer, producer and planner of personal experiences.</p>
        <p class="text1 offset__1">Our weddings, galas and events are original, inventive and completely custom-designed. Executed with perfection, our events are known for their excellence in design and countless touch points in the detailing of each area in the event. </p>
        <p class="text1 offset__1">It all begins with our custom collaborative process.</p>
        The Company Name Inc. <br>
        9870 St Vincent Place,<br>
        Glasgow, DC 45 Fr 45.<br>
        Telephone: +1 800 603 6035<br>
        FAX: +1 800 889 9898<br>
        E-mail: <a href="#">mail@demolink.org</a>
      </div>
      <div class="grid_6">
        <h4>Contact Form</h4>
        <form id="contact-form" class="contact-form" action="/contacting" method="post"  style="padding:20px">
        @csrf
          <div class="contact-form-loader"></div>
          <fieldset>
            <label class="name">
              <input type="text" name="name" placeholder="Name:" value="" class="form-control" />
              <!-- <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span> -->
            </label>
           
            <label class="email">
              <input type="text" name="email" placeholder="E-mail:" value="" class="form-control" />
              <!-- <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span> -->
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" class="form-control" />
              
            </label>
           
            <label class="message">
              <textarea name="message" placeholder="Message:"class="form-control"></textarea>
              <!-- <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span> -->
            </label>
            <div>
              
              <input type="submit" class="btn" value="send"  name="submit" id="submit">
              <input type="reset" class="btn"  value="clear" name="clear" id="clear">
            </div>
          </fieldset> 
          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>      
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection