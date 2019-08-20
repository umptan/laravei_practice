@extends('layouts.app')
@section('content')

<form action="/reservation" method="get">
    <select name="reservation" size="1">
        <option>ホテルA</option>
        <option>ホテルB</option>
        <option>ホテルC</option>
        <option>ホテルD</option>
    </select>
    <input type="submit" value="予約">
</form>
<div>
    <table class="table table-striped reservation-table">
        <thead>
            <td>name</td>
            <td>date</td>
            <td>cancel</td>
        </thead>
        <tbody>
            <tr>
            </tr>
        </tbody>

    </table>
</div>

@endsection
