<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function showServices()
    {
        $services = Service::paginate(9);

        return view('service', compact('services'));
    }
}
