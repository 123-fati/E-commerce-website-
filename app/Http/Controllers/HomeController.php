<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reservation;
use App\models\objet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
public function reservation()
    {
       $id = auth()->id();
        $reservations = reservation::where('id_client',$id)->first();
         
        return view('reservation')->with([

           'reservation' => $reservations

        ]);
    }
    public function order()
    {
       $id =  auth()->id();
        $orders = reservation::where('id_client',$id)->first();

        return view('order')->with([

           'order' => $orders

        ]);
    }

    public function edit(){
        $id_partenaire =  auth()->id();

         $status='non-disponible';
         $objet =objet::where('id_partenaire',$id_partenaire)->first();

         $objet->update([
    
                  'status' => $status,
    
                ]);
    
                return redirect()->route('order')->with([
    
                  'success' => 'status modifier',
    
                ]);
    
    
    
        
    }
}
