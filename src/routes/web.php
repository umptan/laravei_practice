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
    $reservations = Reservation::orderBy('start_date','asc')->get();
    return view('reservation',['reservations'=> $reservations]);

});

Route::post('/reservation', function (Request $request) {
    return view('reservation2', ['hotel_name'=>$request->hotel]);
});

Route::post('/reservations', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'start_date' => 'required|after:today',
        'end_date' => 'required|after:start_date',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    };


    $reservation = new Reservation;
    $reservation->hotel_name = $request->hotel_name;
    $reservation->start_date = $request->start_date;
    $reservation->end_date = $request->end_date;
    $reservation->save();

    return redirect('/');
});

Route::delete('/reservations/{reservation}', function (Reservation $reservation) {
    $reservation->delete();
    return redirect('/');
});
