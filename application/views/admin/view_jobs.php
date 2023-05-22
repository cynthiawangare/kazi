
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
                                  <td><span class="label label-info label-mini"><?php echo $rows->status;?></span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
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
     
