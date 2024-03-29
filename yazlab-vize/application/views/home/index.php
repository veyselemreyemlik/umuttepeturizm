<!-- hero section -->
    <section class="hero-section">

        <div class="container" id="hero-cont">
            <div class="row" id="hero-row">
                <div class="col-12" id="hero-col">
                    <h1 class="hero-h1">Umuttepe Turizme Hoşgeldiniz </h1>

                    <form class="home-search" action="<?php  echo base_url() ?>gallery.php">

                        <div class="form-row">
                            <i class="fa-solid fa-bus " style="color: #909090;"></i>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereden</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereye</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="ui calendar" id="date-1">
                            <div class="ui input left icon">
                                <i class="calendar icon"></i>
                                <input type="text" class="calender-text" placeholder="Gidiş Tarihi" required>
                            </div>
                        </div>

                        <div id="donusTarihDiv" style="display:none;">
                            <div class="ui calendar" id="date-2">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" class="calender-text" placeholder="Geliş Tarihi" required>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="donusCheckbox" name="donusCheckbox">
                        <label for="donusCheckbox">
                            <i>Dönüş Bileti Almak İstiyorum</i>
                        </label>

                        <script>
                        // JavaScript ile dönüş tarih input'unun görünürlüğünü kontrol etme
                        document.getElementById('donusCheckbox').addEventListener('change', function() {
                            var donusTarihDiv = document.getElementById('donusTarihDiv');
                            donusTarihDiv.style.display = this.checked ? 'block' : 'none';
                            if (!this.checked) {
                                document.getElementById('tarihDonus').value = ''; // Dönüş tarihini sıfırla
                            }
                        });
                        </script>




                        <div class="submit-search">
                            <button id="submit-main-btn" class="submit" onclick="window.location.href = 'gallery.php';">
                                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                <span class="hide-text-mobile">Arama</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>



    
    