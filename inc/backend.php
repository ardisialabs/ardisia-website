<?php

/**
 * Output the <head>
 */

function getHead($title = null, $description = null) {
	
?> 
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <?php
	    	if (isset($description))
	    		echo "<meta name='description' content='".$description."'>";
	    	if (isset($title))
	    		echo "<title>".$title."</title>";
	    ?>
	    <link rel="stylesheet" href="/css/styles.css" type="text/css" charset="utf-8">
		<link rel="shortcut icon" href="/favicon.ico" >
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="/js/scripts.js"></script>
	</head>
	
<?php 

} 

/**
 * Output the header
 */

function getHeader($selection = -1) {
	
	// include_once("inc/analytics.php") 
	
?> 
	<div id="mobile-menu">
		<div>
			<div id="logo" class="logo"><span>Ardisia</span><span>Labs</span></div>
    		<a id="close-button" href="#">
	    		<svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<line x1="2" x2="18" y1="2" y2="18" stroke="#FFFFFF" fill="transparent" stroke-linecap="round" stroke-width="4"/>
					<line x1="2" x2="18" y1="18" y2="2" stroke="#FFFFFF" fill="transparent" stroke-linecap="round" stroke-width="4"/>
				</svg>
			</a>
		</div>
		<ul>
			<li><a href="/ardisia-component-library.html">Components</a>
				<ul>
					<li><a href="/ardisia-component-library.html">Overview</a></li>
					<li><a href="/demos.html">Demos</a></li>
					<li><a href="/faq.html">FAQ</a></li>
					<li><a href="/license-faq.html">License FAQ</a></li>
				</ul>
			</li>
			<li><a href="/support.html">Support</a>
				<ul>
					<li><a href="/support.html">Overview</a></li>
					<li><a href="/documentation/">Documentation</a></li>
					<li><a href="/documentation/asdocs/" target="_blank">ASDocs</a></li>
					<li><a href="/forums/">Github</a></li>
				</ul>
			</li>
			<li><a href="/services.html">Services</a></li>
			<li><a href="/company.html">Company</a>
				<ul>
					<li><a href="/company.html">Overview</a></li>
					<li><a href="/company.html#row-2">Laika</a></li>
				</ul>
			</li>
			<li><a href="/store.html">Store</a></li>
			<li><a href="/legal.html">Legal</a></li>
		</ul>
	</div>
	<div id="contact-details">
		<div>
			<span>EMAIL:</span>
			<span><a href="mailto:info@ardisialabs.com">info@ardisialabs.com</a></span> 
		</div> 
	</div>
	<header class="unselectable"> 
		<div class="container">
			<a id="open-contact-details" href="#">
				Contact
				<img src="/assets/vector/envelope-closed.min.svg" alt="envelope">
			</a>
			<a href="/">
				<div id="logo" class="logo"><span>Ardisia</span><span>Labs</span></div>
			</a>
			<div id="sub-links-container">
				<ul>
					<li><a href="/forums/">Github</a></li>
				</ul>
			</div>
			<nav>
				<ul>
					<li><a href="/ardisia-component-library.html" <?php if ($selection == 0) { echo " class='selected'"; } ?>>COMPONENTS</a></li>
					<li><a href="/support.html" <?php if ($selection == 1) { echo " class='selected'"; } ?>>SUPPORT</a></li>
					<li><a href="/services.html" <?php if ($selection == 2) { echo " class='selected'"; } ?>>SERVICES</a></li>
					<li><a href="/company.html" <?php if ($selection == 3) { echo " class='selected'"; } ?>>COMPANY</a></li>
					<li><a href="/store.html" <?php if ($selection == 4) { echo " class='selected'"; } ?>>STORE</a></li>
				</ul>
			</nav>
			<a id="mobile-menu-popup-button" href="#">
				<svg width="30" height="27.5" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<line x1="2.5" x2="27.5" y1="2.5" y2="2.5" stroke="#FFFFFF" fill="transparent" stroke-linecap="round" stroke-width="5"/>
					<line x1="2.5" x2="27.5" y1="12.5" y2="12.5" stroke="#FFFFFF" fill="transparent" stroke-linecap="round" stroke-width="5"/>
					<line x1="2.5" x2="27.5" y1="22.5" y2="22.5" stroke="#FFFFFF" fill="transparent" stroke-linecap="round" stroke-width="5"/>
				</svg>
			</a>
		</div>
	</header>

<?php

}

/**
 * Creates the top level sublinks.
 */

function getSublinks($displayText, $selectedIndex, $pages, $pageLinks) {
	echo "<div class='sublinks'>";
		echo "<div class='sublinks-wrapper'>";
			echo "<h3>$displayText</h3>";
			echo "<ul>";
		
				$len = $pages ? count($pages) : 0;
				for ($i = 0; $i < $len; $i++) {
					if ($selectedIndex == $i) {
						$markup = "class='selected'";
					}
					else {
						$markup = "";
					}
					// if asdocs, open in new tab
					if ($pages[$i] == "ASDocs")
						echo "<li><a href='/$pageLinks[$i]' $markup target='_blank'>$pages[$i]</a></li>";
					else
				   		echo "<li><a href='/$pageLinks[$i]' $markup>$pages[$i]</a></li>";
				}
			echo "</ul>";
		echo "</div>";
	echo "</div>";
} 

/**
 * Output the page footer.
 */

function getFooter() {
	
?> 

	<footer>
		<div class="container">
			<div class="footer-description">
				Find the good stuff...
				<a href="/">
					<div class="logo">
						<span>Ardisia</span><span>Labs</span>
					</div>
				</a>
			</div>
			<div class="mobile-sitemap-container">
				<ul>
					<li><a href="/ardisia-component-library.html">Components</a></li>
					<li><a href="/support.html">Support</a></li>
					<li><a href="/services.html">Services</a></li>
					<li><a href="/company.html">Company</a></li>
					<li><a href="/forum/">Github</a></li>
					<li><a href="/store.html">Store</a></li>
				</ul>
			</div>	
			<div class="sitemap-container"><div class="link-category">
					<h6>Components</h6>
					<ul>
						<li><a href="/ardisia-component-library.html">Overview</a></li>
						<li><a href="/demos.html">Demos</a></li>
						<li><a href="/faq.html">FAQ</a></li>
						<li><a href="/license-faq.html">License FAQ</a></li>
					</ul>
				</div><div class="link-category">
					<h6>Support</h6>
					<ul>
						<li><a href="/support.html">Overview</a></li>
						<li><a href="/documentation">Documentation</a></li>
						<li><a href="/documentation/asdocs" target="_blank">ASDocs</a></li>
						<li><a href="/forum/">Github</a></li>
					</ul>
				</div><div class="link-category">
					<h6>Services</h6>
					<ul>
						<li><a href="/services.html">Overview</a></li>
					</ul>
				</div><div class="link-category">
					<h6>Company</h6>
					<ul>
						<li><a href="/company.html">Overview</a></li>
						<li><a href="/company.html#row-2">Laika</a></li>
					</ul>
				</div><div class="link-category">
					<h6>Store</h6>
					<ul>
						<li><a href="/store.html">Purchase</a></li>
					</ul>
				</div></div>
			<div class="legal-links-wrapper">
				<div>
					<a href="/legal.html/">Legal</a>
					<a href="/legal.html/terms-of-use" class="right-footer-wrapper">Terms of Use</a>
					<a href="/legal.html/privacy">Privacy</a>
				</div>
				Copyright © <span id="copydt"></span><script>var el = document.getElementById("copydt");el.innerHTML = new Date().getFullYear()</script> Ardisia Labs LLC
			</div>
			<div class="apache-wrapper">
				<div>
					Apache Flex&trade; and Apache&trade; are trademarks of The Apache Software Foundation. 
					The Apache Flex SDK product page is located <a href="http://flex.apache.org/" target="_blank">here.</a>
					The Apache Software Foundation ("ASF") is not associated with Ardisia Labs and does not 
					endorse the Ardisia Component Library in any way.
				</div>
				<a id="apache-logo-link" href="http://flex.apache.org/"><img src="/assets/images/apache-flex-logo-grayscale.png" alt="Apache Flex Logo"></a>
			</div>
		</div>
	</footer>
	
<?php 

} 

include("components.php");

function sortFn() {
    return function ($a, $b) {
        return strcasecmp($a[0], $b[0]);
    };
}

/**
 * Creates the list of components on the demo rollup page.  Will automatically
 * sort by alpha.
 */
 
function displaylist() {
	global $componentsArray;
	
	usort($componentsArray, sortFn());
	
	$count = 0;
	$len = count($componentsArray);
	for ($i = 0; $i < $len; $i++) {
		$odd = $count % 2 != 0;
		echo "<div class='examples-row-wrapper"; if ($odd){echo " alternate";}; echo "'>";
		// put 3 per row
		for ($j = $i; $j < $i + 3; $j++) {
			$item = $componentsArray[$j];
			if (isset($item)) {
				echo "<div class='demo-block'>";
					echo "<a href='/flex-components/".$item[3]."'>";
			  			if (isset($item[1])) echo "<img src='/assets/thumbs/small/".$item[1]."' alt='".$item[0]." Flex Component'>";
			  			echo "<div class='example-text-wrapper'>";
			  				echo $item[0];
			  			echo "</div>";
						echo "<div class='demo-overlay'><div class='overlay-text'>".$item[2]."</div></div>";
					echo "</a>";
		  		echo "</div>";
			}
		}
		$i += 2;
		echo "</div>";
		$count++;;
	}
}

/**
 * Creates the list of components on the technical documentation page.  Will automatically
 * sort by alpha.
 */
 
function displayContentsList($cmp) {
	global $componentsArray;
	
	usort($componentsArray, sortFn());
	
	$len = count($componentsArray);
	for ($i = 0; $i < $len; $i++) {
		$item = $componentsArray[$i];
		
		// skip elements with flag in the 4th position
		if (count($item) == 5 && $item[4])
			continue;
		$isSelected = isset($cmp) && $cmp == $item ? " class='selected'" : "";
		echo "<li".$isSelected."><a href='/documentation/".$item[3]."'>$item[0]</a></li>";
	}
}

/**
 * Returns the markup for all exampels.
 */
 
function getAllExamples() {
	global $componentsArray;
	
	usort($componentsArray, sortFn());
	
	$len = count($componentsArray);
	echo "<table class='all-components-table'>";
		echo "<tbody>";
			echo "<tr>";
			
		for ($i = 0; $i < $len; $i++) {
			if ($i > 0 && $i % 4 == 0)
				echo "</tr><tr>";
			$item = $componentsArray[$i];
			
			echo "<td><a href='/flex-components/".$item[3]."'>".$item[0]."</a></td>";
				
		}
			echo "</tr>";
		echo "</tbody>";
	echo "</table>";			
} 

?>
