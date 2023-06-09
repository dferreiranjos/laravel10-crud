<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\User;


class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($this->objUser->all());
        // dd($this->objBook->all());

        // dd($this->objUser->find(1)->RelBooks);

        // $book = $this->objBook->all()->sortBy('title');
        // $book = $this->objBook->all()->sortByDesc('id');
        $book = $this->objBook->all();
        return view('index', compact('book'));
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
        echo $id;
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
