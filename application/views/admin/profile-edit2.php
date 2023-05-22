
      <!--main content start-->
    <script type="text/javascript">
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>

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
                              <li><a href="<?php echo site_url('user/profile2');?>"> <i class="icon-user"></i> Profile</a></li>
                              <li  class="active"><a href="<?php echo site_url('user/profile_edit2');?>"> <i class="icon-edit"></i> Complete profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <form class="form-horizontal" role="post" method="post" enctype="multipart/form-data" action="<?php echo site_url('user/addpersonaldetails');?>">
                        <section class="panel">
                          <div class="bio-graph-heading">
                          Profile Info.
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1>About Me </h1>
                              
                                  <div class="form-group last">
                                          <label class="col-lg-2 control-label">Profile Picture</label>
                                          <div class="col-lg-6">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="<? echo base_url();?>assets/uploads/<? echo $userdets->photoID;?>" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" class="default" name="img"/>
                                                   <input type="hidden" name="imgold" value="<? echo $userdets->photoID;?>">
                                                    </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                      <label  class="col-lg-2 control-label">First Name</label>
                                      <div class="col-lg-6">
                                          <input type="text" name="firstname" class="form-control" id="f-name" value="<?php echo $userdets->firstname;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Other Names</label>
                                      <div class="col-lg-6">
                                          <input type="text" name="lastname" class="form-control" id="l-name" value="<?php echo $userdets->lastname;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">National ID Number</label>
                                      <div class="col-lg-6">
                                          <input type="text" name="nationID" class="form-control" id="c-name" value="<?php echo $userdets->nationID;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">P.O Box</label>
                                      <div class="col-lg-6">
                                          <input type="text" name="address" class="form-control" id="b-day" value="<?php echo $userdets->address;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-6">
                                          <input type="email" name="email" class="form-control" id="b-day" value="<?php echo $userdets->email;?>">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Phone Number</label>
                                      <div class="col-lg-6">
                                          <input type="text" name="phonenumber" class="form-control" id="occupation" value="<?php echo $userdets->phonenumber;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">County</label>
                                      <div class="col-lg-6">
                                         <select class="form-control" name="county" id="county" >
                                         <option value="<?php echo $countys->location_id;?>"><?php echo $countys->county;?></option>
                                         <?php foreach($cats as $row):?>
                                              <option value="<?php echo $row->location_id;?>"><?php echo $row->county;?></option>
                                         <?php endforeach;?>
                                         </select>
                                      </div>
                                  </div>
                                  <div class="form-group">

                                      <label  class="col-lg-2 control-label">Constituency</label>
                                      <div class="col-lg-6">
                                         <select class="form-control" id="constituency" name="constituency" >
                                         <option value="<?php echo $constituencys->constituents_id;?>"><?php echo $constituencys->constituency;?></option>
                                         </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Gender</label>
                                      <div class="col-lg-6">
                                      <select class="form-control m-bot15" name="gender">
                                              <option value="<?php echo $userdets->gender;?>"><?php echo $userdets->gender;?></option>
                                              <option>Male</option>
                                              <option>Female</option>
                                         </select>
                                      </div>
                                  </div>
                                   

                                  <div class="form-group last">
                                          <label class="col-lg-2 control-label">National ID Photo</label>
                                          <div class="col-lg-6">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="<? echo base_url();?>assets/uploads/<? echo $userdets->IDPhoto;?>" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" class="default" name="img2"/>
                                                   <input type="hidden" name="imgold2" value="<? echo $userdets->IDPhoto;?>">
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                          </div>
                                      </div>
                                  

                                 <!-- <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Save</button>
                                          <button type="button" class="btn btn-default">Cancel</button>
                                      </div>
                                  </div>-->
                               
                          </div>
                      </section>
                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading"> Login Info</div>
                              <div class="panel-body">
                                   
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">User name</label>
                                          <div class="col-lg-6">
                                              <input type="text" name="username" class="form-control" id="c-pwd" value="<?php echo $userdets->username;?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" name="Password" class="form-control" id="password" placeholder="Password" onkeyup='check();'>
                                          </div>

                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Retype Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" name="Password" class="form-control" id="confirm_password" placeholder="Re-type Password" onkeyup='check();'><span id='message'></span>
                                          </div>

                                      </div>



                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-info">Save</button>
                                              <button type="button" class="btn btn-default">Cancel</button>
                                          </div>
                                      </div>
                                  
                              </div>
                          </div>
                      </section>
                      </form>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

      <script type="text/javascript">
        $(document).ready(function(){
 
            $('#county').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('user/get_constituency');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].constituents_id+'>'+data[i].constituency+'</option>';
                        }
                        $('#constituency').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>
      
  