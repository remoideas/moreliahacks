<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositorio;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RepositorioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index_1()
    {
        $repositorios = Repositorio::paginate(15);

        return view('admin.repositorio.index', compact('repositorios'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $repositorios = Repositorio::paginate(15);

        return view('inicio', compact('repositorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.repositorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        Repositorio::create($request->all());

        Session::flash('flash_message', 'Repositorio successfully added!');

        return redirect('repositorio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $repositorio = Repositorio::findOrFail($id);

        return view('admin.repositorio.show', compact('repositorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $repositorio = Repositorio::findOrFail($id);

        return view('admin.repositorio.edit', compact('repositorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {

        $repositorio = Repositorio::findOrFail($id);
        $repositorio->update($request->all());

        Session::flash('flash_message', 'Repositorio successfully updated!');

        return redirect('repositorio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Repositorio::destroy($id);

        Session::flash('flash_message', 'Repositorio successfully deleted!');

        return redirect('repositorio');
    }

}
