<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizationController extends Controller
{
   public function index()
{
    return view('organization.index', [
        'title' => 'Organization',
        'organizations' => Organization::with('organizationLeader')->latest()->get(),
    ]);
}

    public function create()
    {
        return view('organization.create', [
            'title' => 'Create Organization',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'leader_name' => 'required|max:255',
        ]);
        try {
            DB::beginTransaction();
            $organization = Organization::create($validated);
            $organization->organizationLeader()->create($validated);
            DB::commit();
            return to_route('organization.index')->withSuccess('Data berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route('organization.create')->withError('Data gagal ditambahkan ' . $e->getMessage());
        }
    }

    public function show(Organization $organization)
    {
        // (existing code)
    }

    public function edit(Organization $organization)
    {
        return view('organization.edit', [
            'title' => 'Edit Organization',
            'organization' => $organization,
        ]);
    }

    public function update(Request $request, Organization $organization)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'leader_name' => 'required|max:255',
        ]);
        try {
            DB::beginTransaction();
            $organization->update($validated);
            $organization->organizationLeader()->updateOrCreate(
                ['organization_id' => $organization->id],
                ['leader_name' => $validated['leader_name']],
            );
            DB::commit();
            return to_route('organization.index')->withSuccess('Data berhasil diubah');
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route('organization.edit', $organization)->withError('Data gagal ditambahkan');
        }
    }

    public function destroy(Organization $organization)
    {
        $organization->delete($organization);
        return to_route('organization.index')->withSuccess('Data berhasil dihapus');
    }
}