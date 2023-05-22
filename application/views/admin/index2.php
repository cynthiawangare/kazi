      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start--> 
              <div class="row">              
                  
              </div>
                      </section>

                      <section class="panel">
                          <div class="panel-body">
                              <input type="text" placeholder="Keyword Search" class="form-control">
                          </div>
                      </section>
                      
                      <?php foreach($cats as $rows){?>

                      <section class="panel">
                          <div class="panel-body">                             
                              <div class="col-md-9">
                                  <h4 class="pro-d-title">
                                      <a href="#" class="">
                                         <?php echo $rows->categoryname;?>
                                      </a>
                                  </h4>
                                  <p>
                                     <?php echo $rows->jobdescription;?>
                                  </p>
                                  <div class="product_meta">
                                      <span class="posted_in"> <strong>Location:</strong> <a rel="tag" href="#"><?php echo $rows->county;?></a>, <a rel="tag" href="#"><?php echo $rows->constituency;?></a>.</span>
                                      
                                  </div>
                                  <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price"><?php echo $rows->pay;?></span></div>
                                  <div class="form-group">
                                      <span>Time posted</span>
                                  </div>                                                                   
                              </div> 
                          </div>
                      </section>

                      <?php }?>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->




  