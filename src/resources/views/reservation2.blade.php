<form action="/reservations" method="POST">
    <h1 id="hotel_name">
        <?php
            $hotel = @$_POST['hotel'];
            print"ホテル".$hotel;
        ?>
    </h1>
    date <input type="date" id="date">
    <div>
        start time <input type="time" id="start">
        ~ end time <input type="time" id="end">
    </div>
    {{ csrf_field() }}
    <div style="display: inline-flex">
        <input type="submit" name="/reservations" value="予約">
        <input type="button" value="キャンセル">
    </div>
</form>
