<?php $this->load->view('pages/head.php'); ?>
<!-- Navbar End -->

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Property List</h1>
            <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/header.jpg" alt="">
        </div>
    </div>
</div>

<!-- Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($pro as $key => $value) { ?>
                <div class="col-4">
                    <form action="<?php echo base_url('Welcome/shopping_cart/') . $value->id ?>" method="post" class="row ">
                        <div class="row">

                            <div class="col-6">
                                <img src="<?php echo base_url('uploads/') . $value->picture ?> " style='height: 100px; width: 100px; ' alt="" class="rounded float-left">
                            </div>
                            <div class="col-6">
                                <input type="text" hidden name='productName' value="<?php echo $value->name ?>">
                                <input type="text" hidden name='price' value="<?php echo $value->mrp ?>">
                                <div><?php echo $value->name ?></div>
                                <div><?php echo $value->mrp ?></div>
                                <div><?php //echo $value->qty ?></div>
                                <div>
                                    <button class="btn btn-outline-success">Add To Cart</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Footer Start -->
<?php $this->load->view('pages/foot.php'); ?>