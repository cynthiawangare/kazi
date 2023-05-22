
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
                                  <th><i class="icon-bullhorn"></i> Photo</th>
                                   <th><i class="icon-bookmark"></i>Name</th>
                                  <th><i class=" icon-edit"></i>Phone</th>
                                  <th><i class="icon-bookmark"></i>Address</th>
                                  <th><i class=" icon-edit"></i>Gender</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cats as $rows){?>
                              <tr>
                                  <td><img src="<? echo base_url();?>assets/uploads/<?php echo $rows->photoID;?>" style="max-width: 150px"/></a></td>
                                   <td class="hidden-phone"><?php echo $rows->firstname.' '.$rows->worker_id;?></td>
                                  <td> <?php echo $rows->phonenumber;?></td>
                                    <td> <?php echo $rows->address;?></td>
                                      <td> <?php echo $rows->gender;?></td>
 <td>
                                      <a href="<?php echo site_url('user/profileuser/'.$rows->userID.'/'.$rows->constituency.'/'.$rows->location.'/'.$rows->job_category.'/'.$rows->job_id);?>" class="btn btn-info btn-xs"><i class="icon-pencil">View Profile</i></a>
                                     
                                     <?php if($rows->worker_id==$rows->userID){?>

                                      <a href="#" class="btn btn-warning btn-xs"><i class="icon-user"> Already Assigned</i></a>

                                      <a href="<?php echo site_url('user/reportjob/'.$rows->jid.'/'.$rows->userID);?>" class="btn btn-danger btn-xs"><i class="icon-ok"></i> Report</a>


                                      <?php } else{?>

                                        <a href="<?php echo site_url('user/assignjob/'.$rows->job_id.'/'.$rows->userID);?>" class="btn btn-primary btn-xs"><i class="icon-user"> Assign Job</i></a>


                                        
                                      <?php } ?>
                                      <a href="#myModal-2" data-toggle="modal" class="btn btn-xs btn-danger">
                                  Rate Worker
                              </a>

                                      <a href="<?php echo site_url('user/deletejobapp/'.$rows->status_id.'/'.$rows->job_id);?>" class="btn btn-danger btn-xs"><i class="icon-user"> Delete</i></a>

                                      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Rating</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form">
                                                  <select class="form-control m-bot15" name="category">
                                               
                                                         <option value="1">1</option>
                                                         <option value="1">2</option>
                                                         <option value="1">3</option>

                                                         <option value="1">4</option>
                                                         <option value="1">5</option>
                                              
                                         </select>
                                                   
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-default">Submit Rating</button>
                                                      </div>
                                                  </div>
                                              </form>

                                          </div>

                                      </div>

                                  </div>
                              </div>
                                      
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
     
