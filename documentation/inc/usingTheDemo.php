<h3>Setup</h3>
<p>
	To use the demo application: 
</p>
<ul>
	<li>
		Add all the included files to a project.<br><br>
	</li>
	<li>
		Copy and paste the code from the ArdisiaDemo.mxml file to the root 
		application file for your project.<br><br>
	</li>
	<li>
		Link the Ardisia Library to the project.<br><br>This can be accompished
		by adding the Ardisia.swc file to the /libs directory or linking
		to the Ardisia.swc file in another project.<br><br>
	</li>
	<li>
		Direct the compiler to compile all the modules in the "/modules" 
		directory.<br><br>At the very least, direct it to compile the modules
		that you wish to test.<br><br>
		In Flash Builder, you can accomplish this by right-clicking the project
		root and selecting Properties -> Flex Modules -> Add.<br><br>
	</li>
	<li>
		MX components are expected to display text using FTE. To accomplish this,
		the frameworks/projects/spark/MXFTEText.css stylesheet should be
		included. You can either include the stylesheet directly, or direct the
		compiler to include the stylesheet, either via the command line 
		<div class="prettyprint" style="margin: 20px 0 15px;">
			mxmlc -theme+=frameworks/projects/spark/MXFTEText.css MyApp.mxml
		</div>or if you are using Flash Builder, right click on the demo project -> Properties 
		-> Flex Compiler -> Check "Use Flash Text Engine In MX Components".
		
		<br><br>See <a href="http://help.adobe.com/en_US/flex/using/WSda78ed3a750d6b8f-26a13bbf123c441239d-8000.html">http://help.adobe.com/en_US/flex/using/WSda78ed3a750d6b8f-26a13bbf123c441239d-8000.html</a>
		for more information.<br><br>
	</li>
	<li>
		Direct the compiler to compile the CSS files in the /themes directory to SWFs. 
		This is how the themes are changed on the fly.
		<br><br>If you are using
		Flash Builder, you can accomplish this by right-clicking on the CSS file
		and selecting the "Compile CSS to SWF" option in the context menu.
		<!--
		<br><br>For your convenience, 
		compiled theme swfs are included with the source code so the demo should 
		work without directing the CSS files to be compiled into SWFs.  However, 
		if you change the CSS files, they must be recompiled for the changes to 
		take effect.
		
		<br><br><b>NOTE:</b> The included compiled theme SWFs will ONLY work if the
		Flex SDK version you are using matches the version that the theme SWFs
		were compiled against.  If you are having issues, delete the included
		theme swfs, and direct the compiler to compile the theme SWFs as described above.
		<br><br><b>NOTE 2:</b> Starting with release 1.110, the theme swfs are no longer
		included with each release.
		-->
	</li>
</ul>