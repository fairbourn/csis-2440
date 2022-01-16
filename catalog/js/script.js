let inputs = document.querySelectorAll('form#main-form > input[type="password"]');
for (input of inputs) {input.addEventListener('input',validate);}

function validate()
{
	let pass = document.getElementById('pw');
	let confirmPass = document.getElementById('cpw');
	let msg = document.getElementById('msg');
	let but = document.getElementById('main-button');

	if(pass.value == confirmPass.value)
	{
		msg.innerText = "Passwords match.";
		msg.className = "valid";
		but.disabled = false;
	}
	else
	{
		msg.innerText = "Passwords Don't Match";
		msg.className = "invalid";
		but.disabled = true;
	}
}



function AllowOnlyNumbers(e) {

    e = (e) ? e : window.event;
    var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
    var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
    var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);

    return (/^\d+$/.test(str));
}
