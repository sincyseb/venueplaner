@extends('admin.header')
@section('admin')

    <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Add About</h2>
                    <div class="mdl-card__subtitle"></div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="/updateabout" style="height:200px" method="post" class="form" >
                        @csrf
                        
                        @foreach($result as $value)
                        <div class="form__article">
                           
                        <div class="form__article employer-form__contacts">
                            <!-- <h3>Contacts</h3> -->

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group" >
                                    <i class="material-icons pull-left"></i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <textarea class="mdl-textfield__input" type="text"id="phone"  style="height:150px" name="about"> {{$value->about}}</textarea>
                                        <label class="mdl-textfield__label" for="phone"></label>
                                    </div>
                                </div>  
                            </div>                           
                        </div>

                      @endforeach
                            <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                               Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

</div>

<!-- inject:js -->
@endsection