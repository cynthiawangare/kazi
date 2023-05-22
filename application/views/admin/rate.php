
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">                  
                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading no-border">
                              Rate and Feedback
                          </header>
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th>Worker</th>
                                  <th>Job category</th>
                                  <th>Rating</th>
                                  <th>Feedback</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->firstname;?></a></td>
                                  <td><a href="#"><?php echo $rows->categoryname;?></a></td>
                                  <td><a href="#"><?php echo $rows->videodescription;?></a></td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td><a class="delete" href="javascript:;">Delete</a></td>
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
     
