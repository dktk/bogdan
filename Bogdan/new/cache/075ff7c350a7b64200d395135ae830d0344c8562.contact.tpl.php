<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-05 03:14:30
  from "D:\projects\Bogdan\Bogdan\new\templates\contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56624886b20b94_24661117',
  'file_dependency' => 
  array (
    '075ff7c350a7b64200d395135ae830d0344c8562' => 
    array (
      0 => 'D:\\projects\\Bogdan\\Bogdan\\new\\templates\\contact.tpl',
      1 => 1448838776,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_56624886b20b94_24661117 ($_smarty_tpl) {
?>
	<div class="container contact">
		<h1>Informatii de contact</h1>

		<div class="row contact">
			<div class="col-md-6">
				<div id="map">
				</div>
			</div>
			<div class="col-md-5 details">
				<div>
					<em>
						ADVANCED DESIGN SRL
					</em>
				</div>
				<strong>
					Ing. Tuns Bogdan
				</strong>
				<address>
					Str. Horea, nr. 1, ap. 53-54
					<br />
					Satu Mare
				</address>
				<span>
					CUI 34806116
				</span>
				<span>
					J30/495/2015
				</span>
				<br />
				<div>
					telefon: <strong>+40 740 38 18 82</strong>
				</div>
			</div>
		</div>

		<div class="row contact-form">
			<h2>Contacteaza-ne</h2>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div id="email-error-dialog"></div>

				<form action="send_message.php" method="post" id="myForm">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
						</span>

						<input
							type="text" name="name" id="name" class="form-control" 
							data-validation="required" placeholder="Nume" 
							data-validation-error-msg-container="#email-error-dialog"	
							/>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</span>
						<input type="text" name="email" id="email" 
							class="form-control" placeholder="Email" data-validation="required" 
							data-validation="email" 
							data-validation-error-msg-container="#email-error-dialog"/>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</span>
						<input type="text" name="phone" id="phone" class="form-control" 
								placeholder="Telefon - 0798 765 432" data-validation="required" 
								pattern="^07\d\d\s\d\d\d\s\d\d\d" data-validation="phone"
								data-validation-error-msg-container="#email-error-dialog"/>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
						</span>
						<textarea
							class="form-control" name="message" id="message" placeholder="Mesaj" 
							data-validation="required" 
							rows="6"
							pattern="^[a-z][A-Z]+"
							data-validation-error-msg-container="#email-error-dialog">
							</textarea>
					</div>

					<div class="pull-right">
						<input type="submit" class="btn btn-button" value="Trimite" />
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
</script><?php }
}
