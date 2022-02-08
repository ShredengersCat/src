<h1>Details about the conference</h1>
<p>
    <div class="row">
    <?php 
        $row = $data->fetch();
        print '<div class = col>'
        .'Conference name: '.$row['Title'].'<br>'
        .'Conference date: '.$row['Date'].'<br>'
        .'Location: '.$row['Country']       
        .'</div>'
    ?>
    <div class="col">
    <div id = "map"></div>   
    </div>
    </div>
</p>
<script>
    var lat_pos = <?= $row['Latitude'] ?>;
    var lng_pos = <?= $row['Longitude'] ?>;
    function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: { lat: lat_pos, lng: lng_pos },
    }
    );

    var mapCenter = new google.maps.LatLng(lat_pos, lng_pos);
    
    new google.maps.Marker({
        position: mapCenter,
        title: 'Mark title',
        map: map
    });
    map.setCenter(mapCenter);
}
</script>
<!-- <script src="../../js/app.js"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOtSYBAN7uka06h86BddnYXOP75nETFwM&libraries=places&callback=initMap&solution_channel=GMP_codelabs_simplestorelocator_v1_a">
</script>

