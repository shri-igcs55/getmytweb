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
							<form class="transporter-form cust_doc_up" action="" id="cust_docup" name="cust_docup">
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
										    <input type="text" class="form-control" id="e_file_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
											<label>Document File<sup>*</sup><span style="color:orange;">&nbsp;&nbsp;(PDF, JPEG, JPG, PNG Format Only)</span></label>
										    <input type="file" class="form-control" id="e_File" required>
										</div>
									</article>
									
								</div>
								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="upload_doc" class="form-control" value="Upload">
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
<!-- 	CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	var user_id = '<?php //echo $u_id; ?>';
</script>