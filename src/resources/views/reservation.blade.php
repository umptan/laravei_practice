@extends('layouts.app')
@section('content')

    <form action="/reservation" method="POST">
        {{ csrf_field() }}
        <select name="hotel" size="1">
            <option selected>ホテルA</option>
            <option>ホテルB</option>
            <option>ホテルC</option>
            <option>ホテルD</option>
        </select>
        <input type="submit" value="予約">
    </form>
    <div>
        <table class="table table-striped reservation-table">
            <thead>
                <td>ホテル</td>
                <td>&nbsp;</td>
                <td>日時</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>取消</td>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->hotel_name }}</td>
                        <td>&nbsp;</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->start }}</td>
                        <td>~</td>
                        <td>{{ $reservation->end }}</td>
                        <td>
                            <form action="{{ url('/reservations/'.$reservation->id) }}", method="POST">
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
