
        <footer id="main-footer">
            <div class="container  fhel">
                <div class="row row-info">
                    <div class="col-sm-9">
                        <h4 class="margbot30 head-row fw300 fmont">Cara pemakaian</h4>

                        <ul class="no-bullets list-menu">
                            <li><a class="text-default" href="#">Workflow eoline</a></li>
                            <li><a class="text-default" href="#">Cara membuat acara</a></li>
                            <li><a class="text-default" href="#">Cara membuat organisasi</a></li>
                            <li><a class="text-default" href="#">Cara menjual tiket</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <h4 class="margbot30 head-row fw300 fmont">Siapa kami</h4>

                        <ul class="no-bullets list-menu">
                            <li><a class="text-default" href="#">Tentang kami</a></li>
                            <li><a class="text-default" href="#">Beri feedback</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <h4 class="margbot30 head-row fw300 fmont">Informasi</h4>

                        <ul class="no-bullets list-menu">
                            <li><a class="text-default" href="#">Hubungi kami</a></li>
                            <li><a class="text-default" href="#">Hak & Kebijakan</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <h4 class="margbot30 head-row fw300 fmont">Akun</h4>

                        <ul class="no-bullets list-menu">
                            @if(Auth::check())
                            <li><a class="text-default" href="#">Acara anda</a></li>
                            <li><a class="text-default" href="#">Profil</a></li>
                            <li><a class="text-default" href="#">Buat acara</a></li>
                            <li><a class="text-default" href="#">Keluar</a></li>
                            @else
                            <li><a class="text-default" href="{{url('masuk')}}">Masuk</a></li>
                            <li><a class="text-default" href="{{url('daftar')}}">Daftar gratis</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="footer-mark">
                    <p class="copyright">Copyright 2016 Eoline, Allright reserved</p>
                </div>
            </div>
        </footer>
        

        <script src="lib/js/jquery-1.11.3.min.js"></script>
        <script src="lib/js/bootstrap.min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/header-footer-site.js"></script>
        <script src="js/bootstrap-imageupload.min.js"></script>
        <script src="js/login.js"></script>
        <script src="js/signup.js"></script>
        <script src="js/active-menu.js"></script>
        <script src="js/bx-call.js"></script>
        <script src="js/img-upload.js"></script>
        <script src="js/canvasjs.min.js"></script>

    </body>
</html>