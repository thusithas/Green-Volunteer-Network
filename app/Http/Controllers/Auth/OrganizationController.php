<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function showOrg()
    {
        return view('auth.orgSign');
    }

    public function storeOrg(Request $request)
    {
        $this->validator($request->all())->validate();

        $organization = $this->create($request->all());

        // Log the organization in
        auth()->login($organization);

        return redirect()->route('/home'); 
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'orgname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:organizations'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Organization::create([
            'orgname' => $data['orgname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
