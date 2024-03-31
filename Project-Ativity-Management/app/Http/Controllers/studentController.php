<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Students;

class studentController extends Controller
{
    public function showManageView()
    {
        return view('/admin/user/stu');
    }

    public function showCreateView()
    {
        return view('/admin/user/createStu');
    }

    public function create(Request $request)
    {
        $request->validate([
            'students_id' => 'required|unique:students,students_id',
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

        $student = new Students;
        $student->fill($request->all());
        $student->save();
    }
}
