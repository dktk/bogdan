	<section class="sub-bnr">
    <div class="position-center-center">
      <div class="container">
        <h4>Contact</h4>
        <hr class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="/">Acasa</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
  </section>
	
	
<div id="content"> 
    
    <!-- LATEST WORK -->
    <section class="contact-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row margin-top-100 margin-bottom-100">
          <div class="col-md-8">
            <div class="heading text-left margin-bottom-20">
              <h3> Contacteaza-<span>ne</span></h3>
              <hr>
            </div>
            
            <div class="contact-form"> 
              
              <!-- Form  -->
              <div class="margin-top-50">
                <div class="contact-form"> 
                  
                  <!-- Success Msg -->
                  <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                  
                  <!-- FORM -->
                  <form role="form" id="contact_form" class="contact-form" method="post" action="send_message.php">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Nume">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="EMAIL">
                        </label>
                      </li>
					   <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="TELEFON">
                        </label>
                      </li>
					  
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="SUBIECT">
                        </label>
                      </li>
                      <li class="col-sm-12 margin-top-20">
                        <label>
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit" value="submit" id="btn_submit" class="btn btn-yellow" onclick="proceed();">Trimite</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heading text-left margin-bottom-20">
              <h3> Solutions <span>For</span></h3>
              <hr>
            </div>
            <ul class="services-intro">
              <!-- Architecture -->
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-3.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Architecture</h6>
                  <p>Create your dream house with us</p>
                </div>
              </li>
              <!-- Interior Design -->
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-4.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Interior Design</h6>
                  <p>A new touch is always welcome</p>
                </div>
              </li>
              <!-- Consulting -->
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-5.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Consulting</h6>
                  <p>Fresh minds with creative ideas</p>
                </div>
              </li>
              <!-- Special Projects -->
              <li>
                <div class="media-left">
                  <div class="icon"><img src="images/intro-icon-6.png" alt=""></div>
                </div>
                <div class="media-body">
                  <h6 class="font-normal margin-bottom-10">Special Projects</h6>
                  <p>We do best work to your projects</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4XHmj5jVAuB0PlM_o8iY1LOVHVtMkqrg&signed_in=true&hl=ro&callback=initMap" async defer></script>
	<script type="text/javascript">
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 16,
				center: { lat: 47.793750, lng: 22.877049 },
				disableDefaultUI: true
			});


			var marker = new google.maps.Marker({
				position: { lat: 47.793410757080816, lng: 22.877106850926137 },
				map: map,
				title: 'Advanced Design',
				animation: google.maps.Animation.DROP
			});
			//marker.addListener('click', toggleBounce);
			var infowindow = new google.maps.InfoWindow({
				content: "Advanced Design SRL"
			});
			marker.addListener('click', function () {
				infowindow.open(map, marker);
			});
		}
	</script>
	
	<script>
		var ro = {
        errorTitle: 'Mesajul nu a fost trimis!',
        requiredFields: 'Toate campurile trebuie completate',
        badTime: 'You have not given a correct time',
        badEmail: 'Adresa de mail nu e valida',
        badTelephone: 'Numarul de telefon nu e valid',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'You have not given a correct date',
        lengthBadStart: 'Textul trebuie sa aiba intre ',
        lengthBadEnd: ' caractere',
        lengthTooLongStart: 'Textul e mai lung de  ',
        lengthTooShortStart: 'Textul e mai scurt de ',
        notConfirmed: 'Input values could not be confirmed',
        badDomain: 'Incorrect domain value',
        badUrl: 'The input value is not a correct URL',
        badCustomVal: 'The input value is incorrect',
        andSpaces: ' si spatii libere ',
        badInt: 'The input value was not a correct number',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'Trebuie sa alegeti cel putin ',
        badNumberOfSelectedOptionsEnd: ' raspunsuri',
        badAlphaNumeric: 'Textul trebuie sa contina numai texte si numere ',
        badAlphaNumericExtra: ' si ',
        wrongFileSize: 'The file you are trying to upload is too large (max %s)',
        wrongFileType: 'Only files of type %s is allowed',
        groupCheckedRangeStart: 'Alegeti intre ',
        groupCheckedTooFewStart: 'Alegeti mai mult de ',
        groupCheckedTooManyStart: 'Alegeti mai putin de ',
        groupCheckedEnd: ' item(s)',
        badCreditCard: 'The credit card number is not correct',
        badCVV: 'The CVV number was not correct',
        wrongFileDim : 'Incorrect image dimensions,',
        imageTooTall : 'the image can not be taller than',
        imageTooWide : 'the image can not be wider than',
        imageTooSmall : 'the image was too small',
        min : 'min',
        max : 'max',
        imageRatioNotAccepted : 'Image ratio is not accepted'
    };

	$.validate({
		borderColorOnError : '#FFF',
  		addValidClassOnAll : true,
		borderColorOnError : "#b94a48",
		language: ro
  });
</script>
</section>