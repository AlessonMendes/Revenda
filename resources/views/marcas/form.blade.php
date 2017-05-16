@extends('layout')
@section('corpo')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Cadastrar Marca</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                @if($editar)
                    <form method="POST" action="{{route('marcas_update',['id'=>$marca->id])}}" class="form-horizontal">
                        @else
                            <form method="POST" action="{{route('marcas_cadastrar')}}" class="form-horizontal">
                                @endif
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Nome</label>
                                        <div class="controls">
                                            <input type="text" value="{{$marca->nome}}" class="span6 typeahead" name="marca[nome]"
                                                   id="typeahead">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
                                        <button type="reset" class="btn">Cancelar</button>
                                    </div>
                                </fieldset>
                            </form>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
