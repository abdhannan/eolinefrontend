<?php
include 'header.php';
?>


<section id="jumbo-blue">
    <h3 class="header-text text-center cwhite">Daftar eoline</h3>
    <div class="underline-header-white"></div>
    <p class="fhel cwhite text-big fw300 text-center">Isi form dibawah untuk membuat akun baru</p>

    <div class="row" id="alert-wrapper">
        <div class="col-sm-12 col-sm-offset-6">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close no-shadow" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Oops !</strong> your username or password are mismatch, please try again.
            </div>
        </div>
    </div>

    <!--    <div class="signup-step-wrapper clearfix">
            <div class="first-step current-step">
                <p class="text-center"><img draggable="false" src="{{Asset('images/ic_personal_account@2x.png')}}" alt="personal account"></p>
                <p class="text-center nomarg">Set up personal account</p>
            </div>
            <div class="second-step">
                <p class="text-center"><img draggable="false" src="{{Asset('images/ic_find_colleague@2x.png')}}" alt="personal account"></p>
                <p class="text-center nomarg">Find colleague</p>
            </div>
        </div>-->
</section>



<section id="form-content">
    <div class="container">
        <div class="row" id="form-sign-in-wrapper">
            <div class="col-sm-10 col-sm-offset-7">
                <form>
                    <div class="margbot10 white-pane" >
                        <div class="input-wrapper margbot20">
                            <label class="margbot10  fw300 ">Username</label>
                            <input required type="text" name="username" class="input-stretch">
                        </div>
                        <div class="input-wrapper margbot20">
                            <label class="margbot10  fw300 ">Email</label>
                            <input required type="email" name="email" class="input-stretch">
                        </div>
                        <div class="input-wrapper margbot20">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="margbot10  fw300 ">Password</label>
                                    <input required type="password" name="password" class="input-stretch">
                                </div>
                                <div class="col-xs-12">
                                    <label class="margbot10  fw300 ">Ulangi password</label>
                                    <input required type="password" name="password-again" class="input-stretch">
                                </div>
                            </div>
                        </div>
                        <label class=" margbot30 word-straight fw400 fhel"><input required type="checkbox" name="agreement" class="margr10"> Saya setuju dengan <a class="fmont" href="#">kebijakan</a> & <a class="fmont" href="#">hak</a> yang berlaku</label>
                        <button class="button btnaccent btn-wide wide-h-47 small-shadow" type="submit">daftar gratis</button>
                    </div>
                </form>


                <p class="text-center  fw300">Sudah punya akun ? <a href="#" class="caccent fw500">Login</a> 
            </div>
        </div>
    </div>
</section>



<?php
include 'footer.php';
?>