<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Repositories\EmpresaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmpresaController extends AppBaseController
{
    /** @var EmpresaRepository $empresaRepository*/
    private $empresaRepository;

    public function __construct(EmpresaRepository $empresaRepo)
    {
        $this->empresaRepository = $empresaRepo;
    }

    /**
     * Display a listing of the Empresa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empresas = $this->empresaRepository->all();

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new Empresa.
     *
     * @return Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresa in storage.
     *
     * @param CreateEmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpresaRequest $request)
    {
        $input = $request->all();

        $empresa = $this->empresaRepository->create($input);

        Flash::success('Empresa saved successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.show')->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresa', $empresa);
    }

    /**
     * Update the specified Empresa in storage.
     *
     * @param int $id
     * @param UpdateEmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpresaRequest $request)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        $empresa = $this->empresaRepository->update($request->all(), $id);

        Flash::success('Empresa updated successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified Empresa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        $this->empresaRepository->delete($id);

        Flash::success('Empresa deleted successfully.');

        return redirect(route('empresas.index'));
    }
}
