@extends('layouts.app2')

<form action="/reservations" method="POST">
    <div>
        <input name="hotel_name"
            style="font-size:50px"
            class="mark"
            size="200"
            value="<?php
                $hotel = @$_POST['hotel'];
                print$hotel;
            ?>"
        >
    </div>
    <div style="line-height:3em">
        date <input type="date" name="date" style="font-size:20px">
        <br>
        start time <input type="time" name="start" step="1800" value="12:00" style="font-size:20px">
        ~ end time <input type="time" name="end" step="1800" value="13:00" style="font-size:20px">
    </div>
    {{ csrf_field() }}
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">予約</button>
        <button type="button" onclick="history.back()" class="btn btn-danger">
            キャンセル
        </button>
    </div>
</form>
