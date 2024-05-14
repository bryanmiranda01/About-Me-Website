// JavaScript Document
//Name validation
var firstName = document.getElementById('firstName');
var lastName = document.getElementById('lastName');
var regName = /[A-Za-z'-]{2,}/;

function checkName(inputId, status, feedback) 
	{
		var element = document.getElementById(inputId);
		var nameFeedback = document.getElementById(feedback);
		var nameStatus = document.getElementById(status)
		if(element.value.match(regName))
			{
				nameFeedback.innerHTML = inputId.toUpperCase() + ' is valid';
				nameStatus.classList='form-group has-success';
			}
		else 
			{
				nameFeedback.innerHTML = inputId.toUpperCase() + ' must be at least 2 letters, - and \' are allowed';
				nameStatus.classList='form-group has-error';
			}
	}

firstName.addEventListener('blur', function(){
						  checkName('firstName','firstStatus','firstFeedback');
						  },false);
lastName.addEventListener('blur', function(){
						  checkName('lastName','lastStatus', 'lastFeedback');
						  },false);

//Email validation
var emailAdd = document.getElementById('emailAddress');
var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function checkEmail(inputId, status, feedback) 
	{
		var element = document.getElementById(inputId);
		var emailFeedback = document.getElementById(feedback);
		var emailStatus = document.getElementById(status)
		if(element.value.match(validRegex))
			{
				emailFeedback.innerHTML =inputId.toUpperCase() + ' is valid';
				emailStatus.classList='form-group has-success';
			}
		else 
			{
				emailFeedback.innerHTML = inputId.toUpperCase() + ' is invalid';
				emailStatus.classList='form-group has-error';
			}
	}

emailAdd.addEventListener('blur', function(){
						  checkEmail('emailAddress','emailStatus', 'emailFeedback');
						  },false);

//Phone validation
var phoneNum = document.getElementById('phoneNumber');
var numReg = /^[0-9]{10}$/;

function checkNum(inputId, status, feedback) 
	{
		var element = document.getElementById(inputId);
		var phoneFeedback = document.getElementById(feedback);
		var phoneStatus = document.getElementById(status);
		if(element.value.match(numReg))
			{			
				phoneFeedback.innerHTML = inputId.toUpperCase() + ' is valid';
				phoneStatus.classList='form-group has-success';
			}
		else 
			{
				phoneFeedback.innerHTML = inputId.toUpperCase() + ' must contain exactly 10 digits, no hyphens or parenthesis';
				phoneStatus.classList='form-group has-error';
			}
	}

phoneNum.addEventListener('blur', function(){
						  checkNum('phoneNumber','phoneStatus', 'phoneFeedback');
						  },false);

//Username/password validation
var usern = document.getElementById('username');
var password = document.getElementById('password');

function checkData(minLength, inputId, status, feedback) 
	{
		var element = document.getElementById(inputId);
		var userFeedback = document.getElementById(feedback);
		var userStatus = document.getElementById(status);
		if(element.value.length<minLength)
			{
				userFeedback.innerHTML = inputId.toUpperCase() + ' must be at least ' + minLength + ' characters';
				userStatus.classList='form-group has-error';
			}
		else 
			{
				userFeedback.innerHTML = inputId.toUpperCase() + ' is valid';
				userStatus.classList='form-group has-success';
			}
	}

usern.addEventListener('blur', function(){
						  checkData(6,'username','userStatus', 'userFeedback');
						  },false);
password.addEventListener('blur', function(){
						  checkData(8,'password', 'passStatus', 'passFeedback');
						  },false);

//Comment validation
var comms = document.getElementById('comment');

function checkComment(minLength, inputId, status, feedback) 
	{
		var element = document.getElementById(inputId);
		var commFeedback = document.getElementById(feedback);
		var commStatus = document.getElementById(status)
		if(element.value.length<minLength)
			{
				commFeedback.innerHTML = inputId.toUpperCase() + ' must be at least ' + minLength + ' character';
				commStatus.classList='form-group has-error';
			}
		else 
			{
				commFeedback.innerHTML = 'Entered ' + inputId.toUpperCase() + ' is valid';
				commStatus.classList='form-group has-success';
			}
	}

comms.addEventListener('blur', function(){
						  checkComment(1,'comment', 'commStatus', 'commFeedback');
						  },false);

//Submit button check errors
function checkErrors() {
    var errors = document.getElementsByClassName("has-error");
    if (errors.length > 0) {
        return false; // Errors are present
    }
    return true; // No errors
}