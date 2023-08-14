<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function kirim(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'pesan' => 'required'
        ];
        $data = $request->validate($rules);
        Pesan::create($data);
        return redirect('/');
    }
}
