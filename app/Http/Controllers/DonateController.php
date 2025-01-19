<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Donations;
use Illuminate\Http\Request;


class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalDonations = Donations::sum('amount');

        $donations = Donations::with('user')
            ->selectRaw('sum(amount) as total_amount, user_id')
            ->groupby('user_id') 
            ->orderBy('total_amount', 'desc') 
            ->take(10)
            ->get();
        // dd($donations);
        return view('donate', compact('donations', 'totalDonations'));
        //
        // $user = User::with('donations')->get();
        // // dd($user);
        // return view('donate', compact('user'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
