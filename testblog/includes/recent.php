<div class="recent">
                            <h3 class="text-center">Recent 5 Posts</h3>
                            <hr>
                            
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
                                            
                                            <div class="posts recpost p-2 mt-10 mb-10 bg-light">
                                                <h3 class="text-danger"><?php echo $item['post_title'];?></h3>
                                                <p>|<?php echo $item['post_date'];?>|</p>
                                            </div>
                                        

                                            <?php

                                        }
                                        $i++;
                                    }

                                }


                                ?>



                        </div>