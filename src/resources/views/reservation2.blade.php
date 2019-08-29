@extends('layouts.app2')
@section('content')
    <form action="/reservations" method="POST">
        <label for="hotel_name">
            <input name="hotel_name"
                style="border:none"
                value={{$hotel_name}}
                readonly
            >
        </label>
        @include('common.errors')
        <div style="line-height:2em">
            <label for="start_date">start date</label>
            <input type="datetime-local" name="start_date" step="1800"　class="border border-danger">
            <br>
            <div style="transform: rotate(90deg); display: inline-block;"><strong>〜</strong></div>
            <br>
            <label for="end_date">end date</label>
            <input type="datetime-local" name="end_date" step="1800">
        </div>
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">予約</button>
            <button type="button" onclick="history.back()" class="btn btn-danger">
                キャンセル
            </button>
        </div>
    </form>
@endsection
