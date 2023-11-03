<?php

namespace App\Http\Controllers\Api;

use App\Models\Capability;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CapabilityResource;

class CapabilitiesController extends Controller
{
    public function index()
    {
        $capability = Capability::all();
        return CapabilityResource::collection($capability);
    }

    public function store(Request $request)
    {
        $capability = new Capability;
        $capability->name=$request->name;
        $capability->save();

    }

    public function show($id)
    {
        $capability = Capability::find($id);
        return new CapabilityResource($capability);
    }

    public function update(Request $request, $id)
    {
        $capability = new Capability;
        $capability->name=$request->name;
        $capability->update(['name' => $request->name]);
        return new CapabilityResource($capability);
    }

    public function destroy( $id)
    {
        $capability = Capability::find($id);
        $capability->delete();
        return response()->noContent();
    }
}
