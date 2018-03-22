<style>
    .fake-shadow {
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }
    .fileUpload {
        position: relative;
        overflow: hidden;
    }
    .fileUpload #logo-id {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 33px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .img-preview {
        max-width: 100%;
        max-height: 400px
    }
</style>
<body onload="abuwa()">
    <form>
        <div class="container" onclick="abuwa()">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title" onclick="loadProvince()">
                            <a data-toggle="collapse" href="#collapse1"  onclick="abuwa()">1. Advertisement Board Details</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="abid">Advertisement Board ID</label>
                                        <input type="text" class="form-control" id="abid"  onkeypress="abuwa();">
                                    </div>
                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis" onclick="test()">Select Province</label>
                                        <select class="form-control" id="cb_province" onchange="loadDistrict(this.value)" onclick="loadProvince()">

                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Select District</label>
                                        <select class="form-control" id="cb_district" disabled onchange="loadDsd(this.value)">
                                            <option>Please Select Province</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Select DS Division</label>
                                        <select class="form-control" id="cb_dsd" disabled>
                                            <option>Please Select Province</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Select Local Authority</label>
                                        <select class="form-control" id="cb_la" disabled>
                                            <option>Please Select DS Division</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Select Ward</label>
                                        <select class="form-control" id="cb_ward" disabled>
                                            <option>Please Select Local Authority</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Select GN Division</label>
                                        <select class="form-control" id="cb_gn" disabled>
                                            <option>Please Select Ward</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Property Type</label>
                                        <select class="form-control" id="cb_propType" disabled>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="dis">Property Name</label>
                                        <select class="form-control" id="cb_property" disabled>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <label for="dis">Is Exists within Property?</label><br>
                                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                </div>
                                <div class="col-sm-4">
                                    &nbsp;
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <input type="hidden" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="abid">Length</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="abid">Width</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="abid">LA License Reference No</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="abid">Date of Expiry</label>
                                        <input type="date" class="form-control" id="abid">
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>



            </div>




            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse11">2. Add Location &AMP; Image</a>
                        </h4>
                    </div>

                    <div id="collapse11" class="panel-collapse collapse">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div id="map" style="width:100%;height:600px;background:none"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-danger" onclick="getCurentLocationOnButton()">Set Auto Location</button>
                                            <button class="btn btn-success" onclick="setPositions()">Set Manual Location</button>
                                            <button class="btn btn-success" onclick="alert('ela')">Set Manual Location11</button>
                                        </div>
                                        <div class="col-sm-12">
                                            <br>

                                            <div class="form-group">
                                                <label for="abid">Latitude</label>
                                                <input type="text" class="form-control" id="lat" disabled>
                                            </div>


                                            <div class="form-group">
                                                <label for="abid">Longitude</label>
                                                <input type="text" class="form-control" id="lan" disabled>
                                            </div>

                                        </div>
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <div class="main-img-preview">
                                                    <img class="thumbnail img-preview" src="images/no_image_startup.png" title="Preview Logo">
                                                </div>
                                                <div class="input-group">
                                                    <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                                                    <div class="input-group-btn">
                                                        <div class="fileUpload btn btn-info fake-shadow">
                                                            <span><i class="glyphicon glyphicon-upload"></i> Add Image </span>
                                                            <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12">


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse113">3. Add Owner Details</a>
                        </h4>
                    </div>

                    <div id="collapse113" class="panel-collapse collapse">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="abid">Advertisement Board Owner</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="abid">Advertisement Board Owner's Contact No</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="abid">Property Owner</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="abid">Property Owner's Contact No</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="abid">Date Paid</label>
                                        <input type="date" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="abid">Receipt No</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="abid">Amount</label>
                                        <input type="text" class="form-control" id="abid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <button type="submit" class="btn btn-warning">Upload</button>
            </div>
        </div>
    </form>
</body>

<script>



    $(document).ready(function () {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function () {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function () {
            readURL(this);
        });
    });

</script>

<!--For Load Combobox-->

<script>

    function test() {
        alert("hiiiiiii");
    }

    function abuwa() {
        alert("ebunaaaaaa");
    }

    function  loadProvince() {
       // alert("Hiiiiiiiiiiiiiii");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                alert(res);
                if (res != "Error") {

                    document.getElementById('cb_province').innerHTML = this.responseText;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=Province&subType=none", true);
        xhttp.send();

    }

    function loadDistrict(x) {

//            alert(x);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                    alert(res);
                if (res != "Error") {

                    document.getElementById('cb_district').innerHTML = this.responseText;
                    document.getElementById('cb_district').disabled = false;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=District&subType=" + x, true);
        xhttp.send();

    }
    function loadDsd(x) {

//            alert(x);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                    alert(res);
                if (res != "Error") {

                    document.getElementById('cb_dsd').innerHTML = this.responseText;
                    document.getElementById('cb_dsd').disabled = false;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=DS&subType=" + x, true);
        xhttp.send();

    }
    function loadLA(x) {

//            alert(x);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                    alert(res);
                if (res != "Error") {

                    document.getElementById('cb_la').innerHTML = this.responseText;
                    document.getElementById('cb_la').disabled = false;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=LA&subType=" + x, true);
        xhttp.send();

    }
    function loadWard(x) {

//            alert(x);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                    alert(res);
                if (res != "Error") {

                    document.getElementById('cb_ward').innerHTML = this.responseText;
                    document.getElementById('cb_ward').disabled = false;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=Ward&subType=" + x, true);
        xhttp.send();

    }
    function loadGN(x) {

//            alert(x);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var res = this.responseText;
//                    alert(res);
                if (res != "Error") {

                    document.getElementById('cb_gn').innerHTML = this.responseText;
                    document.getElementById('cb_gn').disabled = false;

                }

            }
        };
        xhttp.open("GET", "../controllers/co_loadCombo.php?type=gn&subType=" + x, true);
        xhttp.send();

    }

</script>
<!--For Load Combobox End-->

<!--For Map-->

<script>
    var marker;
    var map;
    var lati;
    var lang;

    function initMap() {

        loadProvince();

        var myLatLng = {lat: 6.928510, lng: 79.849775};
        var marker1 = {lat: 6.927975, lng: 79.849004};
        var marker2 = new google.maps.LatLng(lati, lang);

        getCurentLocation();
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: marker1
        });





    }


    function setPositions() {
//                alert("awaaa " + marker.getPosition());
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

//                alert("awaaa " + lat + " " + lng);

        document.getElementById('lat').value = lat;
        document.getElementById('lan').value = lng;

    }



    function getCurentLocation() {



        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }

    }
    function getCurentLocationOnButton() {
alert("okkkkkkkkkkkkkkk");
        marker.setMap(null);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }

    }

    function showPosition(position) {

        loadProvince();

        alert("awaaa");
        document.getElementById('lat').value = position.coords.latitude;
        document.getElementById('lan').value = position.coords.longitude;

        lati = position.coords.latitude;
        lang = position.coords.longitude;



        var latlng = new google.maps.LatLng(parseFloat(position.coords.latitude), parseFloat(position.coords.longitude));

        map.setCenter(latlng);



        var position = new google.maps.LatLng(lati, lang);

        marker = new google.maps.Marker({
            position: position,
            map: map,
            draggable: true,
            title: 'Hello World!'

        });



    }


</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrnlhh3B-3abn-WIBIZTD3cBbnXbMcbZY&callback=initMap">
</script>

<!--Map End-->