<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CapabilityResource;
use App\Models\Capability;
use Illuminate\Http\Request;

class CapabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capability = Capability::all();
        return CapabilityResource::collection($capability);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $capability = new Capability;
        $capability->name = $request->name;
        $capability->save();
        return new CapabilityResource($capability);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $capability=Capability::find($id);
        if(!$capability){
            return response()->json(['message'=>'Capability not found'],404);
        }
        return new CapabilityResource($capability);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $capability = Capability::find($id);

         if($capability){
           $capability->name = $request->name;
           $capability->save();
           return new CapabilityResource($capability);
         }
         return response()->json(['message'=>'Capability not found'],404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $capability= Capability::find($id);

        $capability->delete();

        return response()->noContent();
    }
}
