@extends('layouts.app')
@section('content')

    <form action="/reservation" method="POST">
        {{ csrf_field() }}
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
                <td>ホテル</td>
                <td>日時</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>取消</td>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->hotel_name }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->start }}</td>
                        <td>{{ $reservation->end }}</td>
                        <td>
                            <form action="/reservations/", method="POST">
                                {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-trash"></i>取消
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
