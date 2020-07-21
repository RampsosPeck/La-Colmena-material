<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>La Colmena - Catálogo</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <meta name="description" content="Sistema de pedidos en linea realizado para la tienda LA COLMENA">
    <meta name="author" content="Ing. Jorge Peralta">
    <meta name="keyword" content="Sistema de pedidos en linea, Sistema bajo plataforma web La colmena. ">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/img/welcome/colmena.svg') }}" />

    <!-- CSS Files
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/> -->


    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/assets/style.css" rel="stylesheet"/>

</head>

<body class="profile-page">
    <div id="app">

        <nav class="navbar navbar-rose navbar-transparent navbar-fixed-top navbar-color-on-scroll">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand " href="{{ url('catalogo') }}"><strong>La Colmena </strong></a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">view_carousel</i> Administracion
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="../index.html">
                                        <i class="material-icons">group_add</i> Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="../sections.html#headers">
                                        <i class="material-icons">dns</i> Categorias
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../index.html">
                                <i class="material-icons">shop</i> Productos
                            </a>
                        </li>
                        <li>
                            <a href="../index.html">
                                <i class="material-icons">format_list_numbered</i> Pedidos
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i> Jorge Peralta
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="../index.html">
                                        <i class="material-icons">contacts</i> Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="../sections.html#headers">
                                        <i class="material-icons">exit_to_app</i> salir
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="" target="_blank" class="btn btn-rose btn-round btn-sm" data-toggle="tooltip" data-placement="bottom" title="Carrito/Compras">
                                <img src="{{ asset('/img/secondary/cart.svg') }}" alt="pedidos" width="30" class="nav-icon" ><b>
                                 Compras</b>
                                 <span class="label label-warning"> 1</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="page-header header-filter" data-parallax="true" style="background-image: url('../img/secondary/potosi.jpg');">
        </div>

        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                           <div class="profile">
                                <div class="avatar">
                                    <img src="{{ asset('/img/secondary/menu.svg') }}" alt="Circle Image" class="img-responsive">
                                </div>
                                <div class="name">
                                    <h3 class="title">CATÁLOGO - MENÚ</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="profile-tabs" style="margin-top: 2px;">
                                <div class="nav-align-center">
                                    <ul class="nav nav-pills nav-pills-rose nav-pills-icons" role="tablist">
                                        <li class="active">
                                            <a href="#tortas" role="tab" data-toggle="tab">
                                                <img src="{{ asset('/img/secondary/torta.svg') }}"  class="material-icons img-responsive">
                                                TORTAS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#comidas" role="tab" data-toggle="tab">
                                                <img src="{{ asset('/img/secondary/comida2.svg') }}"  class="material-icons img-responsive">
                                                COMIDAS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#varios" role="tab" data-toggle="tab">
                                                <img src="{{ asset('/img/secondary/store.svg') }}"  class="material-icons img-responsive">
                                                VARIOS
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Profile Tabs -->
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane connections" id="tortas">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-blog  shadow" style="background-color: #f2f2f2;">
                                        <div class="card-image">
                                            <div class="ribbon ribbon-top-right ">
                                                <span><strong> 30% DTO. </strong></span>
                                            </div>
                                            <a href="#pablo">
                                                <label class="cardprecio label label-primary" > Bs. <strong>20.00</strong> </label>
                                                <img class="imgcard" src="/img/secondary/a461x407.png" />
                                            </a>
                                        </div>

                                        <div class="card-content">
                                            <h4 class="card-title text-center">
                                                <a href="#pablo">5 Common Startup</a>
                                            </h4>
                                            <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                Don't be scared of the truth because we need to restart   Owens’ bed design but the back is...PRUEBA
                                            </p>
                                            <div class="footer">
                                                <div class="author">
                                                     <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                            <i class="material-icons">remove</i> </button>
                                                        <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                    </div>
                                                </div>
                                                <div class="stats">
                                                    <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs">
                                                            <strong> Añadir </strong>
                                                            <i class="material-icons" >add_shopping_cart</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                        <div class="card-image">
                                            <div class="ribbon ribbon-top-right ">
                                                <span><strong> 30% DTO. </strong></span>
                                            </div>
                                            <a href="#pablo">
                                            <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                            <img class="imgcard" src="/img/secondary/a671X671.png" />
                                            </a>
                                        </div>

                                        <div class="card-content">
                                            <h4 class="card-title text-center">
                                                <a href="#pablo">5 Common dos Startup</a>
                                            </h4>
                                            <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                            </p>
                                            <div class="footer">
                                                <div class="author">
                                                     <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                            <i class="material-icons">remove</i> </button>
                                                        <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                    </div>
                                                </div>
                                                <div class="stats">
                                                    <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs">
                                                            <strong> Añadir </strong>
                                                            <i class="material-icons" >add_shopping_cart</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-blog  shadow" style="background-color: #f2f2f2;">
                                        <div class="card-image">
                                            <div class="ribbon ribbon-top-right ">
                                                <span><strong> 30% DTO. </strong></span>
                                            </div>
                                            <a href="#pablo">
                                                <label class="cardprecio label label-primary" > Bs. <strong>20.00</strong> </label>
                                                <img class="imgcard" src="/img/secondary/a461x407.png" />
                                            </a>
                                        </div>

                                        <div class="card-content">
                                            <h4 class="card-title text-center">
                                                <a href="#pablo">5 Common Startup</a>
                                            </h4>
                                            <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                Don't be scared of the truth because we need to restart   Owens’ bed design but the back is...PRUEBA
                                            </p>
                                            <div class="footer">
                                                <div class="author">
                                                     <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                            <i class="material-icons">remove</i> </button>
                                                        <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                    </div>
                                                </div>
                                                <div class="stats">
                                                    <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs">
                                                            <strong> Añadir </strong>
                                                            <i class="material-icons" >add_shopping_cart</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                        <div class="card-image">
                                            <div class="ribbon ribbon-top-right ">
                                                <span><strong> 30% DTO. </strong></span>
                                            </div>
                                            <a href="#pablo">
                                            <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                            <img class="imgcard" src="/img/secondary/a671X671.png" />
                                            </a>
                                        </div>

                                        <div class="card-content">
                                            <h4 class="card-title text-center">
                                                <a href="#pablo">5 Common dos Startup</a>
                                            </h4>
                                            <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                            </p>
                                            <div class="footer">
                                                <div class="author">
                                                     <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                            <i class="material-icons">remove</i> </button>
                                                        <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                        <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                    </div>
                                                </div>
                                                <div class="stats">
                                                    <div class="btn-group">
                                                        <button class="btn btn-round btn-rose btn-xs">
                                                            <strong> Añadir </strong>
                                                            <i class="material-icons" >add_shopping_cart</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane active" id="comidas">
                            <div class="row">
                                <div class="col-md-9">
                                    <h4 class="title">Platos extras</h4>
                                    <div class="row collections">
                                        <div class="col-md-4">
                                            <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                                <div class="card-image">
                                                    <div class="ribbon ribbon-top-right ">
                                                        <span><strong> 30% DTO. </strong></span>
                                                    </div>
                                                    <a href="#pablo">
                                                    <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                                    <img class="imgcard" src="/img/secondary/a671X671.png" />
                                                    </a>
                                                </div>

                                                <div class="card-content">
                                                    <h4 class="card-title text-center">
                                                        <a href="#pablo">5 Common dos Startup</a>
                                                    </h4>
                                                    <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                        Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                                    </p>
                                                    <div class="footer">
                                                        <div class="author">
                                                             <div class="btn-group">
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                                    <i class="material-icons">remove</i> </button>
                                                                <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                            </div>
                                                        </div>
                                                        <div class="stats">
                                                            <div class="btn-group">
                                                                <button class="btn btn-round btn-rose btn-xs">
                                                                    <strong> Añadir </strong>
                                                                    <i class="material-icons" >add_shopping_cart</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-blog  shadow" style="background-color: #f2f2f2;">
                                                <div class="card-image">
                                                    <div class="ribbon ribbon-top-right ">
                                                        <span><strong> 30% DTO. </strong></span>
                                                    </div>
                                                    <a href="#pablo">
                                                        <label class="cardprecio label label-primary" > Bs. <strong>20.00</strong> </label>
                                                        <img class="imgcard" src="/img/secondary/a461x407.png" />
                                                    </a>
                                                </div>

                                                <div class="card-content">
                                                    <h4 class="card-title text-center">
                                                        <a href="#pablo">5 Common Startup</a>
                                                    </h4>
                                                    <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                        Don't be scared of the truth because we need to restart   Owens’ bed design but the back is...PRUEBA
                                                    </p>
                                                    <div class="footer">
                                                        <div class="author">
                                                             <div class="btn-group">
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                                    <i class="material-icons">remove</i> </button>
                                                                <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                            </div>
                                                        </div>
                                                        <div class="stats">
                                                            <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs">
                                                                <strong> Añadir </strong>
                                                                <i class="material-icons" >add_shopping_cart</i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                                <div class="card-image">
                                                    <div class="ribbon ribbon-top-right ">
                                                        <span><strong> 30% DTO. </strong></span>
                                                    </div>
                                                    <a href="#pablo">
                                                    <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                                    <img class="imgcard" src="/img/secondary/a671X671.png" />
                                                    </a>
                                                </div>

                                                <div class="card-content">
                                                    <h4 class="card-title text-center">
                                                        <a href="#pablo">5 Common dos Startup</a>
                                                    </h4>
                                                    <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                        Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                                    </p>
                                                    <div class="footer">
                                                        <div class="author">
                                                             <div class="btn-group">
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                                    <i class="material-icons">remove</i> </button>
                                                                <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                                <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                            </div>
                                                        </div>
                                                        <div class="stats">
                                                            <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs">
                                                                <strong> Añadir </strong>
                                                                <i class="material-icons" >add_shopping_cart</i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="title text-center">Almuerzo del día</h4>
                                    <ul class="list-unstyled">
                                        <li><b>Entrada:</b> Products</li>
                                        <hr class="linea">
                                        <li><b>Sopa:</b> Collections</li>
                                        <hr class="linea">
                                        <li><b>Segundo:</b> Influencers</li>
                                        <hr class="linea">
                                        <li><b>Postre:</b> Likes</li>
                                    </ul>
                                    <h4 class="title">Descripción</h4>
                                    <p class="description text-justify">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                                    <h4 class="title">Focus</h4>
                                    <div class="text-center">
                                        <button class="btn btn-round btn-rose ">
                                            <strong> Añadir</strong>
                                            <i class="material-icons" >add_shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  connections" id="varios">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="col-md-4">
                                        <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                            <div class="card-image">
                                                <div class="ribbon ribbon-top-right ">
                                                    <span><strong> 30% DTO. </strong></span>
                                                </div>
                                                <a href="#pablo">
                                                <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                                <img class="imgcard" src="/img/secondary/a671X671.png" />
                                                </a>
                                            </div>

                                            <div class="card-content">
                                                <h4 class="card-title text-center">
                                                    <a href="#pablo">5 Common dos Startup</a>
                                                </h4>
                                                <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                    Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                                </p>
                                                <div class="footer" >
                                                    <div class="author">
                                                         <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                                <i class="material-icons">remove</i> </button>
                                                            <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                            <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                        </div>
                                                    </div>
                                                    <div class="stats">
                                                        <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs">
                                                                <strong> Añadir </strong>
                                                                <i class="material-icons" >add_shopping_cart</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-blog shadow" style="background-color: #f2f2f2;">

                                            <div class="card-image">
                                                <div class="ribbon ribbon-top-right ">
                                                    <span><strong> 30% DTO. </strong></span>
                                                </div>
                                                <a href="#pablo">
                                                <label class="cardprecio label label-primary" > Bs. <strong>50.00</strong> </label>
                                                <img class="imgcard" src="/img/secondary/a671X671.png" />
                                                </a>
                                            </div>

                                            <div class="card-content">
                                                <h4 class="card-title text-center">
                                                    <a href="#pablo">5 Common dos Startup</a>
                                                </h4>
                                                <p class="card-description text-justify" style="margin-bottom: 0px;">
                                                    Don't be scared of the truth because we need to restart   Owens’ bed design but the back issss...
                                                </p>
                                                <div class="footer" >
                                                    <div class="author">
                                                         <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;">
                                                                <i class="material-icons">remove</i> </button>
                                                            <button class="btn btn-round btn-danger btn-xs" style="padding: 4px 8px !important;" ><span style="line-height: 1.7;"><strong> 3 </strong></span></button>
                                                            <button class="btn btn-round btn-rose btn-xs" style="padding: 4px 8px !important;"> <i class="material-icons">add</i> </button>
                                                        </div>
                                                    </div>
                                                    <div class="stats">
                                                        <div class="btn-group">
                                                            <button class="btn btn-round btn-rose btn-xs">
                                                                <strong> Añadir </strong>
                                                                <i class="material-icons" >add_shopping_cart</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">
                                SERVICIOS
                            </a>
                        </li>
                        <li>
                            <a href="/#about">
                               NOSOTROS
                            </a>
                        </li>
                        <li>
                            <a href="/#guia">
                               GUIA
                            </a>
                        </li>
                        <li>
                            <a href="/#ventajas">
                                VENTAJAS
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                     {{ date('Y') }} &copy; Create By <i class="fa fa-android" aria-hidden="true"></i> Mentrax
                </div>
            </div>
        </footer>
    </div>
</body>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('assets/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/nouislider.min.js') }}" ></script>
    <script src="{{ asset('assets/bootstrap-datetimepicker.js') }}" ></script>
</html>
