@extends('adminlte::page')

@section('title', 'Cadastro Local')

@section('content_header')
<h1 class="m-0 text-dark">Local</h1>
@stop

@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
             
                <div class="col-md-12">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif  
                    @include('flash::message')
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de ip</h3>
                          
                        </div>


                        <form action="{{route('Ip.store')}}" method='post'>
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="Ip">Ip</label>
                                    <input name="ip" type="text" class="form-control" id="Ip"
                                        placeholder="Digite um ip" required>
                                </div>
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                    <label for="Ip">Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Digite um nome - opcional" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mac</label>
                                    <input name="Mac" type="text" class="form-control" id="Mac"
                                        placeholder="Digite um mec da maquina - opcional" >
                                </div>
                                <div class="form-group">
                                    <select class="form-control" aria-label="Selecao de local" name="local_id" required>
                                        <option selected>Selecione um local</option>
                                       
                                        @forelse($locals as $local)

                                        <option value="{{ $local->id}}">{{ $local->name}}</option>

                                        @empty

                                        <option selected>Nenhum local registrado.</option>


                                        @endforelse



                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" aria-label="Selecao de local" name="tipo_id" required>
                                        <option selected>Selecione um tipo</option>
                                      
                                        @forelse($tipos as $tipo)

                                        <option value="{{ $tipo->id}}">{{ $tipo->name}}</option>

                                        @empty

                                        <option selected>Nenhum tipo registrado.</option>


                                        @endforelse



                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <textarea name="descriprtion" type="text" class="form-control" id="descriprtion"
                                        placeholder="Digite um tipo de usuário">


                                    </textarea>
                                </div>





                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

@stop