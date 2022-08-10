<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Models\Rooms;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function getHotels(){
        $hotel = Hotel::orderBy('id', 'desc')->with(['rooms'])->get();
        return view('home', compact('hotel'));
    }

    public function postHotel(Request $request){

        try {
            $hotel = new Hotel;

            $hotel->name = e($request->input('name'));
            $hotel->address = e($request->input('address'));
            $hotel->city = e($request->input('city'));
            $hotel->nit = $request->input('nit');
            $hotel->number_of_rooms = $request->input('number_of_rooms');

            if($hotel->save()){
                return back()->with('message', 'El hotel ha sido registrado exitosamente')->with('typealert', 'success');
            }
        } catch (\Throwable $th) {
            if($th->getCode() == 23505){
                return redirect()->route('hotel-get')->with('message', 'Ese nombre de hotel ya se encuentra en uso, porfavor ingrese uno diferente')->with('typealert', 'danger');
            }
        }
    }

    public function updateHotel($id, Request $request){

        $hotel = Hotel::findOrFail($id);

        $hotel->name = e($request->input('name'));
        $hotel->address = e($request->input('address'));
        $hotel->city = e($request->input('city'));
        $hotel->nit = $request->input('nit');
        $hotel->number_of_rooms = $request->input('number_of_rooms');

        if($hotel->save()){
            return redirect()->route('hotel-get')->with('message', 'El hotel ha sido actualizado exitosamente')->with('typealert', 'success');
        }
    }

    public function postRooms(Request $request, $id){
        $hotel = Hotel::findOrFail($id);
        foreach($request->amount as $key => $amount){
            $data = new Rooms;
            $data->id_hotel = $id;
            $data->amount = $amount;
            $data->type = $request->type[$key];
            $data->accommodation = $request->accommodation[$key];

            $data->save();
        }
        $hotel->asigned_rooms = 1;
        $hotel->save();

        return redirect()->route('hotel-get')->with('message', 'Las habitaciones del hotel han sido registradas exitosamente')->with('typealert', 'success');
    }
}
