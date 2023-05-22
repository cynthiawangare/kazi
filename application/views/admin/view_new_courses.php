      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start--> 
              
                      </section>

                      <section class="panel">
                          <div class="panel-body">
                          <input type="text" name="coursename" id="coursename" />
                          </div>
                      </section>
                      
                      <?php foreach($cats as $rows){?>
                      <section class="panel">                        

                        <div class="panel-body">                              
                              <div class="col-md-6">
                              <?php echo $rows->videolink;?>
                              </div> 
                              <div class="col-md-6">
                                   
                                  <p>
                                     <?php echo $rows->videodescription;?>
                                  </p>
                                  <div class="product_meta">
                                      <span class="posted_in"> <strong>Course:</strong> <a rel="tag" href="#"><?php echo $rows->coursename;?></a></span>
                                      
                                  </div>
                                  <div class="form-group">
                                      <span><?php echo $rows->datecreated;?></span>
                                  </div>
                                  <div>
                                      <a href="<?php echo site_url('user/mark_complete/'.$rows->videoID);?>" class="btn btn-info">Mark Completed</a>
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

<script type="text/javascript">
    $('#coursename').autocomplete({
        source: "<?php echo site_url('course/search/?');?>"
    });
 
    </script>


  