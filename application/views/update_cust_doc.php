<!-- CUSTOMER company REGISTRATION -->
<section class="custmer_reg update_doc">
	<div class="container">
		<div class="row">
			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
			</article>
			<article class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="edit_tab1">
						<div class="form_wrp">
							<form method="post" class="transporter-form cust_doc_up" action="" id="cust_docup" name="cust_docup" enctype="multipart/form-data" accept-charset="utf-8" >
								<div class="section_head">
									<h1>Update Your <span>Info</span></h1>
								</div>
								<div class="section_sub">
									<h3>Document <span>Details</span></h3>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
											<label>Document Name<sup>*</sup></label>
										    <input type="text" name="doc_name" class="form-control" id="e_file_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
											<label>Document File<sup>*</sup><span style="color:orange;">&nbsp;&nbsp;(JPEG, JPG, PNG Format Only)</span></label>
										    <input type="file" name="user_doc" class="form-control file" id="e_File" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="upload_doc" class="upload_doc form-control" value="Upload">
										</div>
									</article>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<!-- CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.upload_doc').click(function(){
			// var doc_name = $('#e_file_name').val();
			// var user_doc = $('input:file').val();
			//var uploaddoc = $('form#cust_docup').serialize();
			 var uploaddoc = new FormData($("form#cust_docup")[0]);
			
			jQuery.ajax({
				type: "POST",             // Type of request to be send, called as method
				url: "/gmt/Document_upload/add_document", // Url to which the request is send
				dataType: 'json',	
	        	data: uploaddoc, 
	        	mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
				success: function(data)   // A function to be called if request succeeds
				{
					alert(data);
				},
				error: function(){
					console.log();
				}
			});
		}); // on click submit
	}); // document close
</script>