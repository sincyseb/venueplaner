@extends('admin.header')
@section('admin')
    <main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">


            <!-- <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone"> -->
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">Add Venue</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form class="form form--basic" method="post" action="/advenue"  enctype="multipart/form-data">
                            @csrf
                            <div class="mdl-grid">
                                <!-- <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">
                                    <div class="profile-image color--smooth-gray profile-image--round">
                                        <img src="images/Bobby.PNG">
                                    </div>
                                </div> -->
                                <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select full-size">
                                        <input class="mdl-textfield__input" type="text" name="district"id="location" readonly tabIndex="-1"/>

                                        <label class="mdl-textfield__label" for="location">District</label>

                                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="location">
                                            <li class="mdl-menu__item">Thiruvananthapuram</li>
                                            <li class="mdl-menu__item">Pathanamthitta</li>
                                            <li class="mdl-menu__item">Palakkad</li>
                                            <li class="mdl-menu__item">Malappuram</li>
                                            <li class="mdl-menu__item">Kozhikode</li>
                                            <li class="mdl-menu__item">Kottayam</li>
                                            <li class="mdl-menu__item">Kollam</li>
                                            <li class="mdl-menu__item">Kasaragod</li>
                                            <li class="mdl-menu__item">Kannur</li>
                                            <li class="mdl-menu__item">Alappuzha</li>
                                            <li class="mdl-menu__item">Ernakulam</li>
                                            <li class="mdl-menu__item">Idukki</li>
                                            <li class="mdl-menu__item">Thrissur</li>
                                            <li class="mdl-menu__item">Wayanad</li>
                                        </ul>

                                        <label for="location">
                                            <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                        </label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text"  name="location" id="profile-floating-first-name">
                                        <label class="mdl-textfield__label" for="profile-floating-first-name">Add location</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text"  name="venue" id="profile-floating-first-name">
                                        <label class="mdl-textfield__label" for="profile-floating-first-name">Add Venue </label>
                                    </div>
                                    
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                        <input class="mdl-textfield__input" type="text" name="price" id="profile-floating-last-name">
                                        <label class="mdl-textfield__label" for="profile-floating-last-name">Add Price</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <!-- <label  for="floating-e-mail">Image</label> -->
                                        <input class="mdl-textfield__input" type="file" name="image" id="profile-floating-e-mail">
                                       
                                    </div>
                                    <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @endsection

<!-- inject:js -->
