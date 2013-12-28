<?php /*%%SmartyHeaderCode:21061309465269401e5aa610-40746280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961114a814d879a67f02921f5aa5da95a73d483e' => 
    array (
      0 => '/var/www/themes/theme762/modules/blocksearch/blocksearch-top.tpl',
      1 => 1382895696,
      2 => 'file',
    ),
    'a639e87c9c5c425a24c631e833ad46c88cf8b1bc' => 
    array (
      0 => '/var/www/themes/theme762/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1382895696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21061309465269401e5aa610-40746280',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5272bdf7566399_49851418',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272bdf7566399_49851418')) {function content_5272bdf7566399_49851418($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://ec2-54-220-187-129.eu-west-1.compute.amazonaws.com/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top">חפש</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();"><i class="icon-search"></i><span></span></a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		function tryToCloseInstantSearch() {
			if ($('#old_center_column').length > 0)
			{
				$('#center_column').remove();
				$('#old_center_column').attr('id', 'center_column');
				$('body').removeClass('instant_search');
				$('#slider .nivo-main-image').trigger('mouseout');
				$('#center_column').show();
				return false;
			}
		}
		
		instantSearchQueries = new Array();
		function stopInstantSearchQueries(){
			for(i=0;i<instantSearchQueries.length;i++) {
				instantSearchQueries[i].abort();
			}
			instantSearchQueries = new Array();
		}
		
		$("#search_query_top").keyup(function(){
			if($(this).val().length > 0){
				stopInstantSearchQueries();
				instantSearchQuery = $.ajax({
					url: 'http://ec2-54-220-187-129.eu-west-1.compute.amazonaws.com/index.php?controller=search',
					data: {
						instantSearch: 1,
						id_lang: 3,
						q: $(this).val()
					},
					dataType: 'html',
					type: 'POST',
					success: function(data){
						if($("#search_query_top").val().length > 0)
						{
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="instant ' + $('#old_center_column').attr('class') + '">'+data+'</div>');
							$('body').addClass('instant_search');
							$('#old_center_column').hide();
							$('#slider .nivo-main-image').trigger('mouseenter');
							$("#instant_search_results a.close").click(function() {
								$("#search_query_top").val('');
								$('body').removeClass('instant_search');
								$('#slider .nivo-main-image').trigger('mouseout');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	// ]]>
	</script>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://ec2-54-220-187-129.eu-west-1.compute.amazonaws.com/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 3
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>