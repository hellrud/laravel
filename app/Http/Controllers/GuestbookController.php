<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestbooks = Guestbook::query()->orderBy('created_at', 'desc')->paginate();
        
        return view('welcome', ['guestbook' => $guestbooks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Guestbook $guestbook)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Guestbook $guestbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guestbook $guestbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guestbook $guestbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guestbook $guestbook)
    {
        //
    }
}
