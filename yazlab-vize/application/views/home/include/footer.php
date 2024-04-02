<!-- Footer -->
<script>
    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: { lat: 41.0082, lng: 28.9784 }

        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function () {
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
            origin: document.getElementById('start').value,
            destination: document.getElementById('end').value,
            travelMode: 'DRIVING'
        }, function (response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClyrDoeEHtaNe7yIp0hHI1H5nlf7MPkjc&callback=initMap">
    </script>
</body>

</html>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row" id="footer-row">
            <div class="col-12 col-lg-4">
                <img class="footer-logo" src="<?php echo base_url() ?>assets/media/logo_acikbeyaz.png"
                    alt="footer-logo">
                <p class="footer-text">Umuttepe Turizm, seyahat deneyiminizi unutulmaz kılmak için burada!
                    Türkiye'nin dört bir yanına sunduğumuz konforlu ve güvenilir otobüs seferleri ile yolculuklarınızı
                    keyifli hale getiriyoruz
            </div>
            <div class="col-12 col-lg-4 ">
                <h6 class="footer-header">
                    Quick Links
                </h6>
                <ul class="footer-links">

                    <li class="list-items"><a class="footer-nav" id="active-nav"
                            href="<?php echo base_url() ?>index.php">Ana
                            Sayfa</a>
                    </li>
                    <li class="list-items"><a class="footer-nav" href="<?php echo base_url() ?>/home/gallery">Bilet
                            Al</a></li>
                    <li class="list-items"><a class="footer-nav"
                            href="<?php echo base_url() ?>/home/about">Hakkımızda</a></li>
                    <li class="list-items"><a class="footer-nav"
                            href="<?php echo base_url() ?>/home/contacts">İletişim</a></li>
                    <li class="list-items"><a class="footer-nav" href="<?php echo base_url() ?>/home/login">Giriş
                            Yap</a></li>
                    <li class="list-items"><a class="footer-nav" href="<?php echo base_url() ?>/home/register">Kayıt
                            Ol</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-4">
                <h6 class="footer-header">
                    Yasal Uyarı
                </h6>
                <p class="footer-link"><a href="./privacy-policy.html">Güvenlik Politikalarımız</a></p>

            </div>
            <div class="col-md-3">
                <div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>

        <!-- copyright -->
        <div class="row" id="copyright-row">
            <div class="col-12" id="copyright-col">
                <p class="copyright-text">
                    Umuttepe Turizm &copy; <span id="year"></span> All Rights Reserved.<br><i> Powered By
                        Veysel Yemlik - Ömer Batın Öztürk</i>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- Back to top button -->
<!--Sayfada aşağıya indikçe sağ altta çıkan buton, sayfanın en üstüne çıkmayı sağlar.-->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>


<!-- JS -->
<script src="<?php echo base_url() ?>assets/js/index.js"></script>


</body>

</html>