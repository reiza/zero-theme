window.addEventListener('load', function() {
		var ms = document.getElementsByTagName('marquee');
		for (var i=0;i<ms.length;i++) { 
			var childGuest = document.createElement("p");
			childGuest.innerText=ms[i].innerText;
			ms[i].parentNode.appendChild(childGuest);
			ms[i].parentNode.removeChild(ms[i]);
		}
	}, false)
