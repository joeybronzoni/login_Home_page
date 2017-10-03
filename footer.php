
 <div id="data">
        <h4>Here is your geolocation baby: </h4>
    </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
        <script>
        //for geolocation say yes to browser
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position)=>{
                    $("#data").html("latitude: " + position.coords.latitude + "<br>longitude: " + position.coords.longi \
                                    tude);
                });
        };

</script>
</body>
</html>
