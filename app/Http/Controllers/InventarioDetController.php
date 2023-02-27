<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventarioDetRequest;
use App\Http\Requests\UpdateInventarioDetRequest;
use App\Repositories\InventarioDetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InventarioDetController extends AppBaseController
{
    /** @var InventarioDetRepository $inventarioDetRepository*/
    private $inventarioDetRepository;

    public function __construct(InventarioDetRepository $inventarioDetRepo)
    {
        $this->inventarioDetRepository = $inventarioDetRepo;
    }

    /**
     * Display a listing of the InventarioDet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inventarioDets = $this->inventarioDetRepository->all();

        return view('inventario_dets.index')
            ->with('inventarioDets', $inventarioDets);
    }

    /**
     * Show the form for creating a new InventarioDet.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventario_dets.create');
    }

    /**
     * Store a newly created InventarioDet in storage.
     *
     * @param CreateInventarioDetRequest $request
     *
     * @return Response
     */
    public function store(CreateInventarioDetRequest $request)
    {
        $input = $request->all();

        $inventarioDet = $this->inventarioDetRepository->create($input);

        Flash::success('Inventario Det saved successfully.');

        return redirect(route('inventarioDets.index'));
    }

    /**
     * Display the specified InventarioDet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventarioDet = $this->inventarioDetRepository->find($id);

        if (empty($inventarioDet)) {
            Flash::error('Inventario Det not found');

            return redirect(route('inventarioDets.index'));
        }

        return view('inventario_dets.show')->with('inventarioDet', $inventarioDet);
    }

    /**
     * Show the form for editing the specified InventarioDet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventarioDet = $this->inventarioDetRepository->find($id);

        if (empty($inventarioDet)) {
            Flash::error('Inventario Det not found');

            return redirect(route('inventarioDets.index'));
        }

        return view('inventario_dets.edit')->with('inventarioDet', $inventarioDet);
    }

    /**
     * Update the specified InventarioDet in storage.
     *
     * @param int $id
     * @param UpdateInventarioDetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventarioDetRequest $request)
    {
        $inventarioDet = $this->inventarioDetRepository->find($id);

        if (empty($inventarioDet)) {
            Flash::error('Inventario Det not found');

            return redirect(route('inventarioDets.index'));
        }

        $inventarioDet = $this->inventarioDetRepository->update($request->all(), $id);

        Flash::success('Inventario Det updated successfully.');

        return redirect(route('inventarioDets.index'));
    }

    /**
     * Remove the specified InventarioDet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventarioDet = $this->inventarioDetRepository->find($id);

        if (empty($inventarioDet)) {
            Flash::error('Inventario Det not found');

            return redirect(route('inventarioDets.index'));
        }

        $this->inventarioDetRepository->delete($id);

        Flash::success('Inventario Det deleted successfully.');

        return redirect(route('inventarioDets.index'));
    }
}
