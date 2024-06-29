(function( $ ) {
	'use strict';

    // Add event listener Export.
    $('.toplevel_page_import-export-menu .wrap button.export').on("click", function() {

        // Perform an AJAX request to the server.
        $.ajax({
            url: ajaxObject.ajaxUrl,
            type: 'POST',
            data: {
                action: 'action-get-export',
				nonce: ajaxObject.nonce
            },
            success: function(response) {
				// console.log(response);

				// Callback when request is successful.
				if (response.success) {
					// Convert JSON data to string.
					var jsonData = JSON.stringify(response.data);

					// Create JSON blob.
					var blob = new Blob([jsonData], { type: 'application/json' });

					// Create object URL from blob.
					var url = URL.createObjectURL(blob);

					// Create <a> element to download JSON file.
					var a = document.createElement('a');
					a.href = url;
					a.download = 'import-export-menu.json';
					document.body.appendChild(a);
					a.click();
					document.body.removeChild(a);

					// Clean up object URL.
					URL.revokeObjectURL(url);
				} else {
					console.error('Error:', response.data.message);
				}			
            },
            error: function(error) {
                // Callback function when an error occurs.
                console.error('Error:', error); // Log the error message to the console.
            }
        });

    });

})( jQuery );
