<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(){
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.index');
    }
}
