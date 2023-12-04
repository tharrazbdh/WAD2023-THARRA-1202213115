<?php


namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Request\StoreShowroomRequest;
use App\Http\Request\UpdateShowroomRequest;

class ShowroomController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();

        return view('showroom.showroom', compact('showroom'));
    }

    public function create()
    {
        return view('showroom.addShowroom');
    }

    public function store(storeShowroomRequest $request) {
        $this-> validate($request, [
            'nama' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
        ]);
    }

}


