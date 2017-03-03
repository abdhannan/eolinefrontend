<?php
include 'header.php';
?>






<section id="hero-image" class="margbot30">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div id="main-slide" class="item active">
                <img src="images/jumbo2@2x.png" alt="slider">
                <div class="carousel-caption">
                    <h2 class="text-center margbot20">Buat, Atur Acara Anda Dengan Mudah dan Gratis.</h2>
                    <p class="text-center fhel fz18 fw100 margbot30">Kemudahan menyelenggarakan acara dan menjual tiket acara anda ada disini.</p>

                    <div class="row margbot30">
                        <div class="col-xs-24">
                            <div class="white-pane">
                                <div class="row input-daterange">
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
                                        <select name="date-held" class="input-stretch">
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
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="special-event" class="margbot30">
    <div class="container">
        <!--        <h4 class="header-text text-center">Cari acara</h4>
                <div class="underline-header-center margrlauto"></div>
        
                <div class="row margbot30">
                    <div class="col-xs-20 col-xs-offset-2">
                        <div class="white-pane">
                            <div class="row input-daterange">
                                <div class="col-xs-10">
                                    <input type="text" name="check-in" class="input-stretch datepicker" placeholder="nama acara">
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" name="check-out" class="input-stretch datepicker" placeholder="lokasi">
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" name="check-out" class="input-stretch datepicker" placeholder="tanggal">
                                </div>
                                <div class="col-xs-4">
                                    <button id="btn-submit-book" type="button" class="button btnaccent btn-wide small-shadow">Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

        <h4 class="header-text text-left">Acara spesial yang akan datang</h4>
        <div class="underline-header"></div>

        <div class="row" id="content-hot-deals-main">
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
                             style="background-image: url('images/jumbo1@2x.png');">

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
                             style="background-image: url('images/jumbo1@2x.png');">

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
                             style="background-image: url('images/jumbo1@2x.png');">

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
</section>

<section id="category-event" class="margbot30">
    <div class="container">
        <h4 class="header-text text-left">Acara berdasarkan kategori</h4>
        <div class="underline-header"></div>

        <div class="row">
            <div class="col-xs-8">
                <div class="service-thumbs">
                    <div class="caption-service-wrapper">
                        <div class="caption-service">
                            <h4 class="header-caption">Olahraga</h4>
                            <p class="desc-caption">Sehat itu penting !</p>
                        </div>
                    </div>

                    <img draggable="false" src="images/fitness@2x.png" class="img-responsive">
                </div> 
            </div>
            <div class="col-xs-8">
                <div class="service-thumbs">
                    <div class="caption-service-wrapper">
                        <div class="caption-service">
                            <h4 class="header-caption">Olahraga</h4>
                            <p class="desc-caption">Sehat itu penting !</p>
                        </div>
                    </div>

                    <img draggable="false" src="images/fitness@2x.png" class="img-responsive">
                </div> 
            </div>
            <div class="col-xs-8">
                <div class="service-thumbs">
                    <div class="caption-service-wrapper">
                        <div class="caption-service">
                            <h4 class="header-caption">Olahraga</h4>
                            <p class="desc-caption">Sehat itu penting !</p>
                        </div>
                    </div>

                    <img draggable="false" src="images/fitness@2x.png" class="img-responsive">
                </div> 
            </div>
        </div>
        <p class="text-center margbot20">
            <a href="#"><button type="button" class="button btnhollow dark">lihat semua</button></a>
        </p>
    </div>
</section>

<!--
<section id="fitur">
    <div class="container">
        <h4 class="header-text text-left">Fitur Eoline</h4>
        <div class="underline-header"></div>
            <p class="fhel cgrey fw300 nomarg">Eoline memiliki banyak fitur untuk kemudahan manajemen acara</p>
            
            <div class="col-md-6">
                <img src="images/fitness@2x.png" class="img-responsiv">
            </div>

            
    </div>
</section>

-->





<section>
    <div class="bcaccent text-center padd20">
        <h2 class="fhel cblack fw300 margbot30">Buat acara anda sekarang ! </h2>
        <p class="text-center"><a href="#" class="button btnblack btn-mid">daftar</a></p>
    </div>
</section>


<script src="{{Asset('js/home.js')}}"></script>


<?php
include 'footer.php';
?>