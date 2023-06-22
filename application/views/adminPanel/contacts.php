<?php $this->load->view('adminPanel/adHead.php'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <?php
        $this->load->view('adminPanel/menu.php');

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Create New User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <div class="col-lg-12">
                            <!-- <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Property </h5>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url('AdminPanel/save_homeSlider') ?>" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Perpus</label>
                                                        <input type="text" name="perps" class="form-control" id="exampleInputEmail1" placeholder="Enter type ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Photo</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="pho" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Type</label>
                                                        <input type="text" name="type" class="form-control" id="exampleInputEmail1" placeholder="Enter type ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Price</label>
                                                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Headline</label>
                                                        <input type="text" name="hdline" class="form-control" id="" placeholder="Enter Headline ">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input type="text" name="adrs" class="form-control" id="" placeholder="Enter Address ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Size</label>
                                                        <input type="text" name="size" class="form-control" id="" placeholder="Enter Size ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Bed</label>
                                                        <input type="text" name="bed" class="form-control" id="" placeholder="Enter Bed ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Bath</label>
                                                        <input type="text" name="bath" class="form-control" id="" placeholder="Enter Bath ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Action</label>
                                                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <!-- <div class="card-footer">

                                        </div>
                                    </form>
                                </div>
                            </div>  -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Property list</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $i = 0;

                                        foreach ($con_lst as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo ++$i ?></td>
                                                <td><?php echo $value->Name ?></td>
                                                <td><?php echo $value->Message ?></td>
                                                
                                                <td><?php echo $value->Email ?></td>
                                                <td><?php echo $value->Subject ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('AdminPanel/propEdit/'.$value->id)  ?>" class="btn btn-success btn-xs">Edit</a>
                                                    <a href="<?php echo base_url('AdminPanel/propDele/'.$value->id)  ?>" onclick="return confirm('Do you want to delete this ?')" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <?php $this->load->view('adminPanel/adFoot.php'); ?>