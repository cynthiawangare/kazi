
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
                              <h1>Employer</h1>
                              <h1><?php echo $userdets->firstname;?> <?php echo $userdets->lastname;?></h1>
                              <p><?php echo $userdets->email;?></p>
                              <p><?php echo $userdets->phonenumber;?></p>
                          </div>

                           

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
                              Job Detals
                          </div>
                          <div class="panel-body bio-graph-info" >
                               
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Job Name </span>: <?php echo $userdets->categoryname;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>County</span>: <?php echo $userdets->county;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Constituency</span>: <?php echo $userdets->constituency;?></p>
                                  </div>
                                   
                                  <div class="bio-row">
                                      <p><span>Time </span>: <?php echo $userdets->jobtime;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Start Date</span>: <?php echo $userdets->jobstartdate;?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>End Date</span>: <?php echo $userdets->jobenddate;?></p>
                                  </div>

                                   
                                   
                                   
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="bio-graph-heading">
                              JOB DESCRIPTION
                          </div>
                          <div class="panel-body bio-graph-info" >
                              
                              <div class="row">
                                 
                                  <div class="bio-row">
                                      <p><?php echo $userdets->jobdescription;?></p>
                                  </div>
                                   
                              </div>
                          </div>
                      </section>
                      
      </section>
      <!--main content end-->
      
  
