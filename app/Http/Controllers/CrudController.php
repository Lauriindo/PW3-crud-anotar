<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $users = [
        [
            'name' => 'Ana Maria',
            'age' => '12'
        ],
        [
            'name' => 'João',
            'age' => '10'
        ]
    ];

    public function index()
    {
        return view ('welcome',['user' => $this -> users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $age = $request->age;

        return view('index', ['user' => $this -> users]);
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
