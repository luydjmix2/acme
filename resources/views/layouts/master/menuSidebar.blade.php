<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul class="nav-main">
    <li class="nav-main-item">
        <a class="nav-main-link" href="{{route('admin.home')}}">
            <i class="nav-main-link-icon fa fa-dice-d6"></i>
            <span class="nav-main-link-name">@lang('escritorio.name')</span>
<!--            <span class="nav-main-link-badge badge badge-pill badge-success">3</span>-->
        </a>
    </li>
    <li class="nav-main-heading">@lang('configuracion.name')</li>
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-cogs"></i>
            <span class="nav-main-link-name">@lang('configuracion.name')</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('admin.users.index')}}">
                    <span class="nav-main-link-name">@lang('usuarios.name')</span>
                </a>
            </li>
        </ul>
    </li>
</ul>