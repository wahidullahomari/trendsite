( function( api ) {

	// Extends our custom "unique-graphic-designer" section.
	api.sectionConstructor['unique-graphic-designer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );