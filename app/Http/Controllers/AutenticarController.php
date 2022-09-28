<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AutenticarController extends Controller
{
    public function registro(RegistroRequest $request)
    {
        $users = new User();
        $users->name = $request ->name;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        return response()->json([
            'res' => true,
            'msg' => 'Usuario Creado'
        ],200);
    }
}
