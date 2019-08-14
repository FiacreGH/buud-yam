
			$('.panel-collapse').on('shown.bs.collapse', function () {
			var activepanel = $(this).attr( "id" );
			window.location.hash=activepanel;
			})
		

