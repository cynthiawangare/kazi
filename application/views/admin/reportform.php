<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <?php echo $title;?>
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('user/addreport');?>">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="title" class="form-control">
                                          <input type="hidden" value="<?php echo $jobid;?>" name="jobid">
                                          <input type="hidden" value="<?php echo $reportee;?>" name="reportee">
                                          <input type="hidden" value="<?php echo $reporter;?>" name="reporter">


                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Report</label>
                                         <div class="col-sm-10">
                                            <textarea class="form-control ckeditor" name="comment" rows="6"></textarea>
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