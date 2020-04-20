function expand(element) {
	element.style.height = 'auto';
	element.style.height = (element.scrollHeight - 10) + 'px';
}

function erase(element) {
	var yes = element.nextElementSibling;
	yes.className = (yes.className === 'hidden') ? 'confirm' : 'hidden';
}

function prevent(event) {
	if (event.keyCode === 13) {
		event.preventDefault();
	}
}

function show(product) {
	var showcase = document.createElement('div');
	showcase.className = "showcase";
	showcase.onclick = function (event) {
		event.preventDefault();
		document.body.style.overflow = "";
		document.body.removeChild(showcase);
	}
	var image = document.createElement('img');
	image.src = "/screenshots/" + product + ".jpg";
	image.height = "320"
	image.width = "320"
	showcase.appendChild(image);
	document.body.style.overflow = "hidden";
	document.body.appendChild(showcase);
}
