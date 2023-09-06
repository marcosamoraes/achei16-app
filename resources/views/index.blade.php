@extends('layouts.app')

@section('title', 'Ribeirão Preto - Restaurante, hotel, bares, lojas, oficina, som e muito mais...')

@section('content')
    <main>
        <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-10">
                            <h1>Guia de empresa na sua cidade</h1>
                            <p>Seu anúncio visível</p>
                            <form method="post" action="grid-listing-filterscol.html">
								<div class="row g-0 custom-search-input">
									<div class="col-lg-4">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="O que está procurando?">
											<i class="icon_search"></i>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<input class="form-control" type="text" id="autocomplete" placeholder="Endereço, bairro, cidade...">
											<i class="icon_pin_alt"></i>
										</div>
									</div>
									<div class="col-lg-3 custom_select">
										<select class="wide">
											<option>Categorias</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
										</select>
									</div>
									<div class="col-lg-2">
										<input type="submit" value="Buscar">
									</div>
								</div>
								<!-- /row -->
							</form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /hero_single -->

        <div class="container margin_60_40">
            <div class="main_title">
                <span><em></em></span>
                <h2>Últimas empresas</h2>
            </div>

            <div class="owl-carousel owl-theme carousel_4">
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_1.jpg" class="owl-lazy"
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="owl-lazy"
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_3.jpg" class="owl-lazy"
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_4.jpg" class="owl-lazy"
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_5.jpg" class="owl-lazy"
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_6.jpg" class="owl-lazy"
                                alt="">
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
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="img/lazy-placeholder.png" data-src="img/location_7.jpg" class="owl-lazy"
                                alt="">
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
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>Categorias</h2>
                </div>
                <!-- /main_title -->
                <div class="owl-carousel owl-theme categories_carousel">
                    @foreach ($categories as $category)
                    <div class="item">
                        <a href="/empresas?cat={{ $category->id }}">
                            <span>{{ $category->companies_count }}</span>
                            <h3 style="max-height: 20px">{{ $category->name }}</h3>
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- /carousel -->
            </div>

            <div class="container margin_60_40">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="banner lazy" data-bg="url(img/banner_bg_desktop.jpg)">
                            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
                                {{-- banner divulgação --}}
                            </div>
                            <!-- /wrapper -->
                        </div>
                        <!-- /banner -->
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="banner lazy" data-bg="url(img/banner_bg_desktop.jpg)">
                            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
                                {{-- banner divulgação --}}
                            </div>
                            <!-- /wrapper -->
                        </div>
                        <!-- /banner -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="main_title version_2">
                            <span><em></em></span>
                            <h2>Destaques</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Italian</em>
                                        <h3>La Monnalisa</h3>
                                        <small>8 Patriot Square E2 9NF</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Italian</em>
                                        <h3>La Monnalisa</h3>
                                        <small>8 Patriot Square E2 9NF</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_2.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Mexican</em>
                                        <h3>Alliance</h3>
                                        <small>27 Old Gloucester St, 4563</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_3.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Sushi - Japanese</em>
                                        <h3>Sushi Gold</h3>
                                        <small>Old Shire Ln EN9 3RX</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_4.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Vegetarian</em>
                                        <h3>Mr. Pepper</h3>
                                        <small>27 Old Gloucester St, 4563</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Italian</em>
                                        <h3>La Monnalisa</h3>
                                        <small>8 Patriot Square E2 9NF</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_5.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Chinese</em>
                                        <h3>Dragon Tower</h3>
                                        <small>22 Hertsmere Rd E14 4ED</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="detail-restaurant.html">
                                        <figure>
                                            <img src="img/location_list_placeholder.png" data-src="img/location_list_6.jpg" alt="" class="lazy">
                                        </figure>
                                        <em>Pizza - Italian</em>
                                        <h3>Bella Napoli</h3>
                                        <small>135 Newtownards Road BT4</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /container -->

            <div class="call_section lazy" data-bg="url(img/bg_call_section.jpg)">
                <div class="container clearfix">
                    <div class="col-lg-5 col-md-6 float-end wow">
                        <div class="box_1">
                            <h3>Quer anunciar sua empresa com a gente?</h3>
                            <p>Se junte a nós para aumentar sua visibilidade na internet.</p>
                            <a href="submit-restaurant.html" class="btn_1">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/call_section-->
        </div>
        <!-- /bg_gray -->
    </main>
@endsection

@push('scripts')
    <!-- SPECIFIC CSS -->
    <link href="css/home.css" rel="stylesheet">
@endpush
