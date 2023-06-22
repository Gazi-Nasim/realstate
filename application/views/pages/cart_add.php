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
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($p as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['qty']  ?></td>
                            <td><?php echo $value['price'] ?></td>
                            <td>
                                <input type="button" value='-'>
                                <input type="button" value='-'>
                                <input type="button" value='+'>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>

    </div>
</div>

<!-- Footer Start -->
<?php $this->load->view('pages/foot.php'); ?>