<form action="/" method="POST">DATE</form>
<div>
<?php
$hotel = @$_GET['hotel'];
print"ホテル".$hotel;
?>
</div>
date <input type="date">
<br>
start time <input type="time">~ end time <input type="time">
<form action="/"><input type="submit" value="キャンセル"><input type="submit" value="予約"></form>


