@extends('layouts.app')

@section('title', 'Ribeirão Preto - Restaurante, hotel, bares, lojas, oficina, som e muito mais...')

@section('content')
    <main>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Início</a></li>
                                <li>Empresas</li>
                            </ul>
                        </div>
                        <h1>145 empresas</h1>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="O que está procurando?">
                            <input type="submit" value="Busca">
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /page_header -->
        <div class="container margin_30_40">
            <div class="row">
                <aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
                        <div class="filter_type">
                            <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categorias</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">Categoria 1 <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 2 <small>24</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 3 <small>23</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 4 <small>11</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 5 <small>18</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 6 <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Categoria 7 <small>15</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                        <div class="buttons">
                            <a href="#0" class="btn_1 full-width">Filtrar</a>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_1.jpg" class="img-fluid lazy"
                                        alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Pizza</small>
                                        <div class="item_title">
                                            <h3>Da Alfredo</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="img-fluid lazy"
                                        alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Burghers</small>
                                        <div class="item_title">
                                            <h3>Best Burghers</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_3.jpg" class="img-fluid lazy"
                                        alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Vegetarian</small>
                                        <div class="item_title">
                                            <h3>Vego Life</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_4.jpg" class="img-fluid lazy"
                                        alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Japanese</small>
                                        <div class="item_title">
                                            <h3>Sushi Temple</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_5.jpg" class="img-fluid lazy"
                                        alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Pizza</small>
                                        <div class="item_title">
                                            <h3>Auto Pizza</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_6.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Burghers</small>
                                        <div class="item_title">
                                            <h3>Alliance</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_7.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Chinese</small>
                                        <div class="item_title">
                                            <h3>Alliance</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_8.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Sushi</small>
                                        <div class="item_title">
                                            <h3>Dragon Tower</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_9.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Mexican</small>
                                        <div class="item_title">
                                            <h3>El Paso Tacos</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_10.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Bakery</small>
                                        <div class="item_title">
                                            <h3>Monnalisa</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_11.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Mexican</small>
                                        <div class="item_title">
                                            <h3>Guachamole</h3>
                                            <small>135 Newtownards Road</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="strip">
                                <figure>
                                    <img src="img/lazy-placeholder.png" data-src="img/location_12.jpg"
                                        class="img-fluid lazy" alt="">
                                    <a href="/empresa/1" class="strip_info">
                                        <small>Chinese</small>
                                        <div class="item_title">
                                            <h3>Pechino Express</h3>
                                            <small>27 Old Gloucester St</small>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!-- /strip grid -->
                    </div>
                    <!-- /row -->
                    <div class="pagination_fg">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /container -->
    </main>
@endsection

@push('scripts')
    <!-- SPECIFIC CSS -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_listing.js"></script>
@endpush
