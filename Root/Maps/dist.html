<html>
<head runat="server">
    <title></title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyAEynXiS9jou9sHpqTh0YPNWYLGQmuHXYM"></script>
    <script type="text/javascript">
        function GetRoute() {
            var markers = new Array();
            var myLatLng;
            //Find the current location of the user.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (p) {
                    var myLatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
                    var m = {};
                    m.title = "My location";
                    m.lat = p.coords.latitude;
                    m.lng = p.coords.longitude;
                    markers.push(m);
 
                    //Find specified address location.
                    var address = document.getElementById("txtAddress").value;
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({ 'address': address }, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            m = {};
                            m.title = address;
                            m.lat = results[0].geometry.location.lat();
                            m.lng = results[0].geometry.location.lng();
                            markers.push(m);
                            var mapOptions = { center: myLatLng, zoom: 4, mapTypeId: google.maps.MapTypeId.ROADMAP };
                            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                            var infoWindow = new google.maps.InfoWindow();
                            var lat_lng = new Array();
                            var latlngbounds = new google.maps.LatLngBounds();
 
                            for (i = 0; i < markers.length; i++) {
                                var data = markers[i];
                                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                                lat_lng.push(myLatlng);
                                var marker = new google.maps.Marker({ position: myLatlng, map: map, title: data.title });
                                latlngbounds.extend(marker.position);
                                (function (marker, data) {
                                    google.maps.event.addListener(marker, "click", function (e) {
                                        infoWindow.setContent(data.title);
                                        infoWindow.open(map, marker);
                                    });
                                })(marker, data);
                            }
                            map.setCenter(latlngbounds.getCenter());
                            map.fitBounds(latlngbounds);
 
                            //***********ROUTING****************//
 
                            //Initialize the Path Array.
                            var path = new google.maps.MVCArray();
 
                            //Initialize the Direction Service.
                            var service = new google.maps.DirectionsService();
 
                            //Set the Path Stroke Color.
                            var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });
 
                            //Loop and Draw Path Route between the Points on MAP.
                            for (var i = 0; i < lat_lng.length; i++) {
                                if ((i + 1) < lat_lng.length) {
                                    var src = lat_lng[i];
                                    var des = lat_lng[i + 1];
                                    path.push(src);
                                    poly.setPath(path);
                                    service.route({
                                        origin: src,
                                        destination: des,
                                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                                    }, function (result, status) {
                                        if (status == google.maps.DirectionsStatus.OK) {
                                            for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                                                path.push(result.routes[0].overview_path[i]);
                                            }
                                            document.getElementById("dvDistanceDuration").innerHTML = "Distance: " + result.routes[0].legs[0].distance.text + "<br/>Duration: " + result.routes[0].legs[0].duration.text;
                                        } else {
                                            //If the location specified is invalid, show error.
                                            alert("Invalid location for plotting route.");
                                            window.location.href = window.location.href;
                                        }
                                    });
                                }
                            }
                        } else {
                            alert("Request failed.")
                        }
                    });
 
                });
            }
            else {
                alert('Geo Location feature is not supported in this browser.');
                return;
            }
        }
    </script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <input type="text" id="txtAddress" value="Kurunegala" style="width: 200px" />
        <br />
        <input type="button" value="Get Route" onclick="GetRoute()" />
        <hr />
        <div id="dvMap" style="width: 500px; height: 500px">
        </div>
        <div id="dvDistanceDuration">
        </div>
    </div>
    </form>
</body>
</html>