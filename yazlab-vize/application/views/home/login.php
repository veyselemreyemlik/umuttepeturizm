
    <br><br>
    <section class="vh-100" style="margin-top:100px">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://kirkayaksurucukursu.com/wp-content/uploads/2023/01/gaziantep-kirkayak-surucu-kursu-otobus-araclarimiz-gaziantep-otobus-ehliyet-gaziantep-d1-ehliyet-gaziantep-d-sinifi-ehliyet-gaziantep-d-ehliyeti-hangi-araclari-kullanir.png"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="./loginislem.php">


                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Giriş Yap</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg"
                                placeholder="Email" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="Şifre" />

                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;">

                                <?php if (@$_GET["durum"] == "no") { ?>
                                <div class="alert bg-danger" id="successAlert">
                                    <b style="color:aliceblue">Kullanıcı adı veya şifre yanlış</b>
                                </div>

                                <script>
                                setTimeout(function() {
                                    document.getElementById("successAlert").style.display = "none";
                                }, 2000); // 3 saniye sonra mesaj kutusunu gizle
                                </script>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->

                            <a href="#!" class="text-body">Şifremi Unuttum?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" class="btn btn-primary btn-lg" value="Giriş Yap"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Hesabın yok mu? <a href="./register.php"
                                    class="link-danger">Kayıt Ol</a></p>
                        </div>

                    </form>


                </div>

            </div>
        </div>
        </div>


    </section>