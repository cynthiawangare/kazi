<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <?php echo 'Course Name: '.$title?>
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('user/editcoursevideofrm');?>">
                                   
                                  <div class="form-group">
                                          <label  class="col-sm-2 control-label col-sm-2">Title</label>
                                          <div class="col-sm-10">
                                          <input type="text" name="title" class="form-control" value="<?php echo $wrk->title;?>">
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label  class="col-sm-2 control-label col-sm-2">Video Embed(Youtube)</label>
                                          <div class="col-sm-10">
                                          <textarea class="form-control" name="videolink" rows="6"><?php echo $wrk->videolink;?></textarea>
                                          <input type="hidden" name="cid" value="<?php echo $wrk->c_id;?>" />
                                          <input type="hidden" name="cvid" value="<?php echo $wrk->videoID;?>" />
                                          </div>
                                      </div>
                                  <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Video Description</label>
                                         <div class="col-sm-10">
                                         <textarea class="form-control" name="videodescription" rows="6"><?php echo $wrk->videodescription;?></textarea>
                                         </div>
                                  </div>
                                  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-info">Save</button>
                                              <button type="button" class="btn btn-default">Cancel</button>
                                          </div>
                                  </div>
                              </form>

                          </div>
                      </section>
                  </div>
             </div>
         </section>
</section>





                                         

                                         