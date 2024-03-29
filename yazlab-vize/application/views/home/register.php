
    <br><br>
    <section class="vh-100" style="margin-top:100px">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://www.pngall.com/wp-content/uploads/2016/05/Bus-PNG-File.png" class="img-fluid"
                        alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="./registerislem.php" method="post">


                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Kayıt Ol</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Email" name="email" />


                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Şifre" name="parola" />

                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="form3Example3" class="form-control form-control-lg"
                                placeholder="TC/Pasaport numarası" min="0" max="100000000000" name="TCno" />

                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Telefon numarası" min="0" max="100000000000" name="Telno" />

                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="İsim" name="isim" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Soyisim" name="soyisim" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Doğum Yılı" min="1920" max="2024" name="dogum" />

                        </div>

                        <div class="form-outline mb-4">
                            <select class="form-control form-control-lg aria-label=" Default select example" name="cinsiyet" >
                                <option selected value="belirsiz">Cinsiyet Seçiniz</option>
                                <option value="erkek">Erkek</option>
                                <option value="kadın">Kadın</option>
                                
                            </select>
                        </div>
                        <div class="form-outline mb-4">
                            <select class="form-control form-control-lg aria-label=" Default select example" name="meslek" >
                                <option selected value="diger">Meslek Seçiniz</option>
                                <option value="memur">Memur</option>
                                <option value="ogrenci">Öğrenci</option>
                                <option value="emekli">Ememkli</option>
                                <option value="asker">Askeri Personel</option>
                                <option value="diger">Diğer</option>
                            </select>
                        </div>


                        <!-- Password input -->




                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" name="kayitol"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" > kayıt </button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Hesabın var mı? <a href="./login.php"
                                    class="link-danger">Giriş Yap</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </section>

   