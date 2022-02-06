<?php include 'header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($blogs as $blog) { ?>
            <div class="col-md-4 md-4">
                <div class="card">
                    <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $blog['title']; ?></h3>
                        <h4><?php echo $blog['author']; ?></h4>
                        <hr/>
                        <a href="" class="btn btn-outline-success">Read more</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>


<?php include 'footer.php'?>