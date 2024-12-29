<?php include 'includes/header.php'; ?>
<div class="bluebell-review-section">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="hero-img">
                    <img src="./assets/images/BluebellDestDesk.webp" class="img-fluid d-md-block d-none"
                        alt="Hero Background Image" />
                    <img src="./assets/images/BluebellDestMob.webp" class="img-fluid d-md-none"
                        alt="Hero Background Image Mobile" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bluebellDestination">
    <div class="container">
        <div class="row g-4">
            <!-- First Image -->
             <?php
             $destquery='SELECT * FROM `destination`';
             $destresult=mysqli_query($conn,$destquery);
             while($destrow=mysqli_fetch_assoc($destresult)){
                ?>
                 <div class="col-md-6">
                <div class="destinImg position-relative">
                    <img src="./assets/images/<?=$destrow['image']?>" class="img-fluid rounded"
                        alt="Bluebell Australia" />
                    <div class="overlay text-center">
                        <span class="place-name"><a href="ContactUs.php" class='text-white'><?=$destrow['name']?></a></span>
                    </div>
                </div>
            </div>
            <?php
             }
             ?>
          
          
        </div>
    </div>


</div>
<?php include 'includes/footer.php'; ?>