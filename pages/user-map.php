<?php
include_once 'header.php';
include 'locations_model.php';
//get_unconfirmed_locations();exit;
?>
<link rel="stylesheet" type="text/css" href="../css/style.css" />


<header>
    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn_icon_header">
            <!-- Esse é meio que o link pro html pro icon quando a tela ta menor (o hamburguinho), tem na bootstrap e ta em SVG-->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="logo_header">
            <!-- Esse é um logo qualquer q eu achei na internet, pode substituir-->
            <img src="../images/logo.png" id="logo_img" alt="LOGO DO SITE" />
        </div>
        <div class="navigation_header" id="navigation_header">
            <!-- esse é o icon de "X" pra quando a tela esta menor e com o sidebar-->
            <button onclick="toggleSidebar()" class="btn_icon_header">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
            <a href="../index.html">Início</a>
            <a href="#" class="btn_login">Login</a>
            <a href="#">Reportar</a>
            <a href="../pages/ajudar.html">Ajudar</a>
            <a href="../index.html#section-about-us">Sobre</a>
            <a href="#perguntas-frequentes">Dúvidas</a>
        </div>
    </div>
</header>


<main class="container">
    <section class="section-report">
        <div class="section-title">Maps</div>
        <div class="section-report--maps-content" id="section-report--maps-content"></div>

        <div class="section-report--buttons">
            <a>Sei lá</a>
            <a href="admin-map.php">Mapa ADM</a>
            <a>Sei lá</a>
        </div>

        <div class="section-title">Instruções</div>
        <div class="section-report--instructions">
            <div class="instruction"></div>
            <div class="instruction"></div>
            <div class="instruction"></div>
            <div class="instruction"></div>
        </div>
    </section>
</main>


<div class="modal-container" id="modal-container">
    <div class="forms-container">
        <div class="forms">
            <!-- Modal recuperar senha -->
            <div class="recuperar-senha form-content">
                <span id="fechar-modal">X</span>
                <h1 class="modal-title">Recuperar senha</h1>

                <form action="#" class="form">
                    <div class="input-field">
                        <label for="name">Digite seu e-mail</label>
                        <input type="text" id="name" placeholder="Insira seu nome" required />
                    </div>

                    <div class="input-field">
                        <label for="password">Digite sua senha</label>

                        <div class="password-box">
                            <input type="password" id="password" class="password" placeholder="Insira sua senha" required />
                            <div class="eye-icon">
                                <img src="../images/low-vision-regular-24.png" alt="Ocultar senha" />
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <label for="password">Confirme sua senha</label>

                        <div class="password-box">
                            <input type="password" id="password" class="password" placeholder="Insira sua senha" required />
                            <div class="eye-icon">
                                <img src="../images/low-vision-regular-24.png" alt="Ocultar senha" />
                            </div>
                        </div>
                    </div>

                    <button type="submit">Enviar</button>
                </form>
                <button type="submit" class="voltar-login">Voltar</button>
            </div>

            <!-- Modal login -->
            <div class="login form-content">
                <span id="fechar-modal">X</span>
                <h1 class="modal-title">Login</h1>

                <form action="#" class="form">
                    <div class="input-field">
                        <label for="name">Digite seu nome ou e-mail</label>
                        <input type="text" id="name" placeholder="Insira seu nome" required />
                    </div>

                    <div class="input-field">
                        <label for="password">Digite sua senha</label>

                        <div class="password-box">
                            <input type="password" id="password" class="password" placeholder="Insira sua senha" required />
                            <div class="eye-icon">
                                <img src="../images/low-vision-regular-24.png" alt="Ocultar senha" />
                            </div>
                        </div>
                    </div>

                    <div class="rec-senha">
                        <a href="#" class="recuper-senha">Esqueceu sua senha?</a>
                    </div>

                    <button type="submit">Login</button>

                    <div class="social-login">
                        <span class="social-title">Ou entre com</span>
                        <a href="#" class="social-icon">
                            <img src="../images/google-logo.png" alt="" />
                        </a>
                    </div>
                </form>

                <div class="wave"></div>
                <div class="cadastrar">
                    <p>Não é cadastrado?</p>
                    <button type="submit" class="btn_cadastro">Cadastre-se</button>
                </div>
            </div>

            <!-- Modal Cadastro -->

            <div class="cadastro form-content">
                <span id="fechar-modal">X</span>
                <h1 class="modal-title">Cadastro</h1>

                <form action="#" class="form">
                    <div class="input-field">
                        <label for="name">Digite seu e-mail</label>
                        <input type="email" id="name" placeholder="Insira seu e-mail" required />
                    </div>

                    <div class="input-field">
                        <label for="password">Digite sua senha</label>

                        <div class="password-box">
                            <input type="password" id="password" class="password" placeholder="Insira sua senha" required />
                            <div class="eye-icon">
                                <img src="../images/low-vision-regular-24.png" alt="Ocultar senha" />
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <label for="password">Confirme sua senha</label>

                        <div class="password-box">
                            <input type="password" id="password" class="password" placeholder="Confirme sua senha" required />
                            <div class="eye-icon">
                                <img src="../images/low-vision-regular-24.png" alt="Ocultar senha" />
                            </div>
                        </div>
                    </div>

                    <button type="submit">Cadastrar</button>

                    <div class="social-login">
                        <span class="social-title">Ou cadastre-se com</span>
                        <a href="#" class="social-icon">
                            <img src="../images/google-logo.png" alt="" />
                        </a>
                    </div>
                </form>

                <div class="wave"></div>
                <div class="cadastrar">
                    <p>Já tem uma conta?</p>
                    <button type="submit" class="btn_login" id="btn_login">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../js/openCloseModal.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyC5zF6nkI_qAIcQd1wZtIrs6ZqO223pefE">
</script>


<script>
    /**
     * Create new map
     */
    var infowindow;
    var map;
    var red_icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
    var purple_icon = 'http://maps.google.com/mapfiles/ms/icons/purple-dot.png';
    var locations = <?php get_confirmed_locations() ?>;
    var myOptions = {
        zoom: 11,
        center: new google.maps.LatLng(-23.535390674493122, -46.61896511943053),
        mapTypeId: 'roadmap'
    };
    map = new google.maps.Map(document.getElementById('section-report--maps-content'), myOptions);

    /**
     * Global marker object that holds all markers.
     * @type {Object.<string, google.maps.LatLng>}
     */
    var markers = {};

    /**
     * Concatenates given lat and lng with an underscore and returns it.
     * This id will be used as a key of marker to cache the marker in markers object.
     * @param {!number} lat Latitude.
     * @param {!number} lng Longitude.
     * @return {string} Concatenated marker id.
     */
    var getMarkerUniqueId = function(lat, lng) {
        return lat + '_' + lng;
    };

    /**
     * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
     * This function can be useful for getting new coordinates quickly.
     * @param {!number} lat Latitude.
     * @param {!number} lng Longitude.
     * @return {google.maps.LatLng} An instance of google.maps.LatLng object
     */
    var getLatLng = function(lat, lng) {
        return new google.maps.LatLng(lat, lng);
    };

    /**
     * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
     */
    var addMarker = google.maps.event.addListener(map, 'click', function(e) {
        var lat = e.latLng.lat(); // lat of clicked point
        var lng = e.latLng.lng(); // lng of clicked point
        var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
        var marker = new google.maps.Marker({
            position: getLatLng(lat, lng),
            map: map,
            animation: google.maps.Animation.DROP,
            id: 'marker_' + markerId,
            html: "    <div id='info_" + markerId + "'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Description:</a></td>\n" +
                "                <td><textarea  id='manual_description' placeholder='Description'></textarea></td></tr>\n" +
                "            <tr><td></td><td><input type='button' value='Save' onclick='saveData(" + lat + "," + lng + ")'/></td></tr>\n" +
                "        </table>\n" +
                "    </div>"

        });
        markers[markerId] = marker; // cache marker in markers object
        bindMarkerEvents(marker); // bind right click event to marker
        bindMarkerinfo(marker); // bind infowindow with click event to marker
    });

    /**
     * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
     * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
     */
    var bindMarkerinfo = function(marker) {
        google.maps.event.addListener(marker, "click", function(point) {
            var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
            var marker = markers[markerId]; // find marker
            infowindow = new google.maps.InfoWindow();
            infowindow.setContent(marker.html);
            infowindow.open(map, marker);
            // removeMarker(marker, markerId); // remove it
        });
    };

    /**
     * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
     * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
     */
    var bindMarkerEvents = function(marker) {
        google.maps.event.addListener(marker, "rightclick", function(point) {
            var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
            var marker = markers[markerId]; // find marker
            removeMarker(marker, markerId); // remove it
        });
    };

    /**
     * Removes given marker from map.
     * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
     * @param {!string} markerId Id of marker.
     */
    var removeMarker = function(marker, markerId) {
        marker.setMap(null); // set markers setMap to null to remove it from map
        delete markers[markerId]; // delete marker instance from markers object
    };


    /**
     * loop through (Mysql) dynamic locations to add markers to map.
     */
    var i;
    var confirmed = 0;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: locations[i][4] === '1' ? red_icon : purple_icon,
            html: "<div>\n" +
                "<table class=\"map1\">\n" +
                "<tr>\n" +
                "<td><a>Description:</a></td>\n" +
                "<td><textarea disabled id='manual_description' placeholder='Description'>" + locations[i][3] + "</textarea></td></tr>\n" +
                "</table>\n" +
                "</div>"
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow = new google.maps.InfoWindow();
                confirmed = locations[i][4] === '1' ? 'checked' : 0;
                $("#confirmed").prop(confirmed, locations[i][4]);
                $("#id").val(locations[i][0]);
                $("#description").val(locations[i][3]);
                $("#form").show();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    /**
     * SAVE save marker from map.
     * @param lat  A latitude of marker.
     * @param lng A longitude of marker.
     */
    function saveData(lat, lng) {
        var description = document.getElementById('manual_description').value;
        var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' + lng;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200 && data.length > 1) {
                var markerId = getMarkerUniqueId(lat, lng); // get marker id by using clicked point's coordinate
                var manual_marker = markers[markerId]; // find marker
                manual_marker.setIcon(purple_icon);
                infowindow.close();
                infowindow.setContent("<div style=' color: purple; font-size: 25px;'> Obrigado pelo reporte, estaremos validando a localização em breve!!</div>");
                infowindow.open(map, manual_marker);

            } else {
                console.log(responseCode);
                console.log(data);
                infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }
</script>





<?php
include_once 'footer.php';

?>