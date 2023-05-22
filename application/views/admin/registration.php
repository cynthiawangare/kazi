<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Kazi, Dashboard,Admin, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">

    <title>Kazi registration</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/back/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/back/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/back/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/respond.min.js"></script>
    <![endif]-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
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
<style type="text/css">
    .fontsmall{
         
        font-size: 12px !important;
margin-bottom: 12px;

    }
</style>
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" method="post" action="<?php echo site_url('user/addemployer');?>">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
            <input type="text" class="form-control" name="oname" placeholder="Other Name" autofocus>
            <input type="text" class="form-control" name="address" placeholder="Postal Address" autofocus>
            <input type="email" class="form-control fontsmall" name="email" placeholder="Email" autofocus>
            <input type="text" class="form-control" name="idno" placeholder="National ID" autofocus>
            
            <select class="form-control fontsmall" name="county" id="county" required>
                                  <option value="">Enter County</option>
                                    <?php foreach($cats as $row):?>
                                    <option value="<?php echo $row->location_id;?>"><?php echo $row->county;?></option>
                                    <?php endforeach;?>
            </select>

            <select class="form-control fontsmall" id="constituency" name="constituency" required>
                  <option>Enter Contituency</option>
 
            </select>
                                       
             
            <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="gender" id="radio-01" value="Male" type="radio" checked /> Male
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="gender" id="radio-02" value="Female" type="radio" /> Female
                </label>
            </div>

            <p> Enter your account details below</p>
            <input type="text" name="user" class="form-control" placeholder="User Name" autofocus>
            <input type="password" name="pass" id="password" class="form-control" placeholder="Password" onkeyup='check();'>
            <input type="password" class="form-control" placeholder="Re-type Password" id="confirm_password"  onkeyup='check();'><span id='message'></span>



            <label class="checkbox">
                <input type="checkbox" value="agree this condition" required> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a href="<?php echo site_url('user/login');?>">LOGIN</a>
            </div>

        </div>

      </form>

    </div>

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


    <script src="<?php echo base_url();?>assets/back/js/jquery-3.3.1.js"></script>
  </body>
</html>
