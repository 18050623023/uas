
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>


<?php

//include 'koneksi.php';

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

            $users = mysqli_query($konmy,"SELECT * FROM mhs ");
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

            $userspg = pg_query($konpg,("SELECT * FROM mhs "));
            if(!empty($users)){ $count = 0; foreach($userspg as $userpg){ $count++;?>
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