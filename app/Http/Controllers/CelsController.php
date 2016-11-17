<?php

namespace App\Http\Controllers;

use App\Cel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCelsRequest;
use App\Http\Requests\UpdateCelsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class CelsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Cel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cels = Cel::all();

        return view('cels.index', compact('cels'));
    }

    public function create()
    {
        return view('cels.create');
    }

    /**
     * Store a newly created Cel in storage.
     *
     * @param  \App\Http\Requests\StoreCelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCelsRequest $request)
    {
        $request = $this->saveFiles($request);
        $cel = Cel::create($request->all());
        return redirect()->route('cels.index');

    }

    /**
     * Show the form for editing Cel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cel = Cel::findOrFail($id);
        return view('cels.edit', compact('cel'));
    }

    /**
     * Update Cel in storage.
     *
     * @param  \App\Http\Requests\UpdateCelsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCelsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $cel = Cel::findOrFail($id);
        $cel->update($request->all());

        return redirect()->route('cels.index');
    }

    /**
     * Display Cel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function show($id)
    {
        $cel = Cel::findOrFail($id);
        return view('cels.show', compact('cel'));
    }
    /**
     * Remove Cel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cel = Cel::findOrFail($id);
        $cel->delete();


        return redirect()->route('cels.index');
    }

}
