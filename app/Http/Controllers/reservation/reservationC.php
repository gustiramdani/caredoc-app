<?php

namespace App\Http\Controllers\reservation;

use App\Http\Controllers\Controller;
use App\Mail\ReservationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class reservationC extends Controller
{
    public function post(Request $request){
        try {
            // $data = [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'hp' => $request->hp,
            //     'complaint' => $request->complaint,
            // ];
            // Mail::to('cgg01082000@gmail.com')->send(new ReservationMail($data));
            return response()->json([
                "success" => true,
                "message" => "Reservasi Berhasil dikirim!"
            ],200);
      } catch (\Exception $e) {
        return response()->json([
            "success" => true,
            "message" => "Reservasi Gagal dikirim!"
        ],500);
      }
    }
}
