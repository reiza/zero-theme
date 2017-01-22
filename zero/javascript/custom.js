window.addEventListener('load', function() {
		var ms = document.getElementsByTagName('marquee');
		for (var i=0;i<ms.length;i++) { 
			var childGuest = document.createElement("p");
			childGuest.innerText=ms[i].innerText;
			ms[i].parentNode.appendChild(childGuest);
			ms[i].parentNode.removeChild(ms[i]);
		}


	window.courseListLabelSetup = function(){
							
		var cnameselems = document.querySelectorAll('.coursename a')
		var re = /\| [MST][123] 201[3456]\/1[4567]$/;								
		var str = "";
		var x = "";
		var label = "";
		var textnode = undefined;
		var node = undefined;
		var nodes = [];
		var pnodes = [];

																
		for (var i = 0; i < cnameselems.length; i++) {
			str = (String)(cnameselems[i].innerText || cnameselems[i].textContent);
									
			//console.log(str.trim().match(re));
									
			pnodes[i] = cnameselems[i].parentNode.parentNode.parentNode;
	
			x = str.trim().match(re);
			console.log(x);
	
			if(cnameselems[i].innerText != undefined) {
				cnameselems[i].innerText = str.trim().replace(re, "");
			} else {
				cnameselems[i].textContent = str.trim().replace(re, "");
			}
									
			if( x != null ){
				label = " "+(x[0].substring(2))+" ";
				textnode = document.createTextNode(label); 
				node = document.createElement("span"); 
				node.className = 'label labelinstance';
				node.appendChild(textnode);
				nodes[i] = node;

			} else {
				nodes[i] = false;
			}
		}
																
		for (var i = 0; i < cnameselems.length; i++) {
			if(nodes[i]){ 
				cnameselems[i].appendChild(nodes[i]);
										
			}
		}
								
								
	}
						
						
						
						
						
						
						
						
						
						
	window.courseHeaderLabelSetup = function(){
						
		var cnameselems = document.querySelectorAll('.page-header-headings h1')
		var re = /\| [MST][123] 201[3456]\/1[4567]$/;								
		var str = "";
		var x = "";
		var label = "";
		var textnode = undefined;
		var node = undefined;
		var nodes = [];
		var pnodes = [];

															
		for (var i = 0; i < cnameselems.length; i++) {
			str = (String)(cnameselems[i].innerText || cnameselems[i].textContent);
								
			//console.log(str.trim().match(re));
								
			pnodes[i] = cnameselems[i].parentNode.parentNode.parentNode;

			x = str.trim().match(re);
			console.log(x);

			if(cnameselems[i].innerText != undefined) {
				cnameselems[i].innerText = str.trim().replace(re, "");
			} else {
				cnameselems[i].textContent = str.trim().replace(re, "");
			}
								
			if( x != null ){
				label = " "+(x[0].substring(2))+" ";
				textnode = document.createTextNode(label); 
				node = document.createElement("span"); 
				node.className = 'label labelinstance courseheaderdecoration';
				node.appendChild(textnode);
				nodes[i] = node;

			} else {
				nodes[i] = false;
			}
		}
															
		for (var i = 0; i < cnameselems.length; i++) {
			if(nodes[i]){ 
				cnameselems[i].appendChild(nodes[i]);
									
			}
		}
							
							
	}

	window.courseHeaderLabelSetup();
	window.courseListLabelSetup();
	}, false)
