<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Callum Jones</title>

    <link rel="stylesheet" type="text/css" href="css/CallumJonesStyle.css">

</head>


<body>

<div id="mySidenav" class="sidenav">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>



<div class="content">
    <div class="container" onclick="toggleNav(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

</div>



<script>
    var showNav = false;
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function toggleNav(x) {
        x.classList.toggle("change");
        showNav = !showNav;

        if (showNav){
            openNav();
        }
        else if(!showNav){
            closeNav();
        }
    }
</script>
</body>
</html>