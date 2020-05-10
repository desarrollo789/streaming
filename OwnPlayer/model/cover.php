<?php
include '/opt/lampp/htdocs/WebSites/streaming/OwnPlayer/model/conection.php';
// $conection = establish();
    function loadconnection () {
        // include '/opt/lampp/htdocs/WebSites/OwnPlayer/model/conection.php';
        $conection = establish();
        return $conection;
    }
    function loadcover ($parameter) {
        // include '/opt/lampp/htdocs/WebSites/OwnPlayer/model/conection.php';
        $conection = establish();
        // $conection = loadconnection();
        // $parameter = 'Seiken no Blacksmith';
        $consult="SELECT `path` FROM `cover` WHERE `name` = '$parameter'";
        $result = mysqli_query( $conection, $consult ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($colum = mysqli_fetch_array( $result ))
        {
            // echo "<td>" . $colum['name'] . "</td><td>" . $colum['path'] . "</td>";
            echo $colum['path'];
        }
        return false;
    }

    function loadtitle ($parameter) {
        // include '/opt/lampp/htdocs/WebSites/OwnPlayer/model/conection.php';
        $conection = establish();
        // $conection = loadconnection();
        // $parameter = 'Seiken no Blacksmith';
        $consult="SELECT `path` FROM `title` WHERE `name` = '$parameter'";
        $result = mysqli_query( $conection, $consult ) or die ( "Algo ha ido mal en la consulta a la base de datos");      
        while ($colum = mysqli_fetch_array( $result ))
        {
            // echo "<td>" . $colum['name'] . "</td><td>" . $colum['path'] . "</td>";
            echo $colum['path'];
        }
        return false;
    }
    
    function Loadredirecturl ($parameter) {
        $conection = establish();
        $consult="SELECT `path` FROM `redirecturl` WHERE `name` = '$parameter'";
        $result = mysqli_query( $conection, $consult ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($colum = mysqli_fetch_array( $result ))
        {
            // echo "<td>" . $colum['name'] . "</td><td>" . $colum['path'] . "</td>";
            return $colum['path'];
        }
        return false;
    }
