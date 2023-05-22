
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">                  
                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              <?php echo $title;?>
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  
                                  <th>Video</th>
                                  <th>Video Title</th>
                                  <th>Course</th>
                                   
                                  <th>Action </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->videolink;?></a></td>
                                  <td><a href="#"><?php echo $rows->title;?></a></td>
                                  <td><a href="#"><?php echo $rows->coursename;?></a></td>
                                   
                                  <td>
                                     
                                     
                                    <a href="<?php echo site_url('user/editcoursevideo/'.$rows->videoID);?>" class="btn btn-primary btn-xs"><i class="icon-user"> Edit</i></a>
                                    <a href="<?php echo site_url('user/deletecoursevideo/'.$rows->videoID.'/'.$rows->courseID);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Delete</i></a>
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
     
