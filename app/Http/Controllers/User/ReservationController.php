<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
  public function __construct()

{
$this->middleware('auth');
$this->middleware('role:admin');
}
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
  $reservations = Reservation::all();

  return view('admin.reservations.index')->with([
    'reservations' => $reservations
  ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('admin.doctors.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{

  $request->validate([
  'email' => 'required|max:191',
  'date' => 'required|max:191',
  'time' => 'required|max:191',
  'restaurant_id' => 'required|max:191',
  'table_id' => 'required|max:191',
  'user_id' => 'required|max:191'
]);

  $reservation = new Reservation();
  $reservation->email = $request->input('email');
  $reservation->date = $request->input('date');
  $reservation->time = $request->input('time');
  $reservation->restaurant_id = $request->input('restaurant_id');
  $reservation->table_id = $request->input('table_id');
  $reservation->user_id = $request->input('user_id');
  $reservation->save();

  return redirect()->route('admin.reservation.index');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
  $reservation = Reservation::findOrFail($id);

  return view('user.reservation.show')->with([
    'reservation' => $reservation
]);
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{

}
  public function update(Request $request, $id)
{

  return redirect()->route('admin.doctors.index');
}


public function destroy($id)
{

  return redirect()->route('admin.reservation.index');
}
}
