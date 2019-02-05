<h3>Overview</h3>
<p>
	Package includes components to generate and display several different types 
	of barcodes.
</p>

<h3>Creating the BarCode Component</h3>
<p>
	All of the 1-D bar codes are created using the 
	ardisia.components.barCode.BarCode class, which extends the Flex SDK Group 
	class and can be added to any parent container that implements
	IVisualElementContainer.
</p>
<p>
	QRCode encoding is provided by way of files located in the demo application 
	and is not discussed herein. See the barcode demo files.
</p>

<h3>Using the BarCode Components</h3>
<p>
	For the barcodes, simply set the "type" property (1-D only), the "value" to 
	encode, and you are done.
</p>
<p>
	Generally, the component does not validate the encoded data. It is up to 
	the developer to ensure data is of the correct format before feeding it to 
	this class for encoding. Also, this component does not manage quiet zones. 
	See the specification files for some notes on required quiet zone widths.
</p>

<h3>Layout, Resolution, and Measured Dimensions</h3>
<p>
	If the bar code's dimensions are set explicitly the bar codes will be sized 
	to fit, but each data point may not be represented by a whole pixel. This 
	may make it difficult for code scanners to read.
</p>
<p>
	To ensure whole pixels, use the "resolution" property of the barcode to set 
	how wide each data point is and let the bar code size itself.
</p>
<p>
	In summary, explicit dimensions are allowed, but this may cause partial 
	pixels to be drawn and therefore be harder for a barcode reader to decode. 
	Use measured dimensions and control the relative size via the "resolution" 
	property.
</p>
 
<h3>Bar Color</h3>
<p>
	Set the color of the data via the "barColor" property on the components.
</p>

<h3>Example</h3>
<p>
	See the BarCode demo application for example code.
</p>