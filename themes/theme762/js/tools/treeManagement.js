//animate the opening of the branch (span.grower jQueryElement)
function openBranch(jQueryElement, noAnimation) {
		jQueryElement.addClass('icon-minus-sign').removeClass('icon-plus-sign');
		if(noAnimation)
			jQueryElement.parent().find('ul:first').show();
		else
			jQueryElement.parent().find('ul:first').slideDown();
}
//animate the closing of the branch (span.grower jQueryElement)
function closeBranch(jQueryElement, noAnimation) {
	jQueryElement.addClass('icon-plus-sign').removeClass('icon-minus-sign');
	if(noAnimation)
		jQueryElement.parent().find('ul:first').hide();
	else
		jQueryElement.parent().find('ul:first').slideUp();
}

//animate the closing or opening of the branch (ul jQueryElement)
function toggleBranch(jQueryElement, noAnimation) {
	if(jQueryElement.hasClass('icon-minus-sign'))
		closeBranch(jQueryElement, noAnimation);
	else
		openBranch(jQueryElement, noAnimation);
}

//when the page is loaded...
$(document).ready(function () {
	//to do not execute this script as much as it's called...
	if(!$('#right_column ul.tree.dhtml').hasClass('dynamized'))
	{
		//add growers to each ul.tree elements
		$('#right_column ul.tree.dhtml ul').prev().before("<i class='grower icon-minus-sign'> </i>");
		
		//dynamically add the '.last' class on each last item of a branch
		$('#right_column ul.tree.dhtml ul li:last-child, #right_column ul.tree.dhtml li:last-child').addClass('last');
		
		//collapse every expanded branch
		$('#right_column ul.tree.dhtml i.grower.icon-minus-sign').addClass('icon-plus-sign').removeClass('icon-minus-sign').parent().find('ul:first').hide();
		$('#right_column ul.tree.dhtml').show();
		
		//open the tree for the selected branch
			$('#right_column ul.tree.dhtml .selected').parents().each( function() {
				if ($(this).is('ul'))
					toggleBranch($(this).prev().prev(), true);
			});
			toggleBranch( $('#right_column ul.tree.dhtml .selected').prev(), true);
		
		//add a fonction on clicks on growers
		$('#right_column ul.tree.dhtml i.grower').click(function(){
			toggleBranch($(this));
		});
		//mark this 'ul.tree' elements as already 'dynamized'
		$('#right_column ul.tree.dhtml').addClass('dynamized');

		$('#right_column ul.tree.dhtml').removeClass('dhtml');
	}
});
