<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//phpinfo();
$konmy = (mysqli_connect("localhost","root", "", "mhs")) ? mysqli_connect("localhost","root", "", "mhs") : null ;

$host = "localhost";
$port = 5432;
$dbname = "mhs";
$user = "hafiz";
$password = 123;
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
//$pg = pg_connect($connection_string);
$konpg = (pg_connect($connection_string)) ? pg_connect($connection_string) : null;
?>
<div class="row">
    <div class="panel panel-default users-content">
        <div class="panel-heading">Database MYSQL</a></div>
        <table class="table">
            <tr>
                <th width="5%">#</th>
                <th width="20%">Name</th>
                <th width="30%">Email</th>
                <th width="20%">Prodi</th>
            </tr>
            <?php
	    //$result = mysqli_query($konmy,"SELECT * FROM mhsMDB");
            $users = mysqli_query($konmy,"SELECT * FROM mhsMDB");//mysqli_fetch_assoc($result);
	    //var_dump($users);
            if(!empty($users)){ $count = 0; foreach($users as $user){ $count++;?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $user['nama']; ?></td>
                <td><?php echo $user['nim']; ?></td>
                <td><?php echo $user['prodi']; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">No user(s) found......</td>
            <?php } ?>
        </table>
    </div>
</div>


<div class="row">
    <div class="panel panel-default users-content">
        <div class="panel-heading">Database MariaDB</a></div>
        <table class="table">
            <tr>
                <th width="5%">#</th>
                <th width="20%">Name</th>
                <th width="30%">NIM</th>
                <th width="20%">Prodi</th>
            </tr>
            <?php

            //$users = mysqli_query($konmy,"SELECT * FROM mhs ");
            if(!empty($users)){ $count = 0; foreach($users as $user){ $count++;?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $user['nama']; ?></td>
                <td><?php echo $user['nim']; ?></td>
                <td><?php echo $user['prodi']; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">No user(s) found......</td>
            <?php } ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="panel panel-default users-content">
        <div class="panel-heading">Database PostgreSQL</a></div>
        <table class="table">
            <tr>
                <th width="5%">#</th>
                <th width="20%">Name</th>
                <th width="30%">NIM</th>
                <th width="20%">Prodi</th>
            </tr>
            <?php
	    $result = pg_query($konpg, "SELECT * FROM mhs");
            $userspg = pg_fetch_all($result);
	    //var_dump($userspg);
            if(!empty($userspg)){ $count = 0; foreach((array)$userspg as $userpg){ $count++;?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $userpg['nama']; ?></td>
                <td><?php echo $userpg['nim']; ?></td>
                <td><?php echo $userpg['prodi']; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">No user(s) found......</td>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>
