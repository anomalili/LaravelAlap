<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzes;
use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    public function index()
    {
        $reg = Bejegyzes::all();
        return $reg;
    }
    public function show($id)
    {
        $reg = Bejegyzes::find($id);
        return $reg;
    }
    public function destroy($id)
    {
        Bejegyzes::find($id)->delete();
    }
    public function store(Request $request)
    {
        $store = new Bejegyzes();
        $store->email = $request->email;
        $store->password = $request->password;
        $store->name = $request->name;
        $store->statusz = $request->statusz;
        $store->helyadatok = $request->helyadatok;
		$store->save();
    }
}
