    <div class="toggle-zone">
        <a href="#" id="share-toggle"></a>
        <a href="#" id="menu-toggle"></a>
        <a href="#" id="share-toggle"></a>
    </div>
    <nav id="share-menu">
        <ui>
		    <li class="twitter"></li>
            <li class="fb-like"></li>
            <li class="line"></li>
            <li class="g-plus"></li>
            <li class="linkedin"></li>
            <li class="hatebu"></li>
            <li class="pocket"></li>
            <li class="pinterest"></li>
            <li class="tumblr"></li>
            <li class="embedly"></li>
        </ul>
    </nav>
    <script>
		$(function(){function tableData(){var index ='';var headTxt ='';$('.article-main table').each(function(){$(this).find('thead tr th').each(function(){index = $(this).index()-1;headTxt = $(this).text();$(this).parents('table').find('tbody tr').each(function(){$(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});

	</script>
</body>
</html>
