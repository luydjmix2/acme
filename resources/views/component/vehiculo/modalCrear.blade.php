<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="modal fade" id="modal-block-popin" tabindex="-1" aria-labelledby="modal-block-popin" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Crear Vehiculo</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    {!! Form::open(['route' => 'vehiculo.store']) !!}
                    <div class="row">
                        <div class="col-xl-12">
                            {{ Form::label('propietario_id', 'Selectione el propietario del vehiculo', ['class' => 'control-label']) }}
                            {{ Form::select('propietario_id', Helper::listForSelectPropie(), old('propietario_id'), ['class' => 'form-control', 'placeholder' => 'Asige un propietario']) }}
                        </div>
                        <div class="col-xl-12">
                            {{ Form::label('conductor_id', 'Selectione el conductor del vehiculo', ['class' => 'control-label']) }}
                            {{ Form::select('conductor_id', Helper::listForSelectConduc(), old('conductor_id'), ['class' => 'form-control', 'placeholder' => 'Asige un conductor']) }}
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xl-6">
                            {{ Form::label('placa', 'Placa del vehiculo', ['class' => 'control-label']) }}
                            {{ Form::text('placa', old('placa'), array_merge(['class' => 'form-control'])) }}
                        </div>
                        <div class="col-xl-6">
                            {{ Form::label('color', 'Color del vehiculo', ['class' => 'control-label']) }}
                            {{ Form::text('color', old('color'), array_merge(['class' => 'form-control'])) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                           {{ Form::label('marca', 'Marca del vehiculo', ['class' => 'control-label']) }}
                            {{ Form::text('marca', old('marca'), array_merge(['class' => 'form-control'])) }}
                        </div>
                        <div class="col-xl-6">
                            {{ Form::label('tipo', 'Tipo de vehiculo', ['class' => 'control-label']) }}
                            {{ Form::select('tipo', ['1' => 'Privado', '2' => 'Publico'], old('tipo'), ['class' => 'form-control', 'placeholder' => 'Seleciones el tipo']) }}
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">cerrar</button>
                    <button type="submit" class="btn btn-sm btn-primary">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>