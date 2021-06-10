<?php
    include('condb.php');
    $query_product = "SELECT * FROM tbl_team 
    ORDER BY t_id ASC";
    $result_product = mysqli_query($con, $query_product) or die ("Error in query: $query_product" . mysqli_error());
    //echo($query_product);
    //exit();
?>

<div class="row">
    <?php foreach($result_product as $row) { ?>
        <div class="card" style="width: 16.8rem;">
            <img class="card-img-top" style="height: 16rem;" src="img/ad/<?php echo $row['t_img'];?>" onclick="window.location='index.php?t_id=<?php echo $row['t_id'];?>'">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['t_name'];?></h5>
                <p class="card-text"><h6>ประเภท : <?php echo $row['t_detail'];?></h6><br>
                <center>
                    <h5>฿<?php echo $row['t_detail'];?>.-</h5><p>
                    <a class="btn btn-primary" href="index.php?t_id=<?php echo $row['t_id'];?>">รายละเอียดสินค้า</a>
                </center>
            </div>
        </div>
    <?php } ?>
</div>