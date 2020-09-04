<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    public function Edit()
    {
        $admin = Admin::find(auth('admin')->user()->id);
        return view('dashboard.auth.edit', compact('admin'));
    }
    public function Update(ProfileRequest $request)
    {
        try {
            $admin = Admin::find(auth('admin')->user()->id);
            if ($request->filled('password')) {
                $request->merge(['password'=>bcrypt($request->password)]);
            }
            unset($request['id']);
            unset($request['password_confirmation']);
            $admin->update($request->all());
            return redirect()->back()->with(['success' => 'Information updated']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'Information were wrong']);
        }

    }
}
