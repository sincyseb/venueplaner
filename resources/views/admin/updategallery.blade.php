@extends('admin.header')
@section('admin')

    <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Update Gallery</h2>
                    <div class="mdl-card__subtitle"></div>
                    </div>
                @foreach($result as $value)
                <div class="mdl-card__supporting-text">
                    <form action="/galleryupdate/{{$value->id}}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        <!-- @method('PUT') -->

                        <div class="form__article">
                           
                        <div class="form__article employer-form__contacts">
                            <!-- <h3>Contacts</h3> -->

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left"></i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="name" value="{{$value->name}}" name="event">
                                        <label class="mdl-textfield__label" for="name"></label>
                                    </div>
                                    <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left"></i>
                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="file" id="phone"  name="gallery"><img src="{{asset('uploads/'.$value->gallery)}}" style="height:50%;width:50%" >
                                        <label class="mdl-textfield__label" for="phone"></label>
                                    </div>
                                </div>  
                            </div>                           
                        </div>

                      
                            <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </main>

</div>

<!-- inject:js -->
@endsection