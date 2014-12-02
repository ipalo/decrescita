(function(){
	jQuery(document).ready(function($){
		$('#definizione-decrescita').on('click', function(){
			var $foldicon = $(this).siblings('.glyphicon-chevron-down');
			var open = $foldicon.length ? true : false;

			$('#definition').toggle('fold',{
				start: function() {
					if(!open)
						$icon.remove();
				},
				done: function() {
					if(open)
						$(this).after('<span class="gliphicon glyphicon-chevron-down"></span>');
				}
			}, 500);
		});
	});
}());