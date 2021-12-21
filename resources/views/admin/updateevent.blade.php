@extends('admin.header')
@section('admin')

    <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Update Event</h2>
                    <div class="mdl-card__subtitle"></div>
                </div>
                @foreach($result as $value)
                <div class="mdl-card__supporting-text">
                    <form action="/eventupdate/{{$value->id}}" method="post" class="form"  enctype="multipart/form-data">
                        @csrf    
      
                        <div class="form__article">
                           
                        <div class="form__article employer-form__contacts">
                            <!-- <h3></h3> -->

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                <div class="mdl-textfield mdl-js-textfield pull-left">
                                <i class="material-icons pull-left"></i>
                                <div class="mdl-textfield mdl-js-textfield pull-left">
                                <!-- <label  for="name">Service Name:</label> -->
                                        <input class="mdl-textfield__input" type="text" id="name" value="{{$value->name}}" name="name">
                                        <label class="mdl-textfield__label" for="name">Event</label>
                                    </div>
                                    </div>

                                 
                                    

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                    <i class="material-icons pull-left"></i>
                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="description" value="{{$value->description}}" name="description">
                                        <label class="mdl-textfield__label" for="description">description</label>
                                    </div>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                    <i class="material-icons pull-left"></i>
                                        <div class="mdl-textfield mdl-js-textfield pull-left">
                                            <label for="file">Choose File</label>
                                            <input type="file" id="file" name="image" ><img src="{{asset('uploads/'.$value->image)}}" style="height:50%;width:50%" > 
                                        </div>
                                    </div> 
                                </div>  
                            </div>                           
                        </div>

                      
                            <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </main>

</div>

<!-- inject:js -->
@endsection