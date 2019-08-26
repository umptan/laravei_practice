<form action="/reservations" method="POST">
    <div>
        <input name="hotel_name" id="hotel_name"
            value="<?php
                $hotel = @$_POST['hotel'];
                print$hotel;
            ?>"
        >
    </div>
    date <input type="date" name="date" id="date">
    <div>
        start time <input type="time" name="start" id="start-time" step="1800" value="12:00">
        ~ end time <input type="time" name="end" id="end-time" step="1800" value="13:00">
    </div>
    {{ csrf_field() }}
    <div style="display: inline-flex">
        <input type="submit" name="/reservations" value="予約">
        <input type="button" onclick="history.back()" value="キャンセル">
    </div>
</form>
