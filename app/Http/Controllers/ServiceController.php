<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostServiceRequest;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(9);

        return view('services.index', compact('services'));
    }

    public function create(): View|Factory
    {
        return view('services.create');
    }

    /**
     * Store new service request
     */
    public function store(PostServiceRequest $request): RedirectResponse
    {
        $request = $request->validated();
        dd(Service::create($request));
        return back()->with('success', 'Successfully added new service request.');
    }
}
