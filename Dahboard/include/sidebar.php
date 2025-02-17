<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASPS Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css" />
    <!--  font awesome -->
    <link rel="stylesheet" href="css/all.min.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Dasbord -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3 page-title">LI Guard </div>
            </a>
            <hr class="sidebar-divider my-0">

            <!--  Dashboard -->
            <li class="nav-item <?=$current == 'index'? 'active':''?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>

            <!-- Admin -->
            <li class="nav-item <?=$current == 'Admin'? 'active':''?>">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" href="#">
                    <i class="fa-solid fa-user"></i>
                    <span>Admins</span>
                </a>
                <div id="collapseTwo" class="collapse <?=$current == 'Admin'? 'show':''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Admin'?'active':''?>" href="Admin.php">Display</a>

                        <a class="collapse-item <?=isset($_GET['add'])== 'Admin'?'active':''?>" href="Admin.php?add=Admin"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- end Admin -->

            <!-- User -->
            <li class="nav-item <?=$current == 'User'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-user"></i>
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse <?=$current == 'User'?'show':''?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'User'?'active':''?>" href="User.php">Display</a>

                        <a class="collapse-item <?=isset($_GET['add'])== 'User'?'active':''?>" href="User.php?add=User"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End User -->

            <!-- Visitor -->
            <li class="nav-item <?=$current == 'Visitor'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fa-solid fa-user"></i>
                    <span>Visitors</span>
                </a>
                <div id="collapseUtilities2" class="collapse <?=$current == 'Visitor'?'show':''?>" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Visitor'?'active':''?>" href="Visitor.php">Display</a>

                        <a class="collapse-item <?=isset($_GET['add'])== 'Visitor'?'active':''?>" href="Visitor.php?add=Visitor"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End Visitor -->

            <!-- Rooms  --->
            <li class="nav-item <?=$current == 'Places'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">
                    <i class="fas fa-tags"></i>
                    <span>Rooms</span>
                </a>
                <div id="collapseUtilities3" class="collapse <?=$current == 'Places'?'show':''?>" aria-labelledby="headingUtilities3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Places'?'active':''?>" href="Place.php">Display</a>
                        <a class="collapse-item <?=isset($_GET['add'])== 'Places'?'active':''?>" href="Place.php?add=Places"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End Rooms  --->

            <!-- Post -->
            <li class="nav-item <?=$current == 'Post'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities4">
                    <i class="fa-solid fa-pencil"></i>
                    <span>Posts</span>
                </a>
                <div id="collapseUtilities4" class="collapse <?=$current == 'Post'?'show':''?>" aria-labelledby="headingUtilities4" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Post'?'active':''?>" href="Post.php">Display</a>
                        <a class="collapse-item <?=isset($_GET['add'])== 'Post'?'active':''?>" href="Post.php?add=Post"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End Post -->

            <!-- Messsage -->
            <li class="nav-item <?=$current == 'Message'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities5" aria-expanded="true" aria-controls="collapseUtilities5">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Message</span>
                </a>
                <div id="collapseUtilities5" class="collapse <?=$current == 'Message'?'show':''?>" aria-labelledby="headingUtilities5" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Mes'?'active':''?>" href="Message.php">Display</a>
                        <a class="collapse-item <?=isset($_GET['add'])== 'Messsage'?'active':''?>" href="Message.php?add=Mes"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End Messsage -->

            <!-- Tasks -->
            <li class="nav-item <?=$current == 'Task'? 'active':''?>">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities6" aria-expanded="true" aria-controls="collapseUtilities6">
                    <i class="fas fa-tasks"></i>
                    <span>Task</span>
                </a>
                <div id="collapseUtilities6" class="collapse <?=$current == 'Task'?'show':''?>" aria-labelledby="headingUtilities6" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item <?=!isset($_GET['add'])== 'Task'?'active':''?>" href="Task.php">Display</a>
                        <a class="collapse-item <?=isset($_GET['add'])== 'Task'?'active':''?>" href="Task.php?add=task"><span style="font-weight:bold">+</span>Add</a>
                    </div>
                </div>
            </li>
            <!-- End Tasks -->
            <li class="nav-item">
                <a class="nav-link" href="Attendance.php">
                    <i class="fa-solid fa-eye"></i>
                    <span>Attendence</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
