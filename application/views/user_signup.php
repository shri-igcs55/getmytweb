<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Signup Panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div class="container">
      <div class="row text-center ">
        <div class="col-md-12">
          <br /><br />
          <h2>Get My Truck</h2>
          <h5>Admin - Signup</h5>
          <br />
        </div>
      </div>
      <div class="row ">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-6 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong> Enter Details To Signup </strong>  
            </div>
            <div class="panel-body">
              <ul style="color:green; list-style:none;" id="status_msg"></ul>
              <form role="form" method="POST" class="form-horizontal">
                <fieldset>
                  
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="user_email">Email</label>  
                    <div class="col-md-4">
                      <input id="user_email" name="user_email" placeholder="Email" class="form-control input-md" value="" required="" type="text">
                    </div>
                    <ul style="color:red; list-style:none;" id="user_email1"></ul>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="user_mob">Mobile</label>
                    <div class="col-md-4">
                      <input id="user_mob" name="user_mob" placeholder="Mobile" class="form-control input-md" value="" required="" type="text">
                    </div>
                    <ul style="color:red; list-style:none;" id="user_mob1"></ul>
                  </div>

                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="user_pass">Password</label>
                    <div class="col-md-4">
                      <input id="user_pass" name="user_pass" class="form-control input-md" value="" required="" type="password">
                    </div>
                    <ul style="color:red; list-style:none;" id="user_pass1"></ul>
                  </div>

                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="c_pass">Confirm Password</label>
                    <div class="col-md-4">
                      <input id="c_pass" name="c_pass" class="form-control input-md" value="" required="" type="password">
                    </div>
                    <ul style="color:red; list-style:none;" id="password1"></ul>
                  </div>

                  <!-- Multiple Radios -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="u_type_id">User Type</label>
                    <div class="col-md-4">
                      <div class="radio">
                        <label for="u_type_id-0">
                          <input name="u_type_id" id="u_type_id-0" value="2" type="radio">
                          Customer
                        </label>
                      </div>
                      <div class="radio">
                        <label for="u_type_id-1">
                          <input name="u_type_id" id="u_type_id-1" value="3" type="radio">
                          Packers and Movers
                        </label>
                      </div>
                      <div class="radio">
                        <label for="u_type_id-2">
                          <input name="u_type_id" id="u_type_id-2" value="4" type="radio">
                          Crain provider
                        </label>
                      </div>
                      <div class="radio">
                        <label for="u_type_id-3">
                          <input name="u_type_id" id="u_type_id-3" value="5" type="radio">
                          Transporter
                        </label>
                      </div>
                    </div>
                    <ul style="color:red; list-style:none;" id="u_type_id1"></ul>
                  </div>

                  <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="trans_cat_id">Transporter Category</label>
                    <div class="col-md-4">
                      <select id="trans_cat_id" name="trans_cat_id" class="form-control">
                        <option value="">Select Category</option>
                        <option value="6">Container Supplier</option>
                        <option value="7">Commission Agent</option>
                        <option value="8">Fleet Owner</option>
                        <option value="9">Transporter and Logistics</option>
                        <option value="10">Trolly or Tanker Provider</option>
                      </select>
                    </div>
                    <ul style="color:red; list-style:none;" id="trans_cat_id1"></ul>
                  </div>

                  <!-- Multiple Radios (inline) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="pkg_id">Package</label>
                    <div class="col-md-4"> 
                      <label class="radio-inline" for="pkg_id-0">
                        <input name="pkg_id" id="pkg_id-0" value="1" checked="checked" type="radio">
                        Trail
                      </label>
                    </div>
                    <ul style="color:red; list-style:none;" id="pkg_id1"></ul>
                  </div>

                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-8">
                      <!-- <input type="button" value="Submit" name="submit" id="submit" class="btn btn-success" /> -->
                      <button id="submit" name="submit" class="btn btn-success">Submit</button>
                      <!-- <button id="Cancle" name="Cancle" class="btn btn-danger">Cancle</button> -->
                      <input type="reset" name="Cancle" id="Cancle" class="btn btn-danger" />
                    </div>
                  </div>

                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>

    <script type="text/javascript">
    // Ajax post
    $(document).ready(function() {
      $("#submit").click(function(event) {
        event.preventDefault();
        var user_email = $("#user_email").val();
        var user_mob = $("#user_mob").val();
        var user_pass = $("#user_pass").val();
        var c_pass = $("#c_pass").val();
        var user_type_id = $("input[name=u_type_id]").val();
        var transporter_cat_id = $("#trans_cat_id").val();
        var package_id = $("input[name=pkg_id]").val();
        
        $.ajax({
          type: "POST",
          url: "/gmt/User/user_signup",
          cache: false,
          dataType: 'json',
          data: {
            user_email: user_email, 
            user_mob: user_mob,
            user_pass: user_pass,
            c_pass: c_pass,
            u_type_id: user_type_id,
            trans_cat_id: transporter_cat_id,
            pkg_id: package_id
          },
          success: function(res) {
            if (res.status_code == 200)
            {
              $('<li>Registered Successfully.</li>').appendTo('#status_msg');
              /*$.each(res.data, function(key, val) {
                $.each(val, function(k, v){
                    $('<li>'+v+'</li>').appendTo('#test');
                });
              });*/
            }else{
              console.log(res);
              $('ul').empty();
              $.each(res.data, function(key, val) {
                $.each(val, function(k, v){
                  $('<li>'+v+'</li>').appendTo('#'+k+'1');
                });
              });
            }
          },
          error: function(){
            console.log('Somthing went wrong');
          }
        });
      });
    });
    </script>
  </body>
</html>