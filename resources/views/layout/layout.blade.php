<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modulo de Cliente</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <link rel="stylesheet" type="text/css" href="{{asset('modcliente/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
    <script src="{{asset('mod/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('mod/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('mod/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<!--keen-analysis@1.2.2 -->
    <script src="{{asset('mod/js/keen-analysis-1.2.2.js')}}" type="text/javascript"></script>

<!-- keen-dataviz@1.1.3 -->
    <link href="{{asset('mod/css/keen-dataviz-1.1.3.css')}}" rel="stylesheet" />
    <script src="{{asset('mod/js/keen-dataviz-1.1.3.js')}}" type="text/javascript"></script>

</head>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >SER S.A</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="envios">Envios</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reporte <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Diario</a></li>
                        <li><a href="#">Por Fecha</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Hoja de entrega</a></li>
                    </ul>
                </li>-->
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a  href="#">{{ $user . " | " . $email }}</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <!-- <li><a href="#">Iniciar Sesión</a></li>
                            <li role="separator" class="divider"></li>-->
                            @if($login = 1)
                                <li><a href="/CloseLogin">Cerrar Sesión</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content" id="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <br/>   <br/>   <br/>
                        <h3 class="box-title">Seguimiento de Envios</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="panel panel-default">
                        <div class="panel-title">
                            <h5 class="box-title">Opciones de Busqueda</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Buscador-->
                                @yield('search')
                                <!--Fin Buscador-->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Contenido-->
                            @yield('contenido')
                            <!--Fin Contenido-->
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div><!-- /.col -->
@yield('js')

</body>
</html>
