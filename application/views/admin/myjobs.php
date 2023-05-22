
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Previously Posted Jobs
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="icon-bullhorn"></i> Job Type</th>
                                   <th><i class="icon-bookmark"></i> Pay per day</th>
                                  <th><i class=" icon-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->categoryname;?></a></td>
                                   <td class="hidden-phone"><?php echo $rows->pay;?></td>
                                  <td><span class="label label-info label-mini">

                                    <?php echo $rows->jbstatus;?>
                                      
                                    </span></td>
                                  <td>
 
                                      <a href="<?php echo site_url('user/editjob/'.$rows->jid);?>" class="btn btn-info btn-xs"><i class="icon-pencil">Edit</i></a>
                                      <a href="<?php echo site_url('user/viewapplicants/'.$rows->jid);?>" class="btn btn-primary btn-xs"><i class="icon-user"> View Applicants</i></a>
                                      
                                      <?php if($rows->jbstatus!='Complete' ){?><a href="<?php echo site_url('user/markjobcomplete/'.$rows->jid);?>" class="btn btn-success btn-xs"><i class="icon-ok"> Mark As Complete</i></a><?php }?>

                                      <a href="<?php echo site_url('user/deletejob/'.$rows->jid);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Delete</i></a>

                                      
                                      
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
     
