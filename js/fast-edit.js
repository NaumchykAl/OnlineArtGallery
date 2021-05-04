$(document).ready(function(){
	init();
	
	$(".content").on('click', '.inscript .slow', function (){
		var editableBlock = $(this).closest('.inscript');
		
		var oldValue = editableBlock.find('.slow').text();
		editableBlock.find('.pen').find('.newValue').val(oldValue);
		
		editableBlock.find('.slow').hide();
		editableBlock.find('.pen').show();
	});
	
	$(".content").on('click', '.inscript .pen .icon.add', function (){
		var newValue = $(this).closest('.pen').find('.newValue').val();
		var editableBlock = $(this).closest('.inscript');
		editableBlock.find('.slow').text(newValue);
		editableBlock.find('.slow').show();
		editableBlock.find('.pen').hide();
	});
	
	$(".content").on('click', '.inscript .pen .icon.cancel', function (){
		var editableBlock = $(this).closest('.inscript');
		editableBlock.find('.slow').show();
		editableBlock.find('.pen').hide();
	});
	
	function init(){
		$('.inscript .pen').hide();
	}
	
});










