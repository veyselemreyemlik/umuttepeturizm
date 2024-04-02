<br><br>
<br><br>
<br><br>
<br><br>
<section class="service-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2">
                <div class="card ">
                    <div class="card-header">
                        <i class="fas fa-user"></i> Müşteri Kaydı
                    </div>
                    <div class="card-body">
                        <form action="http://www.umutbus.tr.ht/login/register" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="text" name="name" class="form-control" required=""
                                            placeholder="Ad Soyad" value="">
                                        <small class="text-danger pl-3"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="email" class="form-control" required=""
                                                placeholder="Email" value="">
                                            <small class="text-danger pl-3"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="tel" id="phone" name="phone" class="form-control" required=""
                                                placeholder="Telefon Numarası" value="">
                                            <small class="text-danger pl-3"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Adres</label>
                                <div class="form-label-group">
                                    <textarea class="form-control" name="address"></textarea>
                                    <p class="text-danger pl-3"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="username" name="username" class="form-control" required=""
                                        placeholder="Kullanıcı adı">
                                    <small class="text-danger pl-3"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password1"
                                        placeholder="Şifre">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="password2"
                                        placeholder="Şifreyi Tekrar Gir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="occupation">Meslek</label>
                                <select class="form-control" id="occupation" name="occupation">
                                    <option value="Emekli">Emekli</option>
                                    <option value="Öğrenci">Öğrenci</option>
                                    <option value="Memur">Memur</option>
                                    <option value="Gazi/Şehit Yakını">Gazi/Şehit Yakını</option>
                                    <!-- Diğer meslekler eklenebilir -->
                                </select>
                            </div>
                            <small class="text-danger pl-3"></small>
                            <button type="submit" class="btn btn-info btn-block" onclick="submitForm()">Kayıt
                                Ol</button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <p>Zaten Hesabım var? <a class="" href="<?php echo base_url() ?>home/login">Giriş Yap</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function submitForm() {
        // Formun gönderilmesini sağla
        document.querySelector('form').submit();
        // Yönlendirme yap
        window.location.href = "registerislem.php";
    }
</script>