@extends('admin.header')
@section('admin')
<main class="mdl-layout__content ">

<div class="mdl-grid ui-tables">

<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--12-col-tablet mdl-cell--8-col-phone">            </div>
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">View Booking</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">id</th>
                                <th class="mdl-data-table__cell--non-numeric">u_id</th>
                                <th class="mdl-data-table__cell--non-numeric">Event</th>
                                <th class="mdl-data-table__cell--non-numeric">Place</th>
                                <th class="mdl-data-table__cell--non-numeric">Venue</th>
                                <th class="mdl-data-table__cell--non-numeric">Service</th>
                                <th class="mdl-data-table__cell--non-numeric">Date</th>
                                <th class="mdl-data-table__cell--non-numeric">Time</th>
                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                                <th class="mdl-data-table__cell--non-numeric">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $value)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->b_id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->user_id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->event}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->place}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->venue}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->service}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->date}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->time}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->status}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->total}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--light blue"><a href="/approve/{{$value->b_id}}">Approve</a></span></td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--light blue"><a href="/decline/{{$value->b_id}}">Decline</a></span></td>
                                <!-- <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--light blue"><a href="/generatebill/{{$value->b_id}}">Bill</a></span></td> -->
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