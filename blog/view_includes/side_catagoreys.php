<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                <?php while($catagorey=mysqli_fetch_assoc($cat)){?>
                <li><a href="#"> <?php echo $catagorey['ad_ctg'];?> </a></li>
               <?php } ?>
            </ul>
        </div>
    </div>
</div>