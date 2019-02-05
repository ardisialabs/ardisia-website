<h3>Overview</h3>
<p>
	Chart that displays data via colorizers to create a heatmap view.
</p>

<h3>Creating the Heatmap Component</h3>
<p>
	The Heatmap extends the Spark DataGrid class.  Therefore it can be added to 
	any container that implements IVisualElementContainer.
</p>

<h3>Using the Heatmap Component</h3>
<p>
	The Heatmap functions like a DataGrid. However, the biggest difference is 
	that rather than defining an array of "columns" like a vanilla DataGrid, 
	instead a single "seriesColumn" is defined, and an indeterminate number of 
	"dataColumns" are defined.  
</p>
<p>
	The seriesColumn is a basic GridColumn and is defined exactly as a normal 
	DataGrid column. This column will serve as the description for the data 
	within the row.
</p>
<p>
	The dataColumns are a new custom column: the HeatmapDataColumn class. Since 
	the HeatmapDataColumn extends GridColumn, use the same techniques to setup 
	the column, but add an Ardisia Colorizer to the "colorizer" property. The 
	color of the cells in the column will be determined by the colorizer.
</p>

<h3>Item Renderers</h3>
<p>
	The "seriesColumn" item renderer is defined in the skin as the item renderer
	for the Flex Grid class.
</p>
<p>
	The item renderer for the HeatmapDataColumns defaults to the 
	ardisia.charts.heatmap.themes.itemRenderers.DefaultHeatmapDataColumnRenderer
	class. To customize, either change the DefaultHeatmapDataColumnRenderer 
	directly, or set a different renderer factory via the "itemRenderer" 
	property on the defined HeatmapDataColumns.
</p>

<h3>Accessibility</h3>
<p>
	Fully supports the accessibility features of the Spark DataGrid.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the Heatmap demo application for example code.
</p>