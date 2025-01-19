<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Donations;
use Illuminate\Auth\Events\Validated;
use Symfony\Component\HttpKernel\Profiler\Profile;

use function Laravel\Prompts\select;
use function Laravel\Prompts\table;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $user = DB::table('users')->where('id', '1')->get();
        $id = Auth::user()->id;
        $user = User::withSum('donations as total_donate', 'amount')
                    ->where('id', $id)
                    ->first();
        // $user = DB::table('users')
                    
        //             ->where('id', $id)
        //             ->get();
        

        // dd($user);

        return view('profile', compact('user'));
    }

    public function editpage(){
        $user = Auth::user();
        $profile= $user->id;
        // dd($user);
        return view('profile_update', compact('user', 'profile') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $profile)
    {
        //
        // dd($profile);
        // $user = Auth::user();
        // $userdb = DB::table('users')->where('id', $profile)->first();
        // $req = $request->all();

        // dd($request);
        $validator = $request->validate([
            'username'=>['required', 'max:255'],
            'gender' => ['required', 'in:male,female'],
            'phone'=> ['required', 'min:11','max:11', 'starts_with:0' ],
        
        ]);
        // dd($validator);

        // if($validator->fails() or !$user){
        //     return redirect()->route('profile.editpage')
        //                     ->withErrors($validator);
        // }
        // dd($request->);
        
        // $user->name = $request->input('username');
        // $user->gender = $request->input('gender');
        // $user->phone_number = $request->input('phone');
        
        // $userdb->name = $request->input('username');
        // $userdb->gender = $request->input('gender');
        // $userdb->phone_number = $request->input('phone');
        // $userdb->save();

        DB::table('users')->where('id', $profile)->update([
            'name' => $request->username,
            'gender' => $request->gender,
            'phone_number' => $request->phone,
        ]);

        // dd($userdb->name);

        return redirect()->route('profile.index')->with('success', 'profile sucessfully updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
