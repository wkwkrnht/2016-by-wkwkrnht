    <div class="toggle-zone">
        <a href="#" id="share-toggle"></a>
        <a href="#" id="menu-toggle"></a>
        <a href="#" id="share-toggle"></a>
    </div>
    <ui id="share-menu">
		<li>Tw</li>
		<li>FB</li>
		<li>LINE</li>
		<li>G+</li>
		<li>Linkedin</li>
		<li>HaTeBu</li>
		<li>Pocket</li>
		<li>Pin</li>
		<li>Tumblr</li>
		<li>Embed</li>
	</ul>
    <script>
		$(function(){function tableData(){var index ='';var headTxt ='';$('.tableBlock.pattern06 table').each(function(){$(this).find('thead tr th').each(function(){index = $(this).index()-1;headTxt = $(this).text();$(this).parents('table').find('tbody tr').each(function(){$(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});

	</script>
</body>
</html>
