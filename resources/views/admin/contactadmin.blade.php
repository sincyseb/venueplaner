@extends('admin.header')
@section('admin')
<main class="mdl-layout__content ">

<div class="mdl-grid ui-tables">

<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--12-col-tablet mdl-cell--8-col-phone">            </div>
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">View Questions</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">id</th>
                                <th class="mdl-data-table__cell--non-numeric">name</th>
                                <th class="mdl-data-table__cell--non-numeric">email</th>
                                <th class="mdl-data-table__cell--non-numeric">phone</th>
                                <th class="mdl-data-table__cell--non-numeric">Question</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $value)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->email}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->phone}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$value->message}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--light blue"><a href="/reply/{{$value->id}}"> Reply</a></span> </td>
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