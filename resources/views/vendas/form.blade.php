@extends('layout')


@section('corpo')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Cadastrar Vendas</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Data</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead ui-datepicker" id="typeahead">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="typeahead">Forma de Pagamento</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead">
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
