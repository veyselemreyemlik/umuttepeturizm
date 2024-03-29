
        <br /><br />
        <section class="rooms-n-suites">
            <div class="container" style="margin-top: 100px">
                <div class="col-12" id="innerPageHeading"></div>
                <!-- Cottage -->
                <div class="row" id="room-row">
                    <div class="col-12 col-lg-6" id="left-room-col">
                        <div id="harita" class="col">
                            <br />
                            <div class="row">
                                <center>
                                    <div class="col-3 offset-2">
                                        <select id="start" class="form-select form-select-sm">
                                            <option value="istanbul">İstanbul</option>
                                            <option value="bursa">Bursa</option>
                                            <option value="kocaeli">Kocaeli</option>
                                            <option value="sakarya">Sakarya</option>
                                        </select>
                                    </div>
                                    <div class="col-3 offset-1">
                                        <select id="end" class="form-select form-select-sm">
                                            <option value="istanbul">İstanbul</option>
                                            <option value="bursa">Bursa</option>
                                            <option value="kocaeli">Kocaeli</option>
                                            <option value="sakarya">Sakarya</option>
                                        </select>
                                    </div>
                                </center>
                            </div>

                            <br />
                            <center>
                                <div style="height: 300px; width: 500px" id="map"></div>
                            </center>

                            <br />
                        </div>
                    
                <br /><br />
                
                <!-- Replace YOUR_API_KEY with your actual Google Maps API key -->
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClyrDoeEHtaNe7yIp0hHI1H5nlf7MPkjc&callback=initMap">
                </script>

                

                <!-- Back to top button -->
                <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
                    <i class="fas fa-arrow-up"></i>
                </button>

                <!-- JS -->
                <script src="<?php  echo base_url() ?>assets/js/index.js"></script>

                <script src="<?php  echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
            </div>
            
        </section>
        <div id="root">
            <div class="container">
                <div class="row">                                        
                    <div class="col-8 py-5">
                        <div>
                            <table class="mx-auto">
                                <tr v-for="idxr, r in rows">
                                    <td v-for="idxc, c in cols" class="pl-2" style="width: 50px">
                                        <svg @click="onSeatSelected(idxr, idxc)" 
                                             v-if="!isAisle(idxr, idxc)" 
                                             id="Layer_1" data-name="Layer 1" 
                                             xmlns="http://www.w3.org/2000/svg" 
                                             viewBox="0 0 100 100">
                                            <path :class="classifier(idxr, idxc)" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/>
                                            <path :class="classifier(idxr, idxc)" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/>
                                            <path :class="classifier(idxr, idxc)" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/>
                                            <path :class="classifier(idxr, idxc)" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/>
                                            <path :class="classifier(idxr, idxc)" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/>
                                        </svg>
                                    </td>
                                </tr>                                
                            </table>                          
                        </div>
                    </div>
                    <div class="col-4 pt-3">
                        <div class="card" v-show="selectedSeat != null" style="display: none">
                            <div class="card-header">
                                Properties
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li @click="changeSeatStatus('RA')" class="list-group-item" :class="seatStatus('RA')">                                                                                
                                        <div class="float-left bg-white" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-ra" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-ra" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-ra" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-ra" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-ra" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                            
                                        </div>                                        
                                        <span class="px-3">Available</span>                                        
                                    </li>
                                    <li @click="changeSeatStatus('RB')" class="list-group-item" :class="seatStatus('RB')">
                                        <div class="float-left" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-rb" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-rb" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-rb" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-rb" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-rb" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                        
                                        </div>
                                        <span class="px-3">Booked</span>                                        
                                    </li>
                                    <li @click="changeSeatStatus('FA')" class="list-group-item" :class="seatStatus('FA')">                                                                                
                                        <div class="float-left" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-fa" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-fa" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-fa" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-fa" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-fa" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                        
                                        </div>
                                        <span class="px-3">Reserve for Female</span>
                                    </li>
                                    <li @click="changeSeatStatus('FB')" class="list-group-item" :class="seatStatus('FB')">                                                                                
                                        <div class="float-left" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-fb" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-fb" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-fb" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-fb" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-fb" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                        
                                        </div>
                                        <span class="px-3">Reserve for Female - Booked</span>                                        
                                    </li>
                                    <li @click="changeSeatStatus('MA')" class="list-group-item" :class="seatStatus('MA')">                                                                                
                                        <div class="float-left" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-ma" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-ma" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-ma" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-ma" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-ma" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                        
                                        </div>
                                        <span class="px-3">Reserve for Male</span>
                                    </li>
                                    <li @click="changeSeatStatus('MB')" class="list-group-item" :class="seatStatus('MB')">                                                                                
                                        <div class="float-left" style="width: 25px;">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path class="cls-mb" d="M36,17.3H80.4a8.88,8.88,0,0,1,6.72-7.25A5.77,5.77,0,0,0,81.57,6H36a5.72,5.72,0,0,0-5.76,5.66A5.71,5.71,0,0,0,36,17.3Z"/><path class="cls-mb" d="M80.29,82.79H36A5.66,5.66,0,1,0,36,94.1H81.47a6.13,6.13,0,0,0,5.44-3.41A8.77,8.77,0,0,1,80.29,82.79Z"/><path class="cls-mb" d="M80.08,79.7V20.5H35.92A8.85,8.85,0,0,1,27.17,13h-18a4,4,0,0,0-4.06,4V82.79a4,4,0,0,0,4.06,3.95H27.28a8.65,8.65,0,0,1,8.75-7Z"/><path class="cls-mb" d="M89.15,12.93a5.71,5.71,0,0,0-5.76,5.65V82.15a5.76,5.76,0,0,0,11.52,0V18.58A5.71,5.71,0,0,0,89.15,12.93Z"/><path class="cls-mb" d="M90.21,9.94a8.93,8.93,0,0,0-8.74-7H36a8.94,8.94,0,0,0-8.75,6.93H9.15A7.22,7.22,0,0,0,2,17V82.79a7.06,7.06,0,0,0,7.15,7h18a8.85,8.85,0,0,0,8.75,7.26H81.47A8.91,8.91,0,0,0,90,90.9a8.81,8.81,0,0,0,8-8.75V18.58A8.84,8.84,0,0,0,90.21,9.94ZM36,6H81.57a5.77,5.77,0,0,1,5.55,4.06A8.88,8.88,0,0,0,80.4,17.3H36a5.71,5.71,0,0,1-5.76-5.65A5.72,5.72,0,0,1,36,6ZM27.28,86.74H9.15a4,4,0,0,1-4.06-3.95V17a4,4,0,0,1,4.06-4h18a8.85,8.85,0,0,0,8.75,7.47H80.08V79.7H36A8.65,8.65,0,0,0,27.28,86.74ZM81.47,94.1H36a5.66,5.66,0,1,1,0-11.31H80.29a8.77,8.77,0,0,0,6.62,7.9A6.13,6.13,0,0,1,81.47,94.1ZM94.91,82.15a5.76,5.76,0,0,1-11.52,0V18.58a5.76,5.76,0,0,1,11.52,0Z"/></svg>                                        
                                        </div>
                                        <span class="px-3">Reserve for Male - Booked</span>                                        
                                    </li>                                    
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">            
            let app = new Vue({
                el: "#root",
                data: {
                    errors: [],
                    o: [],            
                    selectedSeat: null,                    
                    rows: 5,
                    cols: 12,                    
                    seats: [],                    
                },
                computed: {                    
                },
                methods:
                {
                    getSeat(r, c) {
                        for(let i = 0; i < this.seats.length; ++i) {
                            if(this.seats[i].position.r == r && this.seats[i].position.c == c) {
                                return this.seats[i];                                
                            }
                        }
                        return null;
                    },
                    generateSeats() {
                        for(let y = 1; y <= this.rows; ++y){
                            for(let x = 1; x <= this.cols; ++x) {
                                if(!this.isAisle(y, x)) {
                                    this.seats.push({
                                        position: {r: y, c: x},                                        
                                        status: "RA",
                                    });
                                }                                
                            }
                        }
                    },
                    classifier(r, c){
                        let seat = this.getSeat(r,c);
                        if(seat != null){
                            if(this.selectedSeat != seat) {
                                switch(seat.status) {
                                    case 'RA':
                                        return 'cls-ra';
                                    case 'RB':
                                        return 'cls-rb';                                    
                                    case 'FA':
                                        return 'cls-fa';                                    
                                    case 'FB':
                                        return 'cls-fb';
                                    case 'MA':
                                        return 'cls-ma';
                                    case 'MB':
                                        return 'cls-mb';
                                    default:                                                                        
                                        return 'cls-ra';                                                                    
                                }
                            } else {
                                return 'cls-selected';
                            }
                        }                        
                    },
                    isAisle(r, c) {
                        if(r == 3){
                            if(c >= 1 && c <= 11) {
                                return true;
                            }
                        }
                        return false;
                    },
                    onSeatSelected(r,c) {   
                        if(this.selectedSeat == this.getSeat(r, c)) {
                            this.selectedSeat = null;
                        } else {
                            this.selectedSeat = this.getSeat(r, c);                            
                        }
                    },                    
                    seatStatus(status){
                        if(this.selectedSeat != null) {
                            if(this.selectedSeat.status == status)
                            return 'active';
                        }
                        return '';
                    },
                    changeSeatStatus(status) {                        
                        if(this.selectedSeat != null) {                            
                            for(let i = 0; i < this.seats.length; ++i) {
                                if(this.seats[i].position.r == this.selectedSeat.position.r && this.seats[i].position.c == this.selectedSeat.position.c) {
                                    this.seats[i].status = status;
                                    this.selectedSeat = null;
                                    break;
                                }
                            }                                                
                        }
                    },
                },
                beforeMount() {                    
                },
                mounted() {
                    this.generateSeats();
                }
            });
        </script>
        