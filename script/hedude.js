(
	function( $ )
	{
		// The code should be clean
		'use strict';

        // The actual HeDude application
		var HeDude =
		{

			// The actions that need to be done to load the application
			loader:function()
			{
				$( 'div.preloader' ).fadeOut( 'slow' );
			},

  			// The functions that need to be run to set up the application
	        init:function()
	        {
				HeDude.scan();
	        },

            // Check if the document has duplicate id attribute values
			duplicate_ids:function()
			{
				var ids = {};
				var duplicate = false;
				$('[id]').each
				(
					function()
					{
						if ( this.id && ids[ this.id ] )
						{
							duplicate = true;
							return true;
						}
						ids[ this.id ] = true;
					}
				);
				return duplicate;
			},

            // Check if the document has empty valued id attributes
			empty_id:function()
			{
				var empty = false;
				$('[id]').each
				(
					function()
					{
						if ( this.id == "" )
						{
							empty = true;
							return true;
						}
					}
				);
				return empty;
			},

            // Scan the DOM for HeDude elements
			scan:function()
			{
				// To handle the correct element no duplicates
				if ( HeDude.duplicate_ids() )
				{
					console.log( "Error: Duplicate id's used in DOM" );
					return false;
				}

                // or empty ID attributes are allowed
				if ( HeDude.empty_id() )
				{
					console.log( "Error: Empty id's used in DOM" );
					return false;
				}

				// Each element which class attribute contains "hedude" should be eligble for action
				$( '.hedude' ).each
				(
					function( index )
					{
						// Get the unique id value from the element
						var id = $( this ).attr( 'id' );

						// Because the HeDude element is uniquely identified we know outside this scope where to apply the template
						if ( typeof id !== 'undefined' )
						{
							// Apply the template set by data-hedude-template
		                    HeDude.template( id );
					    }
					}
				);
			},

			template:function( id )
			{
				// Use the id selector as argument to indentify the current DOM element.
				var id_selector = "#" + id;

				// Extract the location of the template that shoud be used
				var template_location = "https://www.hedude.com/template/" + $( id_selector ).data( 'hedude-template' ) + ".html";

				// Check if a data-hedude-template attribute is specified.
				if ( typeof template_location !== 'undefined' )
				{
                    // Use asychronous call to get the contents of the template as data
					$.get
					(
						template_location
					).done
					(
						function( data, textStatus, jqXHR )
						{
							// To score the template at the right scope level
							var template = data;

                            // See if the template content is stored as a source
							if ( typeof $( id_selector ).data( 'hedude-source' ) !== 'undefined' )
							{
								$.getJSON
								(
									$( id_selector ).data( 'hedude-source' ),
								).done
								(
									function( data, textStatus, jqXHR )
									{
										$.each
										(
											data,
											function( key, value )
											{
												template =  template.replace( "{{" + key + "}}", value );
											}
										);
										$( id_selector ).append( template );
									}
								)
							}
							// The content is extracted from the element inner HTML in the order specified
							else
							{
								$( id_selector ).children().each
								(
                                    function( index )
									{
										template =  template.replace( "{{" + this.getAttribute( "title" ) + "}}", this.innerHTML );
									}
								)
								$( id_selector ).html( template );
							}
						}
					)
				}
			},
		};

	    $( window ).on
		(
			'load',
			function()
			{
				HeDude.loader();
			}
		);

        HeDude.init();
	}
)
(jQuery);
