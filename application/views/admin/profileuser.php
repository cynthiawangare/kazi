
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="<? echo base_url();?>assets/uploads/<? echo $userdets->photoID;?>" alt="">
                              </a>
                              <h1><?php echo $userdets->firstname;?> <?php echo $userdets->lastname;?></h1>
                              <p><?php echo $userdets->email;?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="<?php echo site_url('user/profile');?>"> <i class="icon-user"></i> Profile</a></li>
                           </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <form>
                              <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                          </form>
                          <footer class="panel-footer">
                              <button class="btn btn-danger pull-right">Post</button>
                              <ul class="nav nav-pills">
                                  <li>
                                      <a href="#"><i class="icon-map-marker"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="icon-camera"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class=" icon-film"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="icon-microphone"></i></a>
                                  </li>
                              </ul>
                          </footer>
                      </section>
                      <section class="panel">
                          <div class="bio-graph-heading">
                              BIOGRAPHY
                          </div>
                          <div class="panel-body bio-graph-info" >
                               
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>First Name </span>: <?php echo $userdets->firstname;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Last Name </span>: <?php echo $userdets->lastname;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>County </span>: <?php echo $countys->county;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Constituency</span>: <?php echo $constituencys->constituency;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p style="text-transform: capitalize;"><span>Occupation </span>: <?php echo $this->session->userdata("usergroup");?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>: <?php echo $userdets->email;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>National ID No.</span>: <?php echo $userdets->nationID;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Phone </span>: <?php echo $userdets->phonenumber;?></p>
                                  </div>
                                   
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="bio-graph-heading">
                              JOB DETAILS
                          </div>
                          <div class="panel-body bio-graph-info" >
                              
                              <div class="row">
                                 
                                  <div class="bio-row">
                                      <p><span>Occupation</span>: <?php echo $job->categoryname;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Certificate 1</span>: <a href="<?php echo base_url();?>assets/uploads/<?php echo $userdets->cert1;?>" target="_blank"><?php echo $userdets->cert1;?></a></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Certificate 2</span>: <a href="<?php echo base_url();?>assets/uploads/<?php echo $userdets->cert2;?>" target="_blank"><?php echo $userdets->cert2;?></a></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Certificate 3</span>: <a href="<?php echo base_url();?>assets/uploads/<?php echo $userdets->cert3;?>" target="_blank"><?php echo $userdets->cert3;?></a></p>
                                  </div>
                              </div>

                               <div class="form-group">
                                          <a href="<?php echo site_url('user/assignjob/'.$jobid.'/'.$userdets->userID);?>" class="btn btn-danger "><i class="icon-user"> Assign Job</i></a>
                                  </div>
                          </div>
                      </section>
                      
      </section>
      <!--main content end-->
      
  
