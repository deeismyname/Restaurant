<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::orderBy('id', 'desc')->paginate(10);
// dd($menu);
        return view('menu.index', compact('menu'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//     public function store(Request $request)
//     {
//         $attributes = request()->validate([
//             'menu_name' => 'required',
//             'description' => max(255),
//             'unit_cost' => 'required',
//             'reuse' => 'max(255)'
//         ]);
// dd($attributes);
//         Menu::create($attributes);


//         return redirect()->back()->with('message', 'Menu has been added successfully');

//     }

public function store(Request $request)
{
    $attributes = $request->validate([
        'menu_name' => 'required | max:255',
        'unit_cost' => 'required | max:255',
         'reuse' => 'max:255',
         'reuse*' => 'max:255',
         'description' => 'max:255',
         'description*' => 'max:255'
    ]);


    Menu::create($attributes);

    return redirect()->back()->with('message', 'Menu has been added successfully');


}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('menu.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
