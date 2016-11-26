<!-- CUSTOMER company REGISTRATION -->
<section class="custmer_reg update_doc">
	<div class="container">
		<div class="row">
			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
				<input type="hidden" id="user_id" value="<?php echo $u_id; ?>">
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
								<!-- color:#37b1d8; -->
								<span id="form_validation_msg"></span>
							</form>
						</div>
						<div class="form_wrp">
							<div class="form_sections">
								<ul id="up_doc">
									<!-- <li><img src="/gmt/uploads/10/document/thumbs/42971479982098.png">
									<input class="upload_doc form-control" type="button" name="del_doc" id="del_doc" value="Delete"></li>
									<li><img src="/gmt/uploads/10/document/thumbs/42971479982098.png">
									<input class="upload_doc form-control" type="button" name="del_doc" id="del_doc" value="Delete"></li>
									<li><img src="/gmt/uploads/10/document/thumbs/42971479982098.png">
									<input class="upload_doc form-control" type="button" name="del_doc" id="del_doc" value="Delete"></li> -->
								</ul>
							</div>
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
		jQuery.ajax({
			type:"POST",
			url: "/gmt/Document_upload/document",
			dataType: 'json',	
	        data: $('#user_id').val(),
			success: function(res){
				if(res.status_code == 200){
					
					$.each(res.data, function(key, val) {
						$('<li><img style="margin: auto 15px; max-width: 175px;" id="'+val.trans_doc_name+'_'+val.trans_doc_id+'" src="/gmt/'+val.trans_doc_thumb_url+'"><input class="del_doc form-control" type="button" name="del_doc_'+val.trans_doc_id+'" id="del_doc_'+val.trans_doc_id+'" value="Delete"><input type="hidden" class="del_img_id" value="'+val.trans_doc_id+'" id="'+val.trans_doc_id+'" name="del_img"></li>').appendTo('#up_doc');
		            	$.each(val, function(k, v){
		            		
		                });
		            });
				}else{
					console.log('No response.');
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});

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
				success: function(res)   // A function to be called if request succeeds
				{
					if(res.status_code == 200){
						// console.log('Successfully');
		        		$('#form_validation_msg').empty();
			            $('<p style="color:#00ff00;"><strong>Document Uploaded Successfully.</strong></p>').appendTo('#form_validation_msg');
		              	// $('.cust_doc_up')[0].reset();
		              	location.reload();
		              	
		            }else{
		            	// console.log('fail');
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
		        	}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		}); // on click submit

		$('#up_doc').on('click','.del_doc',function(){
			var currentObj = $(this);
			var doc_id = currentObj.closest('li').find("input[name=del_img]").val();
			if(!confirm('Are you sure you want to delete this doument?'))
				return false;
			jQuery.ajax({
				type: "POST",             // Type of request to be send, called as method
				url: "/gmt/Delete_document/delete_document", // Url to which the request is send
				dataType: 'json',	
	        	data: {trans_doc_id:doc_id},
				success: function(res)   // A function to be called if request succeeds
				{
					if(res.status_code == 200){
						currentObj.closest('li').hide();
		            }else{
		            	// console.log('fail');
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
		        	}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		}); // on click delete
	}); // document close
</script>