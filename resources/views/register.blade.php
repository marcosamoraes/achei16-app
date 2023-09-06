@extends('layouts.app')

@section('title', 'Ribeirão Preto - Restaurante, hotel, bares, lojas, oficina, som e muito mais...')

@section('content')
	<main class="bg_gray pattern">
        <div class="container margin_60_40 margin_mobile" style="position: relative; padding-top: 100px">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="box_booking_2">
                        <div class="head">
                            <div class="title">
                                <h3>Cadastre sua empresa</h3>
                            </div>
                        </div>
                        <!-- /head -->
                        <div class="main">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nome Completo">
                                <i class="icon_pencil"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail">
                                <i class="icon_mail"></i>
                            </div>
                            <div class="form-group add_bottom_15">
                                <input class="form-control" placeholder="Celular">
                                <i class="icon_phone"></i>
                            </div>
                            <a href="confirm.html" class="btn_1 full-width mb_5">Cadastrar</a>
                        </div>
                    </div>
                    <!-- /box_booking -->
                </div>
                <!-- /col -->

            </div>
            <!-- /row -->
        </div>
    </main>
@endsection

@push('scripts')
    <!-- SPECIFIC CSS -->
    <link href="css/booking-sign_up.css" rel="stylesheet">
@endpush
