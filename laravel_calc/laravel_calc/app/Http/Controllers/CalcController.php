<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;

class CalcController extends Controller
{
    public function suma($sk1, $sk2)
    {
        $sum = $sk1 + $sk2;
        return view('calc.suma', compact('sk1', 'sk2', 'sum'));
    }
    public function atimtis($sk1, $sk2)
    {
        $sum = $sk1 - $sk2;
        return view('calc.atimtis', compact('sk1', 'sk2', 'sum'));
    }
    public function dalyba($sk1, $sk2)
    {
        // $sum = $sk1 / $sk2;
        return view('calc.dalyba', compact('sk1', 'sk2'));
    }

    public function daugyba($sk1, $sk2)
    {
        $sum = $sk1 * $sk2;
        return view('calc.daugyba', compact('sk1', 'sk2', 'sum'));
    }

    //post metodas (web.php pradzia 31 eilute)
    public function show()
    {
        //2 pasiemam is sesijos skaiciu
        $rez = Session::get('suma', 'not found');
        //3 nunulinam sesija
        Session::put('suma', null);
        return view('calc.show', ['r'=> $rez]);
    }
    public function calc(Request $request)
    {
        //x ir y vardai is show.blade.php 7/8 eilutes
       $suma= $request->x + $request->y;
       //siek tiek paaiskinimo, kuri suma yra suma
       //1 priskiriam duomenis i sesija
       Session::put('suma', $suma);
       return redirect()->back();
    }

}
