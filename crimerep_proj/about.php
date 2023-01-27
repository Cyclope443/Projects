<?php include('home.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    <div >
        <h1 align="center" style="font-family:Trebuchet MS;">About Us</h1>
        <div align="center">
            <img src="images/infoprofile.png" style="height:80px;width:80px" alt="profile"><br>
            <h4><u>Developed and Designed by Ninad Shingare</u></h4>

            <p class="mx-5">
            The Online Crime Reporting System is an application that covers complete case management system and this project will help in managing all activities of the police station. It can used to report crimes and manage all the activities in a police station using computers by tracking all the details of complaints, most wanted criminal, police station, etc. Currently, most tasks are done manually, but by computerizing all the activities inside a police station the working systems can be managed easily and effectively. The modules involved in this project are: Login for user and admin, complaint registration, view complaint status, criminal register management, case history details management, manage the list about most wanted criminals, latest news regarding crime in the city, Safety tips for individuals, especially for women and also for vendors. This project is helpful in the Automation of police station records, including complaints, criminal records, Admin, User and Police Station Management System, etc.
            </p>
        </div>

        <div align="center">
            <h4>Contact our Headquaters :</h4>
        </div>
        <p><div class="mx-1" id="googleMap" style="height:400px;width:100%;"></div></p>
        <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzZvGe04AhzBgjDvTjqmrslNMCChtOmWA">
</script>
<script>
    var myCenter = new google.maps.LatLng(16.00307217340581, 73.68965493976305);
    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom:12,
            scrollwheel:true,
            draggable:true,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
			map: map
        });
    }
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
    </div>
</body>
</html>
<?php include('footer.php') ?>