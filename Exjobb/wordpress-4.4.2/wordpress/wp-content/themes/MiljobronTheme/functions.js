function header( $name = null ) {
	/**
	 * Fires before the header template file is loaded.
	 *
	 * The hook allows a specific header template file to be used in place of the
	 * default header template file. If your file is called header-new.php,
	 * you would specify the filename in the hook as get_header( 'new' ).
	 *
	 * @since 2.1.0
	 * @since 2.8.0 $name parameter added.
	 *
	 * @param string $name Name of the specific header file to use.
         * 
	 */
        
	do_action( 'get_header', $name );

	$templates = array();
	$name = (string) $name;
	if ( '' !== $name ) {
		$templates[] = "header-{$name}.php";
	}

	$templates[] = 'header.php';

	locate_template( $templates, true );
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}


