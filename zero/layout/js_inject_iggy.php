<script>

function isinView(elem) {
   	var docViewTop = window.screenTop;
    var docViewBottom = docViewTop + Y.DOM.winHeight();

    var elemTop = elem.getY();
    var elemBottom = elemTop + elem.get('clientHeight');
    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
}

	zeroBarColor = 0;

	Y.on('scroll', function(e) {  
		var node = Y.one('.navbar-inner-oc');
		var h2CourseNodes = Y.all('.course-content h2');

		var rgbaO = '191, 87, 0, 0.90';
		var rgbaB = '51, 63, 72, 0.95';
		var rgbO = '191, 87, 0';
		var rgbB = '51, 63, 72';
		var rgba = rgbaB;
		var rgb = rgbB;
		var scrollY = 0;
		
		if(window.hasOwnProperty('scrollY')){
			scrollY = window.scrollY
		} else {
			scrollY = window.pageYOffset;
		}
		
		if(scrollY<90 && zeroBarColor!=1){	
			rgba = rgbaB;
			rgb = rgbB;
			node.setStyle('backgroundColor', 'rgba('+rgba+')');
			
			h2CourseNodes.each(function (h2CourseNode) {
				if(isinView(h2CourseNode)){
					h2CourseNode.setStyle('color', 'rgb('+rgb+')');
				}
			});
			
			zeroBarColor = 1;
		} else if(scrollY>=90 && zeroBarColor!=2){
			rgba = rgbaO;
			rgb = rgbO;

			node.setStyle('backgroundColor', 'rgba('+rgba+')');
			h2CourseNodes.each(function (h2CourseNode) {
			    h2CourseNode.setStyle('color', 'rgb('+rgb+')');
			});

			zeroBarColor = 2;
		} else {
		}
	});	
	
	Y.on('domready', function () {
		var ms = document.getElementsByTagName('marquee');
		for (var i=0;i<ms.length;i++) { 
			var childGuest = document.createElement("p");
			childGuest.innerText=ms[i].innerText;
			ms[i].parentNode.appendChild(childGuest);
			ms[i].parentNode.removeChild(ms[i]);
		}
	});
			
</script>
