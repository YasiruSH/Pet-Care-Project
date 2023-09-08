var nicError = document.getElementById('nic-error');
var nameError = document.getElementById('name-error');

var emailError = document.getElementById('email-error');
var phoneError = document.getElementById('phone-error');
var addressError = document.getElementById('address-error');
var passwordError = document.getElementById('password-error');
var genderError = document.getElementById('gender-error');
var submitError = document.getElementById('subit-error');

// add pet detaila
var petcError = document.getElementById('petc-error');
var breedError = document.getElementById('breed-error');
var pnameError = document.getElementById('pname-error');
var ageError = document.getElementById('age-error');




// pay
var cnameError = document.getElementById('cname-error');
var cnumberError = document.getElementById('cnumber-error');

function validateNic(){
    var nic = document.getElementById('contact-nic').value;
    var required = 10;
    var left = required - nic.length;

    if(nic.length == 0){
        nicError.innerHTML = 'NIC is required';
        return false;
    }
    if(left > 0){
        nicError.innerHTML = left + 'more characters required';
        return false;
    }
    
    nicError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}

function validateName(){
    var name = document.getElementById('contact-name').value;

    if(name.length == 0){
        nameError.innerHTML = 'Name is required';
        return false;
    }
    nameError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}
function validateGender(){
    var gender = document.getElementById('contact-gender').value;

    if(gender.length == 0){
        genderError.innerHTML = 'Gender is required';
        return false;
    }
    genderError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}

function validateEmail(){
    var email = document.getElementById('contact-email').value;

    if(email.length == 0){
        emailError.innerHTML = 'Email is required';
        return false;
    }
    if(!email.match(/^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/)){
        emailError.innerHTML = 'Email Invalid';
        return false;
    }

    emailError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
    
}
function validatePhone(){
    var phone = document.getElementById('contact-phone').value;

    if(phone.length == 0){
        phoneError.innerHTML = 'phone is required';
        return false;
    }
    if(phone.length !== 10){
        phoneError.innerHTML = 'phone no should be 10 digits';
        return false;
    }
    if(!phone.match(/^[0-9]{10}$/)){
        phoneError.innerHTML = 'Only digits please';
        return false;
    }
    phoneError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;


}
function validateAddress(){
    var address = document.getElementById('contact-address').value;

    if(address.length == 0){
        addressError.innerHTML = 'Address is required';
        return false;
    }
    addressError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}






function validatePassword(){
    var password = document.getElementById('contact-password').value;
    var required = 5;
    var left = required - password.length;

    if(password.length == 0){
        passwordError.innerHTML = 'Password is required';
        return false;
    }
    if(left > 0){
        passwordError.innerHTML = left + 'more characters required';
        return false;
    }
    
    passwordError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}



function validateForm(){
    if(!validateName()  || !validatePhone() || !validateEmail() || !validateNic() || !validateAddress() || !validatePassword()){
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please fix error to submit';
        setTimeout(function(){submitError.style.display ='none';},3000);
        return false;
    }

}
// add pet detaila

function validatePetc(){
    var petc = document.getElementById('contact-petc').value;
    var required = 3;
    var left = required - petc.length;

    if(petc.length == 0){
        petcError.innerHTML = 'Pet Category is required';
        return false;
    }
    if(left > 0){
        petcError.innerHTML = left + 'more characters required';
        return false;
    }
    petcError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}
function validateBreed(){
    var breed = document.getElementById('contact-breed').value;
    var required = 3;
    var left = required - breed.length;

    if(breed.length == 0){
        breedError.innerHTML = 'Pet Breed is required';
        return false;
    }
    if(left > 0){
        breedError.innerHTML = left + 'more characters required';
        return false;
    }
    breedError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}
function validatePname(){
    var pname = document.getElementById('contact-pname').value;

    if(pname.length == 0){
        pnameError.innerHTML = 'Pet name is required';
        return false;
    }
    pnameError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}
function validateAge(){
    var age = document.getElementById('contact-age').value;

    if(age.length == 0){
        ageError.innerHTML = 'Age is required';
        return false;
    }
    ageError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}

// pay
function validateCname(){
    var cname = document.getElementById('contact-cname').value;

    if(cname.length == 0){
        cnameError.innerHTML = 'Name is required';
        return false;
    }
    cnameError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}


function validateCnumber() {
    var cnumber = document.getElementById('contact-cnumber').value;
    var cnumberError = document.getElementById('cnumber-error');
    
    // Remove non-numeric characters
    cnumber = cnumber.replace(/\D/g, '');
    
    if (cnumber.length === 0) {
        cnumberError.innerHTML = 'Number is required';
    } else if (cnumber.length < 16) {
        var left = 16 - cnumber.length;
        cnumberError.innerHTML = left + ' more characters required';
    } else if (cnumber.length > 16) {
        cnumberError.innerHTML = 'Too many characters';
    } else {
        cnumberError.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
}

function validateCdate() {
    var cdate = document.getElementById('contact-cdate').value;
    var cdateError = document.getElementById('cdate-error');
    
    // Remove non-numeric characters
    cdate = cdate.replace(/\D/g, '');
    
    if (cdate.length === 0) {
        cdateError.innerHTML = 'date is required';
    } else if (cdate.length < 4) {
        var left = 4 - cdate.length;
        cdateError.innerHTML = left + ' more characters required';
    } else if (cdate.length > 4) {
        cdateError.innerHTML = 'Too many characters';
    } else {
        cdateError.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
}

function validateCvv() {
    var cvv= document.getElementById('contact-cvv').value;
    var cvvError = document.getElementById('cvv-error');
    
    // Remove non-numeric characters
    cvv = cvv.replace(/\D/g, '');
    
    if (cvv.length === 0) {
        cvvError.innerHTML = 'CVV is required';
    } else if (cvv.length < 3) {
        var left = 3 - cvv.length;
        cvvError.innerHTML = left + ' more characters required';
    } else if (cvv.length > 3) {
        cvvError.innerHTML = 'Too many characters';
    } else {
        cvvError.innerHTML = '<i class="fa fa-check-circle"></i>';
    }
}
