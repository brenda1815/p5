<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::paginate(5);
        return view('permissions.index', compact('permissions'));
    }
    public function crete(){
        return view('permissions.create');
    }
    public function store(Request $request){
        Permission::create($request->all());
        return redirect()->route('permissions.index');
    }
    public function show(Permission $permissions){
        return view('oermissions.show', compact('permissions'));
    }
}
