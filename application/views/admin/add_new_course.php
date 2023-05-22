<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              New Course
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('user/addcourse');?>">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Course Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="coursename" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                          <label  class="col-lg-2 control-label">Job Category</label>
                                          <div class="col-lg-6">
                                          <select class="form-control m-bot15" name="category">
                                              <?php foreach($cats as $rows){
                                                        echo '<option value="'.$rows->categoryID.'">'.$rows->categoryname.'</option>';
                                              }?>
                                         </select>
                                          </div>
                                      </div>
                                  <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Course Description</label>
                                         <div class="col-sm-10">
                                            <textarea class="form-control ckeditor" name="coursedescription" rows="6"></textarea>
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