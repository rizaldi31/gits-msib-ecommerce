<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $user = User::getAll();
        $jumlahUser = User::hitungSemuaUser();

        $payload['users'] = $user;
        $payload['totalUser'] = $jumlahUser;

        return view('product', $payload);
    }
}
