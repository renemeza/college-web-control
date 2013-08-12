@extends('layouts.application')
@section('content')
<div class="container-fluid" data-role="main">
    <div class="row-fluid">
        <div class="span12">
            <div class="span3">
                <nav>
                    <ul class="nav nav-list">
                        <li class="{{ $active == 'teachers' ? 'active' : ''}}"><a href="/admin/teachers">Maestros</a></li>
                        <li class="{{ $active == 'students' ? 'active' : ''}}"><a href="/admin/students">Alumnos</a></li>
                        <li class="{{ $active == 'careers' ? 'active' : ''}}"><a href="/admin/careers">Carreras</a></li>

                    </ul>
                </nav>
            </div>
            <div class="span9">
                <div class="navbar">
                    <div class="navbar-inner">
                        <form action="{{ $main_link }}/create" method="GET" class="navbar-form pull-left">
                            <button type="submit" class="btn btn-primary">Nuevo</button>
                        </form>
                        <form action="" method="GET" class="navbar-search pull-right">
                            <input type="text" class="search-query" placeholder="Buscar">
                            <button class="btn" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
                @if( Session::has('alerts') )
                <div class="alert alert-{{ Session::get('alerts')['alert-type'] }}">
                    <button class="close" type="button" data-dismiss="alert">&times;</button>
                    <strong>{{ Session::get('alerts')['title'] }}: </strong>{{ Session::get('alerts')['message'] }}
                </div>
                @endif
                {{ $content }}
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="span12">

        </div>
    </div>
</footer>
@stop