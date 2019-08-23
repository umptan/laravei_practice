<form action="/reservations" method="POST">
    <h1 name="hotel_name" id="hotel_name">
        <?php
            $hotel = @$_POST['hotel'];
            print"ホテル".$hotel;
        ?>
    </h1>
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
