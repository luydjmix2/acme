<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul class="nav-main">
    <li class="nav-main-item">
        <a class="nav-main-link" href="{{route('home')}}">
            <i class="nav-main-link-icon fa fa-dice-d6"></i>
            <span class="nav-main-link-name">@lang('escritorio.name')</span>
<!--            <span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
        </a>
    </li>
    <li class="nav-main-heading">@lang('configuracion.name')</li>
    <li class="nav-main-item">
        <a class="nav-main-link" href="{{route('propietario.index')}}">
            <span class="nav-main-link-name">Propietarios</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="nav-main-link" href="{{route('conductor.index')}}">
            <span class="nav-main-link-name">Conductores</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="nav-main-link" href="{{route('vehiculo.index')}}">
            <span class="nav-main-link-name">Vehiculos</span>
        </a>
    </li>
</ul>