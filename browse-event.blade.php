@extends('template.header-footer-site')

@section('title')
{{$page}}
@stop

@section('css-content')
<link rel="stylesheet" href="{{Asset('css/dist/site/browse-event.css')}}" />
@stop

@section('main-section')
<section id="jumbo-section" class="flat-board">
    <h4 class="header-text-white text-center">Telusuri acara</h4>
    <div class="underline-header-white"></div>
    <div class="container">
        <div class="row margbot30">
            <div class="col-xs-18 col-xs-offset-3">
                <div class="white-pane">
                    <div class="row">
                        <div class="col-xs-8">
                            <select class="input-stretch">
                                <option>semua kategori</option>
                                <option>Olahraga</option>
                                <option>musik</option>
                                <option>seminar</option>
                            </select>
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="check-out" class="input-stretch datepicker" placeholder="lokasi">
                        </div>
                        <div class="col-xs-5">
                            <select class="input-stretch">
                                <option>semua tanggal</option>
                                <option>hari ini</option>
                                <option>minggu ini</option>
                                <option>bulan ini</option>
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <button id="btn-submit-book" type="button" class="button btnaccent btn-wide small-shadow">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-event">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="product-listing">
                    <div class="row" id="content-event-each">
                        <div class="col-sm-8">
                            <a href="#">
                                <div class="card-order margbot20">
                                    <div class="header-order" >
                                        <p class="fz18 margbot5 nomarg cdeepgrey">Developer day</p>
                                        <p class="fhel cgrey fw300 nomarg">Perencanaan pelatihan developer.</p>
                                    </div>
                                    <hr class="margbot10 margtop10"> 
                                    <div class="tags-wrapper">
                                        <p class="fhel cgrey nomarg"><span class="tags margr10">#IT</span> <span class="tags margr10">#SurabayaDEV</span></p>
                                    </div>
                                    <div class="image-order-wrapper" 
                                         style="background-image: url('{{Asset('images/jumbo1@2x.png')}}');">

                                        <p class="price-order text-uppercase caccent">free</p>
                                    </div>
                                    <div class="footer-order-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="nomarg cdeepgrey"><span class="glyphicon glyphicon-map-marker"></span> Surabaya</p>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text-right nomarg cdeepgrey"><span class="glyphicon glyphicon-time"></span> 12 nov 2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="#">
                                <div class="card-order margbot20">
                                    <div class="header-order" >
                                        <p class="fz18 margbot5 nomarg cdeepgrey">Developer day</p>
                                        <p class="fhel cgrey fw300 nomarg">Perencanaan pelatihan developer.</p>
                                    </div>
                                    <hr class="margbot10 margtop10"> 
                                    <div class="tags-wrapper">
                                        <p class="fhel cgrey nomarg"><span class="tags margr10">#IT</span> <span class="tags margr10">#SurabayaDEV</span></p>
                                    </div>
                                    <div class="image-order-wrapper" 
                                         style="background-image: url('{{Asset('images/jumbo1@2x.png')}}');">

                                        <p class="price-order text-uppercase caccent">free</p>
                                    </div>
                                    <div class="footer-order-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="nomarg cdeepgrey"><span class="glyphicon glyphicon-map-marker"></span> Surabaya</p>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text-right nomarg cdeepgrey"><span class="glyphicon glyphicon-time"></span> 12 nov 2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <a href="#">
                                <div class="card-order margbot20">
                                    <div class="header-order" >
                                        <p class="fz18 margbot5 nomarg cdeepgrey">Developer day</p>
                                        <p class="fhel cgrey fw300 nomarg">Perencanaan pelatihan developer.</p>
                                    </div>
                                    <hr class="margbot10 margtop10"> 
                                    <div class="tags-wrapper">
                                        <p class="fhel cgrey nomarg"><span class="tags margr10">#IT</span> <span class="tags margr10">#SurabayaDEV</span></p>
                                    </div>
                                    <div class="image-order-wrapper" 
                                         style="background-image: url('{{Asset('images/jumbo1@2x.png')}}');">

                                        <p class="price-order text-uppercase caccent">free</p>
                                    </div>
                                    <div class="footer-order-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="nomarg cdeepgrey"><span class="glyphicon glyphicon-map-marker"></span> Surabaya</p>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text-right nomarg cdeepgrey"><span class="glyphicon glyphicon-time"></span> 12 nov 2016</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@stop


@section('js-content')@stop
