@extends('layouts.app')
@section('content')

<form action="/reservation" method="get">
    <select name="hotel" size="1">
        <option value="A" selected>ホテルA</option>
        <option value="B">ホテルB</option>
        <option value="C">ホテルC</option>
        <option value="D">ホテルD</option>
    </select>
    <input type="submit" value="予約">
</form>
<div>
    <table class="table table-striped reservation-table">
        <thead>
            <td>name</td>
            <td>date</td>
            <td>satart</td>
            <td>end</td>
            <td>cancel</td>
        </thead>
        <tbody>
            <tr>
            </tr>
        </tbody>

    </table>
</div>

@endsection
