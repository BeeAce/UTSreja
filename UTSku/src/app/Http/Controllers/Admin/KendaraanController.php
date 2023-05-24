<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpFoundation\Response;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('admin.kendaraans.index', compact('kendaraans'));
    }

    public function makeDataTables(Request $request)
    {
        $kendaraans = kendaraan::all();

        $table = DataTables::of($kendaraans);
        $table->addColumn('placeholder', '&nbsp;');
        $table->addColumn('actions', '&nbsp;');

        $table->editColumn('actions', function ($row) {
            $viewGate      = 'kendaraan_show';
            $editGate      = 'kendaraan_edit';
            $deleteGate    = 'kendaraan_delete';
            $crudRoutePart = 'kendaraans';

            return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
        });

        $table->rawColumns(['actions', 'placeholder']);

        return $table->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Kendaraan::types();
        $fuels = Kendaraan::fuels();
        return view('admin.kendaraans.create', compact('types', 'fuels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect()->route('admin.kendaraans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kendaraan $kendaraan)
    {
        return view('admin.kendaraans.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        $types = Kendaraan::types();
        $fuels = Kendaraan::fuels();
        return view('admin.kendaraans.edit', compact('kendaraan', 'types', 'fuels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $kendaraan->update($request->all());
        return redirect()->route('admin.kendaraans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return back();
    }

    public function massDestroy(Request $request)
    {
        $kendaraans = Kendaraan::find(request('ids'));

        foreach ($kendaraans as $kendaraan) {
            $kendaraan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
