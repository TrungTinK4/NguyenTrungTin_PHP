<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'image', 'name', 'username', 'phone', 'email', 'user.roles')
            ->get();
        return view('backend.user.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = User::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'image', 'name', 'username', 'phone', 'email', 'user.roles')
            ->get();
        return view('backend.user.create', compact('list'));
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
