<section class="catagory">
        <div class="container-fluid">
            <div class="row bg-dark ">
                <ul class="nav justify-content-center">
                   
                    <?php 
                        $Cat=$shagor->display_catagory();
                        if(mysqli_num_rows($Cat)>0){
                            foreach ($Cat as $Item) {
                            ?>

                                <!-- <li class="nav-item">
                                <a class="nav-link" href="index.php"></a>
                                </li> -->
                                <li class="nav-item p-3 text-center text-light">
                                    <a class="nav-link  btn btn-outline-danger" href="index.php">
                                        <h2 class="text-light p-2"><?php echo $Item['cat_name'];?></h2>
                                    </a>
                                </li>




                            <?php
                            # code...
                            }
                        }

                        
                        
                    ?>
                  
                </ul>

            </div>
        </div>

    </section>