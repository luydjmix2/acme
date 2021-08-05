<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('layouts.master-white')

@section('css')

@endsection
@section('content')
<!-- Hero -->
<div class="content">
    <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
        <div>
            <h1 class="h2 mb-1">
                Propietarios
            </h1>
        </div>
        <div class="mt-4 mt-md-0">

        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-xl-2">
                        <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-popin">Block Design</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending">Nombre</th>
                                    <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Documento: activate to sort column ascending">Documento</th>
                                    <th class="d-none d-sm-table-cell sorting" style="width: 15%;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Direccion: activate to sort column ascending">Direccion</th>
                                    <th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Telefono: activate to sort column ascending">Telefono</th>
                                    <th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending">Ciudad</th>
                                    <th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending">Accriones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($propietarios as $item)
                                <tr >
                                    <td class="text-center sorting_1">{{$item->id}}</td>
                                    <td class="font-w600">
                                        {{$item->pri_nombre}} {{$item->seg_nombre}} {{$item->apellidos}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{$item->documento}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{$item->direcion}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{$item->telefono}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{$item->ciudad}}
                                    </td>
                                    <td>

                                    </td>
                                </tr>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

</div>
<!-- END Page Content -->
@component('component.propietario.modalCrear')
@slot('propietario_id') {{$item->id}} @endslot
@endcomponent

@endsection

@section('script')

<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endsection