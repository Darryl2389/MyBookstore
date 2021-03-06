<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
  public function __construct()

{
$this->middleware('auth');
$this->middleware('role:user');
}
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
  $restaurant = Restaurant::all();

  return view('user.restaurants.index')->with([
    'restaurants' => $restaurants
  ]);
}
public function show($id)
{
  $restaurant = Restaurant::findOrFail($id);

  return view('user.restaurants.show')->with([
    'restaurant' => $restaurant
]);
}
public function welcome()
{
  $restaurant = Restaurant::all();

  return view('user.restaurants.welcome')->with([
    'restaurants' => $restaurants
  ]);
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */


}
