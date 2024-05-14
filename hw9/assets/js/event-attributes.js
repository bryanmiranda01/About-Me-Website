// JavaScript Document
function checkUsername() 
{
	var nameStatus = document.getElementById('nameStatus');
	var userFeedback = document.getElementById('userFeedback');
	var username = document.getElementById('username');
	if(username.value.length<5)
		{
			nameStatus.classList='form-group has-error';
			userFeedback.innerHTML='Username must be at least 5 characters long';
			
		}
		else
		{
			nameStatus.classList='form-group has-success';
			userFeedback.innerHTML='Username is valid';
		}
}

function checkPassword() 
{
	var passStatus = document.getElementById('passStatus');
	var passFeedback = document.getElementById('passFeedback');
	var password = document.getElementById('password');
	if(password.value.length<5)
		{
			passStatus.classList='form-group has-error';
			passFeedback.innerHTML='Password must be at least 5 characters long';
		}
		else
		{
			passStatus.classList='form-group has-success';
			passFeedback.innerHTML='Password is valid';
		}
}