
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
                                  
                                  <th><i class="icon-bookmark"></i> Start Time</th>
                                  <th><i class="icon-bookmark"></i> Start Date</th>
                                  <th><i class="icon-bookmark"></i> End Date</th>
                                  <th><i class="icon-bookmark"></i> Pay per day</th>

                                  <th><i class=" icon-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><a href="#"><?php echo $rows->categoryname;?></a></td>
                                  <td><a href="#"><?php echo $rows->jobtime;?></a></td>
                                  <td><a href="#"><?php echo $rows->jobstartdate;?></a></td>
                                  <td><a href="#"><?php echo $rows->jobenddate;?></a></td>
                                  <td class="hidden-phone">Ksh. <?php echo $rows->pay;?> /-</td>
                                  <td><span class="label label-info label-mini"><?php echo $rows->status;?></span></td>
                                  <td>
                                      <a href="<?php echo site_url('user/viewjobdets/'.$rows->jid);?>" class="btn btn-success btn-xs"><i class="icon-ok"></i> View Job Details</a>
                                      <?php if($rows->status=='In Progress' || $rows->status=='Complete'){?>
                                        <a href="<?php echo site_url('user/reportjob/'.$rows->jid.'/'.$rows->employerID);?>" class="btn btn-warning btn-xs"><i class="icon-ok"></i> Report</a>
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
     
