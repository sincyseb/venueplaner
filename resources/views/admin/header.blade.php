<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>venue booking admin side</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="/admin/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="/admin/css/application.min.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>

                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search"/>
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div> -->

            <!--  -->

            <div class="avatar-dropdown" id="icon">
                <span>Admin</span>
                <i class="material-icons">person</i>
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                    <i class="material-icons">person</i>
                        <span>Admin</span>
                        <span class="mdl-list__item-sub-title">admin@gmail.com</span>
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        My account
                    </span>
                </li>
                
                <a href="/logout">
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                    </li>
                </a>
            </ul>

            <button id="more"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                for="more">
                <li class="mdl-menu__item">
                    Settings
                </li>
                <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                    Support
                </a>
                <li class="mdl-menu__item">
                    F.A.Q.
                </li>
            </ul>
        </div>
    </header>

    <div class="mdl-layout__drawer">
        <header>Admin</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="/adminhome">
                            <i class="material-icons" role="presentation">house</i>
                            Admin
                        </a>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">view_comfy</i>
                                Add 
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="/addabout">
                                    <i class="material-icons">add_one</i>
                                    Add About
                                </a>
                                <a class="mdl-navigation__link" href="/addservice">
                                    <i class="material-icons">add_one</i>
                                    Add Services
                                </a>
                                <a class="mdl-navigation__link" href="/addgallery">
                                    <i class="material-icons">add_one</i>
                                    Add Gallery
                                </a>
                                <a class="mdl-navigation__link" href="/addevent">
                                    <i class="material-icons">add_one</i>
                                    Add Events
                                </a>
                                <a class="mdl-navigation__link" href="/addvenue">
                                <i class="material-icons">add_one</i>
                                   Add Venue
                                </a>
                               
                            </div>
                        </div>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">pages</i>
                                View
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="/viewabout">
                                <i class="material-icons">visibility</i>
                                   View About
                                </a>
                                <a class="mdl-navigation__link" href="/viewservice">
                                <i class="material-icons">visibility</i>
                                   View Service
                                </a>
                                <a class="mdl-navigation__link" href="/viewgallery">
                                <i class="material-icons">image</i>
                                    View gallery
                                </a>
                                <a class="mdl-navigation__link" href="/viewevent">
                                <i class="material-icons">visibility</i>
                                 View Events
                                </a>
                                <a class="mdl-navigation__link" href="/viewvenue">
                                <i class="material-icons">visibility</i>
                                 View Venue
                                </a>
                            </div>
                        </div>
                        
                        
                        <a class="mdl-navigation__link" href="/viewbooking">
                            <i class="material-icons" role="presentation">map</i>
                            View User Booking
                        </a>
                        
                        <a class="mdl-navigation__link" href="/logout">
                            <i class="material-icons" role="presentation">person</i>
                            logout
                        </a>
                        
                        
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <!-- <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                            <i class="material-icons" role="presentation">link</i>
                            GitHub
                        </a> -->
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>
    

    @yield('admin')


    <script src="/admin/js/d3.min.js"></script>
<script src="/admin/js/getmdl-select.min.js"></script>
<script src="/admin/js/material.min.js"></script>
<script src="/admin/js/nv.d3.min.js"></script>
<script src="/admin/js/layout/layout.min.js"></script>
<script src="/admin/js/scroll/scroll.min.js"></script>
<script src="/admin/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="/admin/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="/admin/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="/admin/js/widgets/employer-form/employer-form.min.js"></script>
<script src="/admin/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="/admin/js/widgets/map/maps.min.js"></script>
<script src="/admin/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="/admin/js/widgets/table/table.min.js"></script>
<script src="/admin/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

<!-- endinject -->

</body>
</html>
