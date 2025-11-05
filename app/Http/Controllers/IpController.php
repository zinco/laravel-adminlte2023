<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Ip;
use App\Models\Tipo;
class IpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $locals = Local::all();
        return view('ips.index',compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locals = Local::all();
        $tipos = Tipo::all();
       
        

        return view('ips.create', compact('locals','tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
           
            $dados          =   $request->all();
           
            $local           =   Ip::create($dados);
           
            flash('Função cadastrada com uscesso')->success();
            return redirect()->back();

        } catch (\Throwable $th) {
            
            
            $message    =   env('APP_DEBUG') ? $th->getMessage() : 'Erro ao processar sau requisicao!';
            dd( $message);
            flash($message)->success();
          
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
