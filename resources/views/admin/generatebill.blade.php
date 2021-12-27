@extends('admin.header')
@section('admin')
    <main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">


            <!-- <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone"> -->
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">Bill Generate</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                    @foreach($result as $value)
                        <form class="form form--basic" method="post" action="bill/{{$value->b_id}}">
                            @csrf
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text"  name="b_id" value="{{$value->b_id}}" id="b_id">
                                        <label class="mdl-textfield__label" for="b_id">Booking id:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text"  name="u_id" value="{{$value->name}}" id="u_id">
                                        <label class="mdl-textfield__label" for="u_id">User Name:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="event" value="{{$value->event}}" id="event">
                                        <label class="mdl-textfield__label" for="event">Event:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="place" value="{{$value->place}}" id="place">
                                        <label class="mdl-textfield__label" for="place">Place:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="venue" value="{{$value->venuetype}}" id="venue">
                                        <label class="mdl-textfield__label" for="venue">Venue:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="service" value="{{$value->service}}" id="service">
                                        <label class="mdl-textfield__label" for="service">Service:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="date" value="{{$value->date}}" id="date">
                                        <label class="mdl-textfield__label" for="date">Date:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="time" value="{{$value->time}}" id="time">
                                        <label class="mdl-textfield__label" for="time">Time:</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="total" value="Rs.{{$value->total}}" id="total">
                                        <label class="mdl-textfield__label" for="total">Total Price:</label>
                                    </div>

                                    <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>

    @endsection

<!-- inject:js -->
