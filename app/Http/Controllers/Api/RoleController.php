<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();

        return RoleResource::collection($role);
    }

    public function store(Request $request)
    {
        $role = new Role;
      
        $role->name = $request->name;

        $role->save();

        return new RoleResource($role);
    }

    public function show($id)
    {
        $role = Role::find($id);

        return $role;
    }

    
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        
        $role->name = $request->name;

        $role->save();

        //$role->update(['name' => $request->name]);
    }
    public function destroy($id)
    {
        $role = Role::find($id);

        $delete = $role->delete();

       return response()->noContent();
    }
}
