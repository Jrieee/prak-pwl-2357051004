<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Muhammad Fajri Ramadhani',
            'npm' => '2357051004',
            'kelas' => 'A'
        ];
        return view('profile', $data);
    }
}
