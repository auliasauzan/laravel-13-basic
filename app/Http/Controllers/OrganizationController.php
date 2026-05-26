<?php

namespace App\Http\Controllers;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
       
        return view('organization.index', [
            'title' => 'Organization',
            'organization' => Organization::latest()->get(),
            // 'organizations' => Organization::orderBy('name', 'asc')->get(),
        ]);
    }
}