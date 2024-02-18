function validate() {
	const name =
		document.forms.RegForm.Name.value;
	const email =
		document.forms.RegForm.EMail.value;
	const password =
		document.forms.RegForm.Password.value;

	const rePassword =
		document.forms.RegForm.rePassword.value;

	//Javascript Regex for Email Validation.
	const regEmail = 
	/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;

	// Javascript Regex for Phone Number validation.
	const regPhone = /^\d{10}$/;

	// Javascript Regex for Name validation
	const regName = /\d+$/g;

	if (name == "" || regName.test(name)) {
		window.alert
		("Please enter your name properly.");
		name.focus();
		return false;
	}

	if (email == "" || !regEmail.test(email)) {
		window.alert
		("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (password == "") {
		alert("Please enter your password");
		password.focus();
		return false;
	}

	if (password.length < 6) {
		alert
		("Password should be atleast 6 character long");
		password.focus();
		return false;

	}

	if (password.length != rePassword.length) {
		alert("Passwords does'nt match")
	}

	return true;
}
