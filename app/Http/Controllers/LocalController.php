<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
    {
       return view('ips.local.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('ips.local.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
      
       
        try {
           
            $dados          =   $request->all();
           
            $local           =   Local::create($dados);
           
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
