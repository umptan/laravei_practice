<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Reservation;
use Illuminate\Http\Request;

Route::get('/', function () {
    $reservations = array();
    return view('reservation',['reservations'=> $reservations]);

});

Route::post('/reservation', function (Request $request) {
    return view('reservation2', ['hotel_name'=>$request->hotel]);
});

Route::post('/reservations', function (Request $request) {
    $validator = Validator::make($request->all(), [
        // TODO: 入力チェック条件
        'date' => 'required',
        'start' => 'required',
        'end' => 'required',
    ]);

    if ($validator->fails()) {
        // TODO: エラーのときの処理（tasklistを参考に）
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    };

    // TODO: データベースに予約情報登録する処理(tasklistを参考に)

    $reservation = new Reservation;
    $reservation->hotel_name = $request->hotel_name;
    $reservation->date = $request->date;
    $reservation->start = $request->start;
    $reservation->end = $request->end;
    $reservation->save();

    return redirect('/');
});
