@extends('admin.header')
@section('admin')
<main class="mdl-layout__content ">

<div class="mdl-grid ui-tables">

<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--12-col-tablet mdl-cell--8-col-phone">            </div>
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">View Event</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">id</th>
                                <th class="mdl-data-table__cell--non-numeric">Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Description</th>
                                <th class="mdl-data-table__cell--non-numeric">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $value)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->description}}</td>
                                <td><img src="{{asset('uploads/'.$value->image)}}" alt=""></td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--light blue"><a href="/updateevent/{{$value->id}}"> Update</a></span> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
</div>
</main>
@endsection