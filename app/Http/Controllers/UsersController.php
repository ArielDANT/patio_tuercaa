<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Repositories\UsersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Empleados;
use DB;
use App\Models\Users;
use Auth;

class UsersController extends AppBaseController
{
    /** @var UsersRepository $usersRepository*/
    private $usersRepository;

    public function __construct(UsersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$users = $this->usersRepository->all();
        //JOIN 
        $users = DB::select("SELECT * FROM users u join empleados e on u.epl_id=e.epl_id");
        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function create()
    {
        $empleados=Empleados::pluck('epl_nombres','epl_id');
        return view('users.create')
        ->with('empleados',$empleados);
    }

    /**
     * Store a newly created Users in storage.
     *
     * @param CreateUsersRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersRequest $request)
    {
        $input = $request->all();

        $input['password']=bcrypt('12345678');
    
        $users = $this->usersRepository->create($input);

        Flash::success('Users saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.show')
        ->with('users', $users);
    }

    /**
     * Show the form for editing the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);
        $empleados=Empleados::pluck('epl_nombres','epl_id');

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')
        ->with('users', $users)
        ->with('empleados',$empleados);
    }

    /**
     * Update the specified Users in storage.
     *
     * @param int $id
     * @param UpdateUsersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        $users = $this->usersRepository->update($request->all(), $id);

        Flash::success('Users updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified Users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success('Users deleted successfully.');

        return redirect(route('users.index'));
    }
        public function change_password(Request $request){
        $datos=$request->all();
        $usu_id=$datos['usu_id'];
        $Usuario=Users::find($usu_id);
        $new_pass=$datos['new_password'];
        $confirm_new_pass=$datos['confirm_new_password'];

        if ($new_pass==$confirm_new_pass){
        $Usuario->update(['password'=>bcrypt($new_pass)]);
        Flash::success('clave cambiada correctamente');
        return redirect(route('users.index'));

        }
        Flash::error('Las claves no son iguales');
        return redirect(route('users.index'));
        }

    public function change_password_profile(Request $request){
        $datos=$request->all();
        if(isset($datos['btn_change'])){
       
        $usu_id=Auth::user()->id;
        $Usuario=Users::find($usu_id);
        $nueva_clave=$datos['nueva_clave'];
        $confirme_nueva_clave=$datos['confirme_nueva_clave'];
       
        if ($nueva_clave==$confirme_nueva_clave){

        $Usuario->update(['password'=>bcrypt($nueva_clave)]);
        Flash::success('clave cambiada correctamente');
        return redirect(route('users.index'));

        }else{
            dd('Habla serio, cambia bien ve');

        }

        }else{
            return view('users.change_password_profile');

        }

       // $datos=$request->all();
      //  $usu_id=$datos['usu_id'];
     //  // $Usuario=Users::find($usu_id);
      //  $new_pass=$datos['new_password'];
      //  $confirm_new_pass=$datos['confirm_new_password'];
//
      //  if ($new_pass==$confirm_new_pass){
      //  $Usuario->update(['password'=>bcrypt($new_pass)]);
      //  Flash::success('clave cambiada correctamente');
      //  return redirect(route('users.index'));
//
      //  }
       // Flash::error('Las claves no son iguales');
        //return redirect(route('users.index'));
          
          }
      }


