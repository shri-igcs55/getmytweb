<!-- ### CONTACT US PAGE ### -->
<section id="contactusBanner" class="staticPageBannerSection">
	<div class="container">
		<div class="row">
			<article class="col-md-12">
				<div class="contactContent">
					<h1>Contact Us</h1>
					<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
					<span>Lorem Ipsum industry's.</span>
				</div>
			</article>
		</div>
	</div>
</section>
<section class="contactUsForm">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>GET IN TOUCH</h1>
				<p>
					We want your experience with Getmy truck as to be awesome,<br/> we would love to hear from you
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="contactForm">
					<form action="" class="contactus" id="contactus" name="contactus" autocomplete="off">
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="form-group">
									<input type="text" id="name" name="full_name" placeholder="FULL NAME" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="form-group">
									<input type="email" id="emailid" name="user_email" placeholder="EMAIL ID" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="form-group">
									<span class="M_number_befr">
								    	<input name="user_mob" type="number" class="form-control" id="user_mob" placeholder="PHONE NUMBER" required>
								    </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea rows="10" name="contact_msg" id="contact_msg" placeholder="MESSAGE" class="form-control" required></textarea>
								</div>
							</div>
						</div>
						<!-- color:#37b1d8; -->
						<span id="form_validation_msg" ></span>
						<div class="row">
							<div class="col-md-12 text-right">
								<div class="form-group">
									<button type="button" id="submit_contact" name="submit_contact" class="btn btn_cmmn_red submit_contact">SUBMIT</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<section class="mapSection">
		<div id="mapSHow" style="width: 100%;height: 400px;"></div>
	</section>
</section>
<!-- <script async defer src="<?php //echo base_url('assets/');?>js/googleapi.js?key=AIzaSyAV4frNkjH7z30dvOfruJRK3KkYoJ_wOHw&callback=initMap; ?>"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV4frNkjH7z30dvOfruJRK3KkYoJ_wOHw&callback=initMap"></script>
<script>
	function initMap() {
		var location = {lat: 12.989348, lng: 77.559105};
		var map = new google.maps.Map(document.getElementById('mapSHow'), {
			zoom: 13,
			center: location,
			scrollwheel: false
		});
		var marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'INDGLOBAL CONSULTING SOLUTIONS'
		});
	}

</script>