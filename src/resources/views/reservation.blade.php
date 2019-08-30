@extends('layouts.app')
@section('content')
    <form action="/reservation" method="GET">
        {{ csrf_field() }}
        <select name="hotel" size="1" style="width: 100%">
            <option selected>ホテルA</option>
            <option>ホテルB</option>
            <option>ホテルC</option>
            <option>ホテルD</option>
        </select>
        <button class="btn btn-primary btn-sm, center-block">予約</button>
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
                    <td>取消</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td >{{ $reservation->hotel_name }}</td>
                        <td>&nbsp;</td>
                        <td>{{ $reservation->start_date }}</td>
                        <td>~</td>
                        <td>{{ $reservation->end_date }}</td>
                        <td>
                            <form action="{{ url('reservations/'.$reservation->id) }}", method="POST" onSubmit="return startConfirm()">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fa fa-trash"></i>取消
                                </button>
                            </form>
                            <script>
                                function startConfirm(){
                                    return (confirm("本当によろしいですか？"));
                                }
                            </script>

                            <form action="/", method="POST">
                                <button class="btn btn-primary btn-sm" type="button" onclick="reWrite(0)">
                                    <i class="fa fa-cog"></i>編集
                                </button>
                            </form>
                            <script>
                            </script>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
