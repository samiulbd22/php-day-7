<?php include 'header.php'?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach($products as $product) { ?>
                    <div class="col-md-4 md-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" width="200px" height="200px">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $product['name']; ?></h3>
                                <h4><?php echo 'Brand:'.' '. $product['brand']; ?></h4>
                                <h5><?php echo 'Price:'.' '. $product['price'].'$'; ?></h5>
                                <hr/>
                                <a href="action.php" class="btn btn-outline-success">Read more</a>
                            </div>
                            <div class="card-footer">
                                <h6 class="card-title"><?php echo $product['description'];?></h6>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>


<?php include 'footer.php'?>