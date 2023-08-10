<div class="Blog">
                        
                        

                        <?php 
                    $blog=$p->display_post();
                    $i=0;
                    if(mysqli_num_rows($blog)>0){
                      foreach($blog as $item){
                        if($i==3){
                          break;
                        }
                        elseif($item['post_status']=="1"){
                          ?>
                           
                            <div class="blogs text-center mt-10 pb-80 pt-80 mb-10 bg-light shadow-lg">

                                <h3 class="title text-center"><?php echo $item['post_title'];?></h3>
                                <hr>
                                <h4 class="text-end author"><?php echo $item['post_user'];?></h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                    <img src="Upload/<?php echo $item['post_img']?>" class="img-fluid rounded-top h-75" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $item['post_summary'];?></p>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-center">|<?php echo $item['post_date'];?>|</h4>


                            </div>




                          <?php



                        }
                        $i++;
                        


                      }
                    }





                  ?>

                    </div>