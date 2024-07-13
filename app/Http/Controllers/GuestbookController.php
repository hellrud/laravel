<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Guestbook;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestbooks = Guestbook::query()->orderBy('created_at', 'desc')->paginate(9);
        
        return view('welcome', ['guestbooks' => $guestbooks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guestbook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'guestbook' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);
        
        $data['user_id'] = $request->user()->id;
        $guestbook = Guestbook::create($data);
        return to_route('guestbook.show', $guestbook)->with('message', 'Guestbook entry has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guestbook $guestbook)
    {
        $username = DB::table('users')->where('id', $guestbook->user_id)->first()->name;
        return view('guestbook.show' , ['guestbook' => $guestbook, 'username' => $username]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guestbook $guestbook)
    {
        return view('guestbook.edit' , ['guestbook' => $guestbook]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guestbook $guestbook)
    {
        $data = $request->validate([
            'guestbook' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);
        
        
        $guestbook->update($data);
        return to_route('guestbook.show', $guestbook)->with('message', 'Guestbook entry has been updated');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guestbook $guestbook)
    {
        //
    }
}
