
<!--Header End-->
<div class="contact">
      <div class="container">
			<!---start-contact---->
			<h3>Contact Us</h3>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
					<div class="contact_info">
			    	 	<h4>Find Us Here</h4>
			    	 		<div class="map">
								<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
					   			<!--<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://goo.gl/maps/JMjegdpM4im"></iframe><br><small><a href="https://www.google.com/maps/place/Nizam+Shankar+Plaza,+2+Satmasjid+Road,+Dhaka+1207/@23.750521,90.3658869,17z/data=!3m1!4b1!4m5!3m4!1s0x3755bf4e2c05cd5b:0xfd49cfbf95c0c749!8m2!3d23.7505284!4d90.3681049" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>-->
					   		</div>
      				</div>
					<div class="company_address">
				     	<h4>Green Heaven Information :</h4>
						    	<p>IDB-BISEW</p>
						   		<p>It Scholership Project</p>
						   		<p>Dhaka, bangladesh</p>
				   		<p>Phone : 01911735608</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="www.gmail.com">greenheaven32@gmail.com</a></p>
				   		<p>Follow on: <a href="http://www.facebook.com/azharul787">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="#" method="post"  name="contact_form">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" id="c_fullname" class="textbox" placeholder="Full Name"></span>
								<br><span class="error_message_color" id="c_fullname_error_message" style="color:red;"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" id="c_email" class="textbox" placeholder="Email"></span>
								<br><span class="error_message_color" id="c_email_error_message" style="color:red;"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" id="c_contact_no" class="textbox" placeholder="Contact Number"></span>
								<br><span class="error_message_color" id="c_contact_number_error_message" style="color:red;"></span>
						    </div>
							<div>
						     	<span><label>SUBJECT</label></span>
						    	<span><input name="userSubject" type="text" id="c_subject" class="textbox" placeholder="Subject name of this topic"></span>
								<br><span class="error_message_color" id="c_subject_error_message" style="color:red;"></span>
						    </div>
						    <div>
						    	<label>MESSAGE</label>
						    	<textarea name="userMsg" id="c_message" placeholder="Type Your Message here" > </textarea>
								<br><span class="error_message_color" id="c_message_error_message" style="color:red;"></span>
						    </div>
						   <div>
						   		<span><input type="button"  name="contact_submit" id="contact_form_validation" class="mybutton" value="Submit"></span>
						  </div>
					    </form>
						
				    </div>
  				</div>				
		  </div>
	  </div>
 </div>
 <script src="contact_form_validation.js"></script>
 <script>
	function contact_data_upload(){ 
		var c_fullname = $("#c_fullname").val(); 
		var c_email = $("#c_email").val(); 
		var c_contact_no = $("#c_contact_no").val(); 
		var c_subject = $("#c_subject").val(); 
		var c_message = $("#c_message").val();
		
			$.post("contact_message.php",{c_fullname:c_fullname, c_email:c_email, c_contact_no:c_contact_no,c_subject:c_subject, c_message:c_message},
				function (data) {
				alert(data);
				/*--- Empty the field --*/
				$("#c_fullname").val("");
				$("#c_email").val("");
				$("#c_contact_no").val("");
				$("#c_subject").val("");
				$("#c_message").val("");
			})
		
	};
 
 
 </script>