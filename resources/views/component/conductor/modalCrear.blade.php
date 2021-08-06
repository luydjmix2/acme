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
                    <h3 class="block-title">Crear Conductor</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    {!! Form::open(['route' => 'conductor.store']) !!}
                    <div class="row">
                        <div class="col-xl-12">
                            {{ Form::label(__('formPropeConduc.doc.inputN'), __('formPropeConduc.doc.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.doc.inputN'), old(__('formPropeConduc.doc.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xl-6">
                             {{ Form::label(__('formPropeConduc.firstName.inputN'), __('formPropeConduc.firstName.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.firstName.inputN'), old(__('formPropeConduc.firstName.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                        <div class="col-xl-6">
                            {{ Form::label(__('formPropeConduc.secondName.inputN'), __('formPropeConduc.secondName.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.secondName.inputN'), old(__('formPropeConduc.secondName.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                             {{ Form::label(__('formPropeConduc.lastNames.inputN'), __('formPropeConduc.lastNames.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.lastNames.inputN'), old(__('formPropeConduc.lastNames.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                        <div class="col-xl-6">
                            {{ Form::label(__('formPropeConduc.dir.inputN'), __('formPropeConduc.dir.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.dir.inputN'), old(__('formPropeConduc.dir.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                             {{ Form::label(__('formPropeConduc.phone.inputN'), __('formPropeConduc.phone.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.phone.inputN'), old(__('formPropeConduc.phone.inputN')), array_merge(['class' => 'form-control'])) }}
                        </div>
                        <div class="col-xl-6">
                            {{ Form::label(__('formPropeConduc.city.inputN'), __('formPropeConduc.city.label'), ['class' => 'control-label']) }}
                            {{ Form::text(__('formPropeConduc.city.inputN'), old(__('formPropeConduc.city.inputN')), array_merge(['class' => 'form-control'])) }}
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