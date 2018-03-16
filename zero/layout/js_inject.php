<?php
$campus = $PAGE->theme->settings->campus;
$rgbaOCampuses = array(
	'OC' => '191, 87, 0, 0.90',
	//'OC' => '237, 139, 0, 1.0',
	'STA' => '70, 130, 180, 0.90',
	'STA' => '0, 94, 184, 0.90',
	'MON' => '165, 42, 42, 0.90',
	'MON' => '137, 0, 0, 0.90',
	'CAV' => '218, 165, 32, 0.90',
	'CAV' => '242, 169, 0, 0.90',
	'XCM' => '0, 122, 82, 0.90'
	);

$rgbaH = $rgbaOCampuses[$campus];

?>

<script>
	campus = '<?php echo $PAGE->theme->settings->campus; ?>';
	zeroBarColor = 0;
	//*
	rgbaOCampuses = {};
	rgbaOCampuses.OC = '191, 87, 0, 0.90'; // OC campus colour
	//rgbaOCampuses.OC = '237, 139, 0, 0.90'; // OC campus colour
	rgbaOCampuses.STA = '70, 130, 180, 0.90'; // STA campus colour
	//rgbaOCampuses.STA = '0, 94, 184, 0.90'; // STA campus colour
	rgbaOCampuses.MON = '165, 42, 42, 0.90'; // MON campus colour
	rgbaOCampuses.MON = '137, 0, 0, 0.90'; // MON campus colour
	rgbaOCampuses.CAV = '218, 165, 32, 0.90'; // CAV campus colour
	rgbaOCampuses.CAV = '242, 169, 0, 0.90'; // CAV campus colour
	rgbaOCampuses.XCM = '0, 122, 82, 0.90'; // CAV campus colour
	//*/

	rgbHeadingCampuses = {};
	rgbHeadingCampuses.OC = '191, 87, 0'; // OC campus colour
	//rgbHeadingCampuses.OC = '237, 139, 0'; // OC campus colour
	rgbHeadingCampuses.STA = '70, 130, 180'; // STA campus colour
	//rgbHeadingCampuses.STA = '0, 94, 184'; // STA campus colour
	rgbHeadingCampuses.MON = '165, 42, 42'; // MON campus colour
	rgbHeadingCampuses.MON = '137, 0, 0'; // MON campus colour
	rgbHeadingCampuses.CAV = '218, 165, 32'; // CAV campus colour
	rgbHeadingCampuses.CAV = '242, 169, 0'; // CAV campus colour
	rgbHeadingCampuses.XCM = '0, 122, 82'; // CAV campus colour

	rgbT = rgbHeadingCampuses[campus];
	rgbaO = rgbaOCampuses[campus]; // OC campus colour

	rgbaB = '51, 63, 72, 0.95';

	Y.on('scroll', function(e) {
		var node = Y.one('.navbar-inner-oc');
		var rgba = rgbaB;
		var scrollY = 0;

		if(window.hasOwnProperty('scrollY')){
			scrollY = window.scrollY
		} else {
			scrollY = window.pageYOffset;
		}

		if(scrollY<90 && zeroBarColor!=1){
			rgba = rgbaB;
			node.setStyle('backgroundColor', 'rgba('+rgba+')');
			zeroBarColor = 1;
		} else if(scrollY>=90 && zeroBarColor!=2){
			rgba = rgbaO;
			node.setStyle('backgroundColor', 'rgba('+rgba+')');
			zeroBarColor = 2;
		} else {
		}
	});

	Y.on('domready', function () {
		var body = document.body,
	    html = document.documentElement;

		var height = Math.max( body.scrollHeight, body.offsetHeight,
	                       html.clientHeight, html.scrollHeight, html.offsetHeight );

		var ftr = document.getElementById('page-footer');
		var pgCon = document.getElementById('page-content');
		var pCon = Y.one('#page-content');
		pCon.setStyle('min-height', (height-(40+70+101+163+pgCon.clientHeight)+pgCon.clientHeight)+'px');

		var node = Y.one('body');
		node.addClass('uwi-'+campus);
		<?php if($campus== 'OC') : ?>
		/*
		var node = Y.one('#logo-oc');
		node.setStyle('backgroundColor', 'rgba('+rgbaO+')');
		//*/
		/*
		var heads = Y.all('.course-content h1, h2, h3, h4, h5, h6')
		heads.setStyle('color', 'rgb('+rgbT+')');
		//*/
		<?php endif; ?>

		var postCol = Y.one('#block-region-side-post');
		if (postCol == null) {
			var mainCol = Y.one('#region-main');
			mainCol.setStyle('paddingRight', '10px');

		}

		<?php if($campus== 'OC') : ?>

		var ms = document.getElementsByTagName('marquee');
		for (var i=0;i<ms.length;i++) {
			var childGuest = document.createElement('p');
			childGuest.className += ' alert alert-info pulse';
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

		<?php endif; ?>

	});

	<?php if($campus== 'OC') : ?>
	/* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31925689-2', 'auto');
	  ga('send', 'pageview');
	//*/
	<?php endif; ?>
</script>
