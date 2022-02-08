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