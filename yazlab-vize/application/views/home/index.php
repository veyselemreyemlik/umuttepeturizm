<!-- hero section -->
<section class="hero-section">
    <div class="container" id="hero-cont">
        <div class="row" id="hero-row">
            <div class="col-12" id="hero-col">
                <h1 class="hero-h1">Umuttepe Turizme Hoşgeldiniz </h1>
                <form class="home-search" action="<?php echo base_url("/home/seferler") ?>" method="get">
                    <i class="fa-solid fa-bus " style="color: #909098;"></i>


                    <div class="form-row">

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                            <option value="" disabled selected hidden> Kalkış </option>
                            <option value="istanbul">İstanbul</option>
                            <option value="bursa">Bursa</option>
                            <option value="kocaeli">Kocaeli</option>
                            <option value="sakarya">Sakarya</option>
                        </select>

                    </div>
                    <div class="form-row">

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                            <option value="" disabled selected hidden> Kalkış </option>
                            <option value="istanbul">İstanbul</option>
                            <option value="bursa">Bursa</option>
                            <option value="kocaeli">Kocaeli</option>
                            <option value="sakarya">Sakarya</option>
                        </select>

                    </div>
                    <input name="Tarih" type="date" required min="<?php echo date('Y-m-d'); ?>">
                    <br><br>
                    <div class="submit-search">
                        <button id="submit-main-btn" class="submit"
                            onclick="window.location.href = '<?php echo base_url() ?>home/bilet';">
                            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                            <span class="hide-text-mobile">Arama</span>
                        </button>
                    </div>
            </div>


            <script>
                // JavaScript ile dönüş tarih input'unun görünürlüğünü kontrol etme
                document.getElementById('donusCheckbox').addEventListener('change', function () {
                    var donusTarihDiv = document.getElementById('donusTarihDiv');
                    donusTarihDiv.style.display = this.checked ? 'block' : 'none';
                    if (!this.checked) {
                        document.getElementById('tarihDonus').value = ''; // Dönüş tarihini sıfırla
                    }
                });
            </script>


        </div>





        </form>
    </div>
    </div>
    </div>
</section>