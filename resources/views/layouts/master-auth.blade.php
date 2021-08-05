<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{env('APP_NAME')}} - @yield('title-page')</title>

        <meta name="description" content="Crm Nes360° herramienta de gestion para empresa, clintes, pagos, factura, logistica, inventario">
        <meta name="author" content="Nes360.org">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Nes360.org">
        <meta property="og:description" content="Crm Nes360° herramienta de gestion para empresa.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="{{ asset('assets/media/favicons/favicon-192x192.png') }}">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        @include('layouts.auth.head')

    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header


        Footer

            ''                                          Static Footer if no class is added
            'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-dark'                          Dark themed Header
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo32.jpg') }}');">
                    <div class="row no-gutters bg-primary-op">
                        <!-- Main Section -->
                        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                            @yield('content')
                        </div>
                        <!-- END Main Section -->

                        <!-- Meta Info Section -->
                        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                            <div class="p-3">
                                <p class="display-4 font-w700 text-white mb-3">
                                    Welcome to the future
                                </p>
                                <p class="font-size-lg font-w600 text-white-75 mb-0">
                                    Copyright &copy; {{env('APP_DEVELOPER')}} <span data-toggle="year-copy"></span>
                                </p>
                            </div>
                        </div>
                        <!-- END Meta Info Section -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        @include('layouts.auth.scripts')
    </body>
</html>
