@extends('layouts.app')

@section('title', "{$company->name} - {$company->city}/{$company->state} - {$company->categories[0]->name}")

@section('image', env('PAINEL_URL') . "/storage/{$company->image}")

@section('content')
    <main>
        <div class="container margin_detail">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail_page_head clearfix">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Início</a></li>
                                <li><a href="/empresas?cat={{ $company->categories[0]->id }}">{{ $company->categories[0]->name }}</a></li>
                                <li>{{ $company->name }}</li>
                            </ul>
                        </div>
                        <div class="title">
                            <h1>{{ $company->name }} {!! $company->opening_24h ? '- <span class="badge bg-danger">ABERTO 24H</span>' : false !!}</h1>
                            {{ "{$company->city}/{$company->state}" }} - <a
                                href="https://www.google.com/maps/place/{{ $company->fullAddress }}"
                                target="blank">Ver localização</a>
                            <ul class="tags">
                                @foreach ($company->tags as $tag)
                                    <li><a href="#0" class="text-capitalize">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="rating">
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </div> --}}
                    </div>
                    <!-- /detail_page_head -->

                    <div class="owl-carousel owl-theme carousel_1 magnific-gallery">
                        <div class="item">
                            <a href="{{ env('PAINEL_URL') }}/storage/{{ $company->image }}" title="Photo title" data-effect="mfp-zoom-in"><img
                                    src="{{ env('PAINEL_URL') }}/storage/{{ $company->image }}" alt=""></a>
                        </div>
                    </div>
                    <!-- /carousel -->

                    <div class="tabs_detail">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab"
                                    role="tab">Informações</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab"
                                    role="tab">Avaliações</a>
                            </li> --}}
                        </ul>

                        <div class="tab-content" role="tablist">
                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel"
                                aria-labelledby="tab-A">
                                <div class="card-header" role="tab" id="heading-A">
                                    <h5>
                                        <a data-bs-toggle="collapse" href="#collapse-A"
                                            aria-expanded="true" aria-controls="collapse-A">
                                            Informações
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body info_content">
                                        <h2>{{ "{$company->name} em {$company->city}/{$company->state}" }}</h2>
                                        <p>{{ $company->description }}</p>
                                        <div class="add_bottom_45"></div>
                                        <h2>Galeria de Fotos</h2>
                                        <div class="pictures magnific-gallery clearfix">
                                            @foreach ($company->images as $image)
                                                <figure><a href="{{ env('PAINEL_URL') }}/storage/{{ $image }}" title="Photo title"
                                                        data-effect="mfp-zoom-in"><img src="{{ env('PAINEL_URL') }}/storage/{{ $image }}"
                                                            data-src="{{ env('PAINEL_URL') }}/storage/{{ $image }}" class="lazy"
                                                            alt=""></a></figure>
                                            @endforeach
                                        </div>
                                        <!-- /pictures -->

                                        <div class="other_info">
                                            <h2>Entre em contato com a {{ $company->name }}</h2>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>Endereço</h3>
                                                    <p>{{ $company->fullAddress }}<br><a
                                                            href="https://www.google.com/maps/place/{{ $company->fullAddress }}"
                                                            target="blank"><strong>Ver localização</strong></a></p>
                                                    <strong>Nos siga nas redes sociais</strong><br>
                                                    <p class="follow_us_detail">
                                                        @if ($company->facebook)
                                                            <a target="_blank" href="{{ str()->startsWith($company->facebook, 'http') ? $company->facebook : 'https://' . $company->facebook }}">
                                                                <i class="fa-brands fa-square-facebook" style="color: #1877f2"></i>
                                                            </a>
                                                        @endif
                                                        @if ($company->instagram)
                                                            <a target="_blank" href="{{ str()->startsWith($company->instagram, 'http') ? $company->instagram : 'https://' . $company->instagram }}">
                                                                <i class="fa-brands fa-square-instagram" style="color: #c32aa3"></i>
                                                            </a>
                                                        @endif
                                                        @if ($company->youtube)
                                                            <a target="_blank" href="{{ str()->startsWith($company->youtube, 'http') ? $company->youtube : 'https://' . $company->youtube }}">
                                                                <i class="fa-brands fa-square-youtube" style="color: #ff0000"></i>
                                                            </a>
                                                        @endif
                                                        @if ($company->google_my_business)
                                                            <a target="_blank" href="{{ str()->startsWith($company->google_my_business, 'http') ? $company->google_my_business : 'https://' . $company->google_my_business }}">
                                                                <i class="fa-brands fa-google-plus" style="color: #db4437"></i>
                                                            </a>
                                                        @endif
                                                        @if ($company->waze)
                                                            <a target="_blank" href="{{ str()->startsWith($company->waze, 'http') ? $company->waze : 'https://' . $company->waze }}">
                                                                <i class="fa-brands fa-waze" style="color: #0072c6"></i>
                                                            </a>
                                                        @endif
                                                        @if ($company->ifood)
                                                            <a target="_blank" href="{{ str()->startsWith($company->ifood, 'http') ? $company->ifood : 'https://' . $company->ifood }}">
                                                                <img src="/img/ifood.png" height="20" alt="">
                                                            </a>
                                                        @endif
                                                        @if ($company->olx)
                                                            <a target="_blank" href="{{ str()->startsWith($company->olx, 'http') ? $company->olx : 'https://' . $company->olx }}">
                                                                <img src="/img/olx.png" height="20" alt="">
                                                            </a>
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Horário de Funcionamento</h3>
                                                    <p>{{ $company->opening_hours }}</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Métodos de Pagamento</h3>
                                                    <p>{{ $company->payment_methods }}</p>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab -->

                            {{-- <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                <div class="card-header" role="tab" id="heading-B">
                                    <h5>
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B"
                                            aria-expanded="false" aria-controls="collapse-B">
                                            Avaliações
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                    <div class="card-body reviews">
                                        <div class="row add_bottom_45 d-flex align-items-center">
                                            <div class="col-md-3">
                                                <div id="review_summary">
                                                    <strong>8.5</strong>
                                                    <em>Superb</em>
                                                    <small>Based on 4 reviews</small>
                                                </div>
                                            </div>
                                            <div class="col-md-9 reviews_sum_details">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>Food Quality</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 90%" aria-valuenow="90"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                        <h6>Service</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 95%" aria-valuenow="95"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>Location</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 60%" aria-valuenow="60"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                        <h6>Price</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 60%" aria-valuenow="60"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                        </div>

                                        <div id="reviews">
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="/img/avatar4.jpg" alt=""></figure>
                                                        <h5>Lukas</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">8.5<small>/10</small> <strong>Rating
                                                                    average</strong></span>
                                                            <em>Published 54 minutes ago</em>
                                                        </div>
                                                        <h4>"Great Location!!"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod
                                                            scaevola sea. Et nec tantas accusamus salutatus, sit commodo
                                                            veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius
                                                            essent fuisset ut. Viderer petentium cu his. Tollit molestie
                                                            suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i
                                                                        class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not
                                                                        useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i>
                                                                    <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                            <!-- /review_card -->
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="/img/avatar6.jpg" alt=""></figure>
                                                        <h5>Lukas</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">8.5<small>/10</small> <strong>Rating
                                                                    average</strong></span>
                                                            <em>Published 10 Oct. 2019</em>
                                                        </div>
                                                        <h4>"Awesome Experience"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod
                                                            scaevola sea. Et nec tantas accusamus salutatus, sit commodo
                                                            veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius
                                                            essent fuisset ut. Viderer petentium cu his. Tollit molestie
                                                            suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i
                                                                        class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not
                                                                        useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i>
                                                                    <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                            <!-- /review_card -->
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="/img/avatar1.jpg" alt=""></figure>
                                                        <h5>Marika</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">9.0<small>/10</small> <strong>Rating
                                                                    average</strong></span>
                                                            <em>Published 11 Oct. 2019</em>
                                                        </div>
                                                        <h4>"Really great dinner!!"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod
                                                            scaevola sea. Et nec tantas accusamus salutatus, sit commodo
                                                            veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius
                                                            essent fuisset ut. Viderer petentium cu his. Tollit molestie
                                                            suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i
                                                                        class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not
                                                                        useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i>
                                                                    <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                                <div class="row reply">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="/img/avatar.jpg" alt=""></figure>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="review_content">
                                                            <strong>Reply from Foogra</strong>
                                                            <em>Published 3 minutes ago</em>
                                                            <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu
                                                                qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus
                                                                salutatus, sit commodo veritus te, erat legere fabulas has
                                                                ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                                                petentium cu his. Tollit molestie suscipiantur his
                                                                et.<br><br>Thanks</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /reply -->
                                            </div>
                                            <!-- /review_card -->
                                        </div>
                                        <!-- /reviews -->
                                        <div class="text-end"><a href="leave-review.html" class="btn_1">Leave a
                                                review</a></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /tabs_detail -->
                </div>
                <!-- /col -->

                <div class="col-lg-4" id="sidebar_fixed">
                    <div class="box_booking mobile_fixed">
                        <div class="head">
                            <h3>Entre em Contato</h3>
                            <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
                        </div>
                        <!-- /head -->
                        <div class="main">
                            <form method="post" action="{{ route('company.contact', ['company' => $company->slug]) }}" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name"
                                        class="form-control" placeholder="Nome Completo">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email"
                                        class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="whatsapp" id="whatsapp"
                                        class="form-control" placeholder="Celular">
                                </div>
                                <div class="form-group add_bottom_15">
                                    <textarea class="form-control" name="message" id="message" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="btn_1_mobile" style="position: relative;">
                                    <input class="btn_3 full-width" type="submit" value="Enviar mensagem"
                                        id="submit-message">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /box_booking -->
                    <div class="btn_reserve_fixed"><a href="#0" class="btn_3 full-width">Enviar mensagem</a></div>

                    <a href="tel:{{ preg_replace('/\D/', '', $company->phone) }}" class="btn_2 full-width" target="_blank" style="margin-bottom: 20px">
                        <i class="icon_phone"></i>
                        {{ $company->phone }}
                    </a>
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $company->phone2 ?? $company->phone) }}?text=Olá, vim através do Achei16." class="btn_1 full-width" target="_blank" style="margin-bottom: 20px">
                        <i class="fa-brands fa-whatsapp"></i>
                        {{ $company->phone2 ?? $company->phone }}
                    </a>

                    <ul class="share-buttons">
                        <li><a class="fb-share" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"><i class="social_facebook"></i> Compartilhar</a></li>
                        <li><a class="twitter-share" target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode('Confira esta empresa no Achei16: ' . $company->name) }}"><i class="social_twitter"></i> Compartilhar</a></li>
                    </ul>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>
    <!-- /main -->
@endsection

@push('scripts')
    <!-- SPECIFIC CSS -->
    <link href="/css/detail-page.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/411831a5a4.js" crossorigin="anonymous"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="/js/sticky_sidebar.min.js"></script>
    <script src="/js/specific_detail.js"></script>
    <script src="/js/jquery.mask.min.js"></script>
    <script src="/js/custom.js"></script>
    @endpush
