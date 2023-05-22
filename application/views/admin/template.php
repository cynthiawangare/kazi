<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">

    <title>Kazi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/back/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/back/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/back/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/back/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/assets/nestable/jquery.nestable.css" />
    <link href="<?php echo base_url();?>assets/back/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/back/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/back/css/gallery.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="<?php echo base_url();?>assets/back/css/tasks.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/back/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/back/assets/data-tables/DT_bootstrap.css" />
    <link href="<?php echo base_url();?>assets/back/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/back/assets/jcrop/css/jquery.Jcrop.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/back/css/image-crop.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/back/assets/dropzone/css/dropzone.css" rel="stylesheet"/>
   <!--
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">

    
     Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>assets/back/js/respond.min.js" ></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets/back/js/html5shiv.js"></script>
      <script src="<?php echo base_url();?>assets/back/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="<?php echo site_url('user/home');?>" class="logo">Kazi</a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/back/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/back/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/back/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url();?>assets/back/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo base_url();?>assets/back/uploads/<?php echo $this->session->userdata("photo");?>">
                            <span class="username" style="text-transform: capitalize;"><?php echo $this->session->userdata("fname");?>  <?php echo $this->session->userdata("Oname");?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                            <li><a href="<?php echo site_url('user/logout');?>"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="<?php echo site_url('user/home');?>">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  
                  <!--part for admin anything add is here-->
                  <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'admin'){
                  ?>
                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/general');?>">General</a></li>
                          <li><a  href="<?php echo site_url('user/buttons');?>">Buttons</a></li>
                          <li><a  href="<?php echo site_url('user/widget');?>">Widget</a></li>
                          <li><a  href="<?php echo site_url('user/nestable');?>">Nestable</a></li>
                          <li><a  href="<?php echo site_url('user/font_awesome');?>">Font Awesome</a></li>
                          <li><a  href="<?php echo site_url('user/indextemp');?>">index temp</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/grids');?>">Grids</a></li>
                          <li><a  href="<?php echo site_url('user/calendar');?>">Calendar</a></li>
                          <li><a  href="<?php echo site_url('user/gallery');?>">Gallery</a></li>
                          <li><a  href="<?php echo site_url('user/todo_list');?>">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/form_component');?>">Form Components</a></li>
                          <li><a  href="<?php echo site_url('user/advanced_form_components');?>">Advanced Components</a></li>
                          <li><a  href="<?php echo site_url('user/form_wizard');?>">Form Wizard</a></li>
                          <li><a  href="<?php echo site_url('user/form_validation');?>">Form Validation</a></li>
                          <li><a  href="<?php echo site_url('user/dropzone');?>">Dropzone File Upload</a></li>
                          <li><a  href="<?php echo site_url('user/inline_editor');?>">Inline Editor</a></li>
                          <li><a  href="<?php echo site_url('user/image_cropping');?>">Image Cropping</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/basic_table');?>">Basic Table</a></li>
                          <li><a  href="<?php echo site_url('user/dynamic_table');?>">Dynamic Table</a></li>
                          <li><a  href="<?php echo site_url('user/advanced_table');?>">Advanced Table</a></li>
                          <li><a  href="<?php echo site_url('user/editable_table');?>">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/product_details');?>">Details View</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                        
                          <li><a  href="<?php echo site_url('user/profile');?>">Profile</a></li>
                          <li><a  href="<?php echo site_url('user/invoice');?>">Invoice</a></li>
                          <li><a  href="<?php echo site_url('user/search_result');?>">Search Result</a></li>
                          <li><a  href="<?php echo site_url('user/fivehundred');?>">500 Error</a></li>
                      </ul>
                  </li>-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>User</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo site_url('user/view_user');?>">View Users</a></li>
                          <li><a  href="<?php echo site_url('user/remove_user');?>">Removed Users</a></li>
                     </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>Add Training courses</span>
                      </a>
                      <ul class="sub">
                      <li>
                        <li><a  href="<?php echo site_url('user/view_course');?>">Courses</a></li>
                        <li><a  href="<?php echo site_url('user/add_new_course');?>">Add new course</a></li>
                        </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>Complaints</span>
                      </a>
                      <ul class="sub">
                      <li>
                        <li><a  href="<?php echo site_url('user/wrkreports');?>">Worker Complaints</a></li>
                        <li><a  href="<?php echo site_url('user/jobreports');?>">Job Complaints</a></li>
                         
                      </ul>
                  </li>
                   

                  
                  <?php } ?>
                  <!--part for employer-->
                  <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'employer'){
                  ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>My Jobs</span>
                      </a>
                      <ul class="sub">
                      <li><a  href="<?php echo site_url('user/create_new_jobs');?>">Create new jobs</a></li>
                          <li><a  href="<?php echo site_url('user/view_my_jobs');?>">My jobs</a></li>
                          <li><a  href="<?php echo site_url('user/view_my_inprogress_jobs');?>">Inprogress jobs</a></li>
                          <li><a  href="<?php echo site_url('user/view_my_completed_jobs');?>">Completed jobs</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?php echo site_url('user/profile2');?>" >
                          <i class="icon-th"></i>
                          <span>Profile</span>
                      </a>
                  </li> 
                  <li>
                      <a href="<?php echo site_url('user/rate');?>" >
                          <i class="icon-file-text-alt"></i>
                          <span>Rate and feedback</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('user/notifications');?>" >
                          <i class="icon-cogs"></i>
                          <span>Notifications</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('user/faq');?>" >
                          <i class="icon-th"></i>
                          <span>FAQ</span>
                      </a>
                  </li>                

                <?php } ?>
                <!--END OF part for EMPLOYER-->


                <!--part for worker-->

                  <?php 
                        $usertype = $this ->session->userdata("usergroup");

                        if($usertype == 'worker'){
                  ?>
                
                <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>Jobs</span>
                      </a>
                      <ul class="sub">
                      <li><a  href="<?php echo site_url('user/my_jobs');?>">My Jobs</a></li>
                          <li><a  href="<?php echo site_url('user/in_progress_jobs');?>">Inprogress</a></li>
                          <li><a  href="<?php echo site_url('user/complete_jobs');?>">Completed</a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>Training courses</span>
                      </a>
                      <ul class="sub">
                      <li><a  href="<?php echo site_url('user/view_new_courses');?>">View new courses</a></li>
                          <li><a  href="<?php echo site_url('user/view_complete_courses');?>">View complete courses</a></li>
                      </ul>
                  </li>
                  

                  <li>
                      <a href="<?php echo site_url('user/notifications');?>" >
                          <i class="icon-cogs"></i>
                          <span>Notifications</span>
                      </a>
                  </li>
                  
                  <li>
                      <a href="<?php echo site_url('user/profile');?>" >
                          <i class="icon-th"></i>
                          <span>Profile</span>
                      </a>
                  </li> 
                  
                  <li>
                      <a href="<?php echo site_url('user/faq');?>" >
                          <i class="icon-th"></i>
                          <span>FAQ</span>
                      </a>
                  </li> 
                  <?php 
                    }
                  ?>  
                <!-- END OF part for worker-->
                  
 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
        <?php
        //echo $page; die();
             $this->load->view('admin/'.$page);
        //$this->load->view('templates/footer');

        ?>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2022 &copy; KAZI by @wangarecynthia.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <!--<script src="<?php echo base_url();?>assets/back/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery-1.8.3.min.js"></script> -->
     

    <script src="<?php echo base_url();?>assets/back/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/back/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/back/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/owl.carousel.js" ></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery.customSelect.min.js" ></script>
    <script src="<?php echo base_url();?>assts/back/js/respond.min.js" ></script>
    <script src="<?php echo base_url();?>assts/back/assets/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/jquery.stepy.js"></script>
<!--
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    common script for all pages-->
    <script src="<?php echo base_url();?>assets/back/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/back/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/count.js"></script>

<!--this advanced-form-components script only-->
  <script src="<?php echo base_url();?>assets/back/js/advanced-form-components.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--script for general page only-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/gritter/js/jquery.gritter.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/gritter.js" type="text/javascript"></script>

<!--script for image_cropping only-->
<script src="<?php echo base_url();?>assets/back/assets/jcrop/js/jquery.color.js"></script>
<script src="<?php echo base_url();?>assets/back/assets/jcrop/js/jquery.Jcrop.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/form-image-crop.js"></script>

<!--script for product_ddetails page only-->
<script src="<?php echo base_url();?>assets/back/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/back/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/sliders.js" type="text/javascript"></script>

<!--script for editable_table page only-->
<script src="<?php echo base_url();?>assets/back/js/editable-table.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/DT_bootstrap.js"></script>

<!--script for form_component page only-->
<script src="<?php echo base_url();?>assets/back/js/bootstrap-switch.js"></script>
<script src="<?php echo base_url();?>assets/back/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/back/js/ga.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/back/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/form-component.js"></script>

<!--script for googlemaps page only
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url();?>assets/back/js/gmaps.js"></script>
<script src="<?php echo base_url();?>assets/back/js/gmaps-scripts.js"></script>
-->
<!--script for widget page only-->
<script src="<?php echo base_url();?>assets/back/assets/jquery-knob/js/jquery.knob.js"></script>

<!--script for todolist page only-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/back/js/tasks.js" type="text/javascript"></script>

<!--script for nestable page only-->
<script src="<?php echo base_url();?>assets/back/assets/nestable/jquery.nestable.js"></script>
<script src="<?php echo base_url();?>assets/back/js/nestable.js"></script>

<!--script for form_validation page only-->
<script type="text/javascript" src="<?php echo base_url();?>assets/back/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/form-validation-script.js"></script>

<!--script for calendar page only-->
<script type="text/javascript" src="<?php echo base_url();?>assets/back/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/back/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>assets/back/js/external-dragging-calendar.js"></script>

<!--script for gallery page only-->
<script src="<?php echo base_url();?>assets/back/assets/fancybox/source/jquery.fancybox.js"></script>
<script src="<?php echo base_url();?>assets/back/js/modernizr.custom.js"></script>
<script src="<?php echo base_url();?>assets/back/js/toucheffects.js"></script>

<!--script for dynamic_table page only
<script type="text/javascript"  src="<?php echo base_url();?>assets/back/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript"  src="<?php echo base_url();?>assets/back/assets/advanced-datatable/media/js/jquery.js"></script>
-->

<script>
      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  </body>
</html>
