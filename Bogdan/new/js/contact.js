function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {
      lat: 47.793750,
      lng: 22.877049
    },
    disableDefaultUI: true
  });

  var marker = new google.maps.Marker({
    position: {
      lat: 47.793410757080816,
      lng: 22.877106850926137
    },
    map: map,
    title: 'Advanced Design',
    animation: google.maps.Animation.DROP
  });
  //marker.addListener('click', toggleBounce);
  var infowindow = new google.maps.InfoWindow({
    content: "Advanced Design SRL"
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

var ro = {
  errorTitle: 'Mesajul tau nu a fost trimis!',
  requiredFields: 'Toate campurile trebuie completate.',
  badTime: 'You have not given a correct time.',
  badEmail: 'Adresa de mail nu e valida.',
  badTelephone: 'Numarul de telefon nu e valid.',
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
  wrongFileDim: 'Incorrect image dimensions,',
  imageTooTall: 'the image can not be taller than',
  imageTooWide: 'the image can not be wider than',
  imageTooSmall: 'the image was too small',
  min: 'min',
  max: 'max',
  imageRatioNotAccepted: 'Image ratio is not accepted'
};

$.validate({
  borderColorOnError: '#FFF',
  addValidClassOnAll: true,
  borderColorOnError: "#b94a48",
  language: ro
});
