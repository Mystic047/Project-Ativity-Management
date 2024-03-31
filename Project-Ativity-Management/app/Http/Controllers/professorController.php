<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\professors;

class professorController extends Controller
{
    public function showManageView()
    {
        return view('/admin/managementView/professorManage');
    }

    public function showCreateView()
    {
        return view('/admin/createView/professorCreate');
    }

    public function create(Request $request)
    {
        $request->validate([
            'professors_id' => 'required|unique:professors,professors_id',
            'email' => 'nullable|string',
            'password' => 'required|min:8',
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'nickname' => 'nullable|string',
            'faculty_id' => 'nullable|string',
            'area_id' => 'nullable|string',
        ]
        );

        Log::debug($request->all());

        $professor = new professors;
        $professor->fill($request->all());
        $professor->save();

        return redirect()->route('professor.manage')->with('success', 'Students added successfully!');
    }
}
