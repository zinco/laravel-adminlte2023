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
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Formulário Locais</h3>
                        </div>


                        <form action="{{route('Local.store')}}" method='post'>
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Digite um tipo de usuário" required>
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