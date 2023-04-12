<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Repositories\InventarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Proveedores;
use App\Models\Vehiculos;
use App\Models\InventarioDetalle;
use DB;

class InventarioController extends AppBaseController
{
    /** @var InventarioRepository $inventarioRepository*/
    private $inventarioRepository;

    public function __construct(InventarioRepository $inventarioRepo)
    {
        $this->inventarioRepository = $inventarioRepo;
    }

    /**
     * Display a listing of the Inventario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inventarios = $this->inventarioRepository->all();

        return view('inventarios.index')
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new Inventario.
     *
     * @return Response
     */
    public function create()
    {
        //$proveedores=Proveedores::orderBy('pro_nombres')->pluck('pro_nombres','pro_id');
        //dd($proveedores);
        $proveedores=Proveedores::orderBy('pro_nombres')->pluck('pro_nombres','pro_id');

        //$vehiculos=Vehiculos::orderBy('pro_nombres')->pluck('pro_nombres','pro_id');

        return view('inventarios.create')
        ->with('proveedores', $proveedores);
    }

    /**
     * Store a newly created Inventario in storage.
     *
     * @param CreateInventarioRequest $request
     *
     * @return Response
     */
    public function store(CreateInventarioRequest $request)
    {
        $input = $request->all();
        $encabezado=[
          "pro_id"=>$input['pro_id'],
          "ive_fecha"=>$input['ive_fecha'],
          "ive_documento"=>$input['ive_documento'],
          "ive_estado"=>$input['ive_estado']        
        ];
        $inventario = $this->inventarioRepository->create($encabezado);
        
        $detalle=[
           "ive_id"=>$inventario->ive_id,
           "veh_id"=>$input['veh_id'],
           "ivd_cantidad"=>$input['ivd_cantidad'],
           //"ivd_vunit"=>$input['ivd_vunit'],
           "ivd_estado"=>$input['ivd_estado']
        ];

        InventarioDetalle::create($detalle);

        return redirect(route('inventarios.edit',$inventario->ive_id));

        //Flash::success('Inventario saved successfully.');

        //return redirect(route('inventarios.index'));


    }

    /**
     * Display the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.show')->with('inventario', $inventario);
    }

    /**
     * Show the form for editing the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventario = $this->inventarioRepository->find($id);
        $proveedores=Proveedores::orderBy('pro_nombres')->pluck('pro_nombres','pro_id');
        //$detalle=InventarioDetalle::where("ive_id",$id)
        $detalle=DB::select("SELECT * FROM inventario_det ivd 
            JOIN vehiculos vh ON ivd.veh_id=vh.veh_id
            WHERE ivd_id=$id
            ");
        //if (empty($inventario)) {
        //    Flash::error('Inventario not found');
//
        //    return redirect(route('inventarios.index'));
        //}
        return view('inventarios.edit')
        ->with('inventario', $inventario)
        ->with('proveedores', $proveedores)
        ->with('detale', $detalle);
    }

    /**
     * Update the specified Inventario in storage.
     *
     * @param int $id
     * @param UpdateInventarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventarioRequest $request)
    {
        $input = $request->all();
        //dd($inventario);
        $detalle=[
            "ive_id"=>$id,
            "veh_id"=>$input["veh_id"],
            "ivd_cantidad"=>$input["ivd_cantidad"],
            //"ivd_vu" =>$input["ivd_vu"],
            "ivd_estado" =>$input["ivd_estado"]
        ];
        InventarioDetalle::create($detalle);
        return redirect(route('inventarios.edit',$id));
        //$inventario = $this->inventarioRepository->find($id);

       // if (empty($inventario)) {
        //    Flash::error('Inventario not found');

        //    return redirect(route('inventarios.index'));
        //}

        //$inventario = $this->inventarioRepository->update($request->all(), $id);

        //Flash::success('Inventario updated successfully.');

        //return redirect(route('inventarios.index'));
    }

    /**
     * Remove the specified Inventario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalle=inventarioDetalle::find($id);
        $ive_id=$detalle->ive_id;
        InventarioDetalle::destroy($id);
        return redirect(route('inventarios.edit',$ive_id));

        //$inventario = $this->inventarioRepository->find($id);

        //if (empty($inventario)) {
        //    Flash::error('Inventario not found');

        //    return redirect(route('inventarios.index'));
        //}

        //$this->inventarioRepository->delete($id);

        //Flash::success('Inventario deleted successfully.');

        //return redirect(route('inventarios.index'));
    }
}
