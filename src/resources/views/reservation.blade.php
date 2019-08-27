@include('common.errors')
@extends('layouts.app')
@section('content')
    <form action="/reservation" method="POST">
        {{ csrf_field() }}
        <select name="hotel" size="1" style="font-size:30px">
            <option selected>ホテルA</option>
            <option>ホテルB</option>
            <option>ホテルC</option>
            <option>ホテルD</option>
        </select>
        <button class="btn btn-primary btn-sm">予約</button>
    </form>
    <div class="panel panel-success">
        <table class="table reservation-table">
            <thead>
                <tr class="success">
                    <td>ホテル</td>
                    <td>&nbsp;</td>
                    <td>日時</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>取消</td>
                </tr>
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
                            <form action="{{ url('reservations/'.$reservation->id) }}", method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">
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
