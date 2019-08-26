<form action="/reservations" method="POST">
    <input name="hotel_name" id="hotel_name"
        value="<?php
            $hotel = @$_POST['hotel'];
            print$hotel;
        ?>"
    >
    date <input type="date" name="date" id="date">
    <div>
        start time <input type="time" name="start" id="start-time">
        ~ end time <input type="time" name="end" id="end-time">
    </div>
    {{ csrf_field() }}
    <div style="display: inline-flex">
        <input type="submit" name="/reservations" value="予約">
        <input type="button" onclick="history.back()" value="キャンセル">
    </div>
</form>
