jQuery(document).ready( function($) {

	/* Post Editor */
	$('.post-php .meta-box-sortables').sortable({ 'disabled': true });
	$('.post-php .hndle').addClass('nohndle').removeClass('hndle').css({ 'cursor':'default','border-bottom':'1px solid #eee' });
	$('.post-php .handlediv').hide();

	var isglued = 'TRUE';

	$('#unglue-btn').click(function(){

		if ( isglued == 'TRUE'){

			/* unglue if currently glued */
			isglued = 'FALSE';

			$( this ).css({ 'color':'#ddd' }).removeClass('dashicons-yes').addClass('dashicons-no').attr( "title", 'Glue Metaboxes' );

			$('.meta-box-sortables').sortable({ 'disabled': false });
			$('.postbox .nohndle').addClass('hndle').removeClass('nohndle').css({ 'cursor':'move' });
			$('.handlediv').show();

			$( '#unglue-message' ).text('Metaboxes are temporarily unglued');

		} else {

			/* glue if currently unglued */
			isglued = 'TRUE';

			$( this ).css({ 'color':'#202020' }).removeClass('dashicons-no').addClass('dashicons-yes').attr( 'title','Unglue Metaboxes' );

			$('.meta-box-sortables').sortable({ 'disabled': true });
			$('.postbox .hndle').addClass('nohndle').removeClass('hndle').css('cursor','default');
			$('.handlediv').hide();

			$( '#unglue-message' ).text('Metaboxes are glued');
		}
    });
});

