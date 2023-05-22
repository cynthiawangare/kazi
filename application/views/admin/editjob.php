
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              New Job
                          </header>
                          <div class="panel-body">
                            
                              <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('user/editnewjob');?>">
                              
                  
                                  <div class="form-group">
                                          <label  class="col-lg-2 control-label">Job Type</label>
                                          <div class="col-lg-6">
                                          <select class="form-control m-bot15" name="category" >
                                            <option value="<?php echo $wrk->categoryID;?>"><?php echo $wrk->categoryname;?></option>
                                              <?php foreach($star as $rows){
                                                        echo '<option value="'.$rows->categoryID.'">'.$rows->categoryname.'</option>';
                                              }?>
                                         </select>
                                          </div>
                                      </div>

                                  <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Job Description</label>
                                          
                                         
                                         <div class="col-sm-10">
                                            <textarea class="form-control" name="jobdescription" rows="6"><?php echo $wrk->jobdescription;?></textarea>
                                         </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Location- County</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" name="county" id="county" required>
                                  <option value="<?php echo $wrk->location_id;?>"><?php echo $wrk->county;?></option>
                                    <?php foreach($cats as $row):?>
                                    <option value="<?php echo $row->location_id;?>"><?php echo $row->county;?></option>
                                    <?php endforeach;?>
                             </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Constituency</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" id="constituency" name="constituency" required>
                            <option value="<?php echo $wrk->constituents_id;?>"><?php echo $wrk->constituency;?></option>
 
                        </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Small description of the area</label>
                                         <div class="col-sm-10">
                                            <textarea class="form-control" name="moreareadesc" rows="6"><?php echo $wrk->moreareadesc;?></textarea>
                                         </div>
                                  </div>
                      <div class="form-group">
                                      <label class="control-label col-md-3">Start Time</label>
                                      <div class="col-md-4">                                          
                                            <input type="text" name="jobtime" class="form-control" value="<?php echo $wrk->jobtime;?>">
                                            <input type="hidden" name="jid" value="<?php echo $wrk->mainjob;?>">                                          
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-md-3">Start Date</label>
                                      <div class="col-md-3 col-xs-11">
                                           <input class="form-control form-control-inline input-medium default-date-picker" name="jobstartdate" size="16" type="text" value="<?php echo $wrk->jobstartdate;?>" />
                                           
                                      </div>
                                 </div>
                                 <div class="form-group">
                                      <label class="control-label col-md-3">End Date</label>
                                      <div class="col-md-3 col-xs-11">
                                           <input class="form-control form-control-inline input-medium default-date-picker" name="jobenddate" size="16" type="text" value="<?php echo $wrk->jobenddate;?>" />
                                           
                                      </div>
                                 </div>
                                 
                                  <div class="form-group">
                                      <label class="control-label col-md-3">Pay</label>
                                      <div class="col-md-4">                                          
                                            <input type="text" name="pay" class="form-control" value="<?php echo $wrk->pay;?>">                                          
                                      </div>
                                  </div>
                                <!--  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Job Status</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" id="" name="status" required>
                            <option value="<?php echo $wrk->status;?>"><?php echo $wrk->status;?></option>
                            <option>Pending..</option>
                            <option>In Progress</option>
                            <option>Complete</option>
 
                        </select>
                                      </div>
                                  </div>-->
                                  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-info">Save</button>
                                              <button type="button" class="btn btn-default">Cancel</button>
                                          </div>
                                  </div>

                                   


                              </div>
                              </form>
                             

                          </div>
                      </section>
                  </div>
             </div>
         </section>
</section>
 
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


    