<?php
    if(isset($_GET['add']) == 'Admin'){
        $_SESSION['token'] = bin2hex(random_bytes(32));
        $_SESSION['token_expire'] = time() + 3600 ;
        if(isset($_GET['add']) == 'Admin'){
            $role = 0;
        }
    }else{
        header("location: ../Admin.php");
    }
    
?>

<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h2 class="h4 text-gray-900 mb-4">Create New User</h2>
            </div>

            <form action="Users/add.php" method="post" class="user" enctype="multipart/form-data" >
            <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="token" value="<?=$_SESSION['token']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Enter User Name..." name="username" id="username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" placeholder="Enter Password..." name="password" id="password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Enter Phone..." name="phone" id="phone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Password" name="role" value="<?= $role == 0? 'User':''?>" readonly>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control form-control-user" placeholder="Enter image..." name="img[]" id="image" multiple> 
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" onclick="valid()">ADD</button>
            </form>
            <hr>
            <div class='alert alert-danger' role='alert' id="error"></div>
        </div>
    </div>
</div>


