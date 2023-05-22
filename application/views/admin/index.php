      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start--> 
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                      <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-user"></i>
                          </div>
                          <div class="value">                             
                              <p>Post a Job</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Workers available</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>New Order</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>
              </div>
                      </section>

                      <section class="panel">
                          <div class="panel-body">
                          <form action="search.php" method="GET">
		                     <input type="text" name="query" />
		                     <input type="submit" value="Search" />
	                      </form>                              
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
                                  <p>
                                        

                                          <a href="<?php echo base_url();?>index.php/user/applyjob/<?php echo $rows->JobID;?>" class="btn btn-round btn-primary" type="button"></i> Apply Job</a>
                                       
                                  </p>
                                  
                              </div>
 
                          </div>
                      </section>

                      <?php }?>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

     

    


  