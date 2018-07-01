<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use View;

class BookingController extends Controller
{

	public function index()
	{
		//
	}

	public function getCustomers($name)
    {
        $customers = DB::table('customers')->get();
        $status = DB::table('booking_statuses')->get();
        $room = DB::table('rooms')->get()->where('name', $name);
        return View::make('booking')
            ->with('customers', $customers)
            ->with('status', $status)
            ->with('name', $name);
    }
	
	public function create()
    {
        return view('booking/create');
    }
	 
	 public function store(Request $request)
    {
        $booking = new Booking();
        $booking->room_id=$request->get('room_id');
        $booking->arrival_date = $request->get('arrival_date');
        $booking->departure_date = $request->get('departure_date');
        $booking->customer_id=$request->get('customer_id');
        $booking->status_id = $request('status_id');
        $booking->save();
        return redirect('booking/create')->with('success', 'Vous avez bien reservé');
    }

     public function save_data(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('room-description/{name}/booking/validate');
    }

	public function show($id)
	{
	 	return view('booking/view', ['booking' => Booking::findOrFail($id)]);
	}

	public function edit($id)
	{
	 	return view('booking/edit', ['booking' => Booking::findOrFail($id)]);
	}

	public function destroy($id)
	{
		$booking = Booking::find($id);
		$booking->delete();

		return redirect('bookings');
	}

}
