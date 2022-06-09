<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::with('address')
            ->find(Auth()->user()->id);
        return view('profile', ['title' => 'Profile', 'profile' => $profile]);
    }

    public function fetch()
    {
        $profile = User::with('address')
            ->find(Auth()->user()->id);
        return response()->json([
            'profile' => $profile,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator1 = Validator::make($request->all(), [
            'photo' => 'image|nullable',
            'name' => 'required|max:50',
            'telp' => 'required|max:15',
            'gender' => 'required',
            'birth' => 'required',
        ]);

        if ($validator1->fails()) {
            return Redirect::back()
                ->withErrors($validator1)
                ->with('error_code', 5);
        }

        // get data pengurus
        $profile = User::find($id);

        // update data
        $profile->name = $request->get('name');
        $profile->telp = $request->get('telp');
        $profile->gender = $request->get('gender');
        $profile->birth = $request->get('birth');

        if ($request->hasFile('photo')) {
            // ada file yang diupload
            if ($profile->photo && $profile->photo != 'img/profile/default.png' && file_exists(storage_path('app/public/' . $profile->photo))) {
                Storage::delete('public/' . $profile->photo);
            }
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/img/profile/', $filenameSimpan);
            $savepath = 'img/profile/' . $filenameSimpan;
        } else {
            // tidak ada file yang diupload
            $savepath = $profile->photo;
        }
        $profile->photo = $savepath;

        // save
        $profile->save();

        return Redirect::back()
            ->with('success', "Profile successfully updated");
    }

    public function updatecredentials(Request $request, $id)
    {
        $user = User::find($id);
        $validate = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'username' => ['required', 'unique:users,username,' . Auth::user()->id],
            'currentpassword' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'newpassword' => ['required', 'confirmed', 'min:8'],
            'newpassword_confirmation' => ['required'],
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->messages()
            ]);
        }

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();
        return response()->json([
            'status' => 200,
            'message' => 'Credentials successfully updated.',
        ]);
    }

    public function newaddress(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'telp' => 'required|max:15',
            'street_address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:50',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->messages(),
            ]);
        }

        $address = new Address();
        $address->name = $request->input('name');
        $address->telp = $request->input('telp');
        $address->street_address = $request->input('street_address');
        $address->postal_code = $request->input('postal_code');
        $address->city = $request->input('city');
        $address->province = $request->input('province');

        $address->user()->associate(Auth()->user());
        $address->save();
        return response()->json([
            'status' => 200,
            'message' => 'Address successfully added.',
        ]);
    }

    public function deladdress($id)
    {
        $address = Address::find($id);
        if ($address) {
            $address->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Address successfully deleted.',
            ]);
        }
        return response()->json([
            'status' => 404,
            'message' => 'Address not found.',
        ]);
    }
}
