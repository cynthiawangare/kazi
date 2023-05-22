
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">                  
                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              Course and it's videos
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>Course name</th>
                                  <th>Job category</th>
                                   
                                  <th>Action </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->coursename;?></a></td>
                                  <td><a href="#"><?php echo $rows->categoryname;?></a></td>
                                   
                                  <td>
                                    <a href="<?php echo site_url('user/add_new_coursevideos/'.$rows->courseID.'/'.$rows->coursename);?>" class="btn btn-info btn-xs"><i class="icon-user"> Add Course Videos</i></a>
                                    <a href="<?php echo site_url('user/viewcoursevideos/'.$rows->courseID);?>" class="btn btn-warning btn-xs"><i class="icon-user"> View Course Videos</i></a>
                                    <a href="<?php echo site_url('user/editcourse/'.$rows->courseID);?>" class="btn btn-primary btn-xs"><i class="icon-user"> Edit</i></a>
                                    <a href="<?php echo site_url('user/deletecourse/'.$rows->courseID);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Delete</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
     
