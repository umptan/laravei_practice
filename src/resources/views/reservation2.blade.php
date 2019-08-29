@extends('layouts.app2')
<form action="/reservations" method="POST">
    <div>
        <input name="hotel_name"
            style="font-size:50px"
            class="mark"
            size="200"
            value={{$hotel_name}}
            readonly
        >
    </div>
    <div style="line-height:3em">
        <label for="start_date">start date</label>
        <input type="datetime-local" name="start_date" step="1800">
        <label for="end_date">~ end date</label>
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
