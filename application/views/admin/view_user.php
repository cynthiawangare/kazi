
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading">
                              Employers
                          </header>
                          <table class="table table-striped">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Email</th>
                                  <th>Username</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($emp as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->firstname;?></a></td>
                                  <td><a href="#"><?php echo $rows->email;?></a></td>
                                  <td><a href="#"><?php echo $rows->username;?></a></td>
                                  <td><?php 
$zero=0;
$one=1;

if ($rows->isactive==1){?>

                                    <a href="<?php echo site_url('user/publishuser/'.$rows->userID.'/'.$zero);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Unpublish</i></a>
<?php }else{?>
                                  <a href="<?php echo site_url('user/publishuser/'.$rows->userID.'/'.$one);?>" class="btn btn-success btn-xs"><i class="icon-user"> Publish</i></a>
<?php }?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </section>
                  </div>

                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading">
                              Workers
                          </header>
                          <table class="table table-striped">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Email</th>
                                  <th>Username</th>
                                  <th>Edit</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($wrk as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->firstname;?></a></td>
                                  <td><a href="#"><?php echo $rows->email;?></a></td>
                                  <td><a href="#"><?php echo $rows->username;?></a></td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                                  <td>
<?php 
$zero=0;
$one=1;

if ($rows->isactive==1){?>

                                    <a href="<?php echo site_url('user/publishuser/'.$rows->userID.'/'.$zero);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Unpublish</i></a>
<?php }else{?>
                                  <a href="<?php echo site_url('user/publishuser/'.$rows->userID.'/'.$one);?>" class="btn btn-success btn-xs"><i class="icon-user"> Publish</i></a>
<?php }?>
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
     
