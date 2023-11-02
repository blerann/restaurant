<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $role = new Role;
        $role->name= $request->name;

        $role->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $role= Role::find($id);
       if(!$role){
         return response()->json(['message' => 'Role not found'], 404);
       }
        return response()->json($role,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role= Role::find($id);
        if($role){
           
            $role = new Role;
            $role->name = $request->name;
            $role->save();
            
        }

        return response()->json(['message' => 'Role not found'], 404);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        $role->delete();

        return response()->json("Role deleted");
    }
}
