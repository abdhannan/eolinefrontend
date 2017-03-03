<?php
include 'header.php';
?>




<section class="container" id="login-content">
    <div class="row">

        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close no-shadow" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Oops !</strong> your username or password are mismatch, please try again.
                </div>
            </div>
        </div>
        
        
        <div class="col-sm-8 col-sm-offset-8 col-xs-18 col-xs-offset-3">
            <div id="form-login">
                <h3 class="header-text text-center">Masuk ke eoline.</h3>
                <div class="underline-header-center"></div>
                <form method="GET">
                    <div class="input-wrapper margbot20">
                        <label class="margbot10  fw300 ">Email</label>
                        <input required type="text" name="email" class="input-stretch">
                    </div>
                    <div class="input-wrapper margbot30">
                        <label class="margbot10  fw300 ">Password</label>
                        <label class="pull-right hoverpointer  fw300 " id="forgot-trigger">Lupa password ?</label>
                        <input required type="password" name="password" class="input-stretch">
                    </div>
                    <button class="text-uppercase btn-wide button btnaccent wide-h-47 margbot20 small-shadow" type="submit">login </button>
                </form>
                <p class="text-center  fw300">Belum punya akun ? <a href="{{url('daftar')}}" class="caccent fw500">Daftar.</a> 
            </div>
        </div>

        <div id="form-forgot" class="none-usual">
            <h3 class="text-center margbot20 fw300">Lupa password anda ?</h3>
            <p class="text-center cgrey fw300 fhel">Kami akan mengirim pesan email anda yang berisi link untuk reset password akun anda</p>
            <hr>
            <div class="col-sm-8 col-sm-offset-8 col-xs-18 col-xs-offset-3">
                <label class="hoverpointer  fw300 margbot20" id="login-trigger"><span class="glyphicon glyphicon-arrow-left"></span> kembali</label>
                <form method="GET">
                    <div class="input-wrapper margbot20">
                        <label class="margbot10  fw300">Email</label>
                        <input required type="text" name="email-forgot" class="input-stretch">
                    </div>
                    <button class="text-uppercase button btn-wide btnaccent wide-h-47 margbot20 small-shadow" type="submit">ingatkan saya</button>
                </form>
            </div>
        </div>
    </div>
</section>






<?php
include 'footer.php';
?>