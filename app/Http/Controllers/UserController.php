<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest as UserRequest;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        //->orderBy('created_at','DESC');
        $users = User::orderBy('created_at','desc')->paginate(10);
        
        $user = User::find(1);

        
       
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $roles  =   Role::all();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {
            $dados =$request->all();
            $user = User::create($dados);
            $user->roles()->syncWithoutDetaching($request->role_id);
            flash('usuario cadastrado com sucesso')->success()->important();
            return redirect()->back();
        
           
        } catch (\Throwable $th) {
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sau requisicao!';           
            flash($message)->warning()->important();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $user    =   User::findOrFail($id);

       return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user    =   User::findOrFail($id);

        $roles  =   Role::all();
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        
        try {
            $user  = User::findOrFail($id);
            $dados = $request->all();
          
            if(!$dados['password']){
               
                $dados['password'] = $user->password;
            }
           

            $user->update($dados);

            if(isset($dados['role_id'])){
                $role_id = $dados['role_id'];
          }else{
               $role_id =[];
          }
            $user->roles()->sync($role_id);
            flash('Atualizado com sucesso')->success()->important();  
            return redirect()->back();


        } catch (\Throwable $th) {
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sua requisicao!';           
            flash($message)->warning()->important();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            //code...



        } catch (\Throwable $th) {
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sau requisicao!';           
            flash($message)->warning()->important();
            return redirect()->back();
        }
    }
}
