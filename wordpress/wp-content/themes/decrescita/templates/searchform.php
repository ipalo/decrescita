<div id="morphsearch" class="morphsearch">
	<?php
		$args = array();
		$page_ricerca = get_page_by_path('ricerca');
		$args['form'] = array('action' => get_permalink($page_ricerca->ID), 'row_wrap' => false, 'class' => 'morphsearch-form');

		$args['wp_query'] = array('post_type' => 'post',
	                            'posts_per_page' => 5,
	                            'order' => 'DESC',
	                            'orderby' => 'date');

		$args['fields'][] = array('type' => 'search',
	                            'placeholder' => 'cosa stai cercando?',
	                            'class' => 'morphsearch-input');

		$args['fields'][] = array('type' => 'submit',
		                        'value' => 'Cerca',
		                        'class' => 'morphsearch-submit');

		$args['fields'][] = array('type' => 'begin_filters');

		$args['fields'][] = array('type' => 'taxonomy',
	                            'label' => 'Categorie',
	                            'taxonomy' => 'category',
	                            'format' => 'multi-select',
	                            'operator' => 'AND',
	                            'class' => 'form-control',
	                            'div_class' => 'col-md-3');

		$args['fields'][] = array('type' => 'taxonomy',
	                            'label' => 'Temi',
	                            'taxonomy' => 'temi',
	                            'format' => 'multi-select',
	                            'operator' => 'AND',
	                        	'class' => 'form-control',
	                            'div_class' => 'col-md-3');

		$args['fields'][] = array('type' => 'taxonomy',
	                            'label' => 'Tags',
	                            'taxonomy' => 'post_tag',
	                            'format' => 'multi-select',
	                            'operator' => 'IN',
	                        	'class' => 'form-control',
	                            'div_class' => 'col-md-3');

		$args['fields'][] = array('type' => 'taxonomy',
	                            'label' => 'Persone',
	                            'taxonomy' => 'persone',
	                            'format' => 'multi-select',
	                            'operator' => 'IN',
	                        	'class' => 'form-control',
	                            'div_class' => 'col-md-3');

		$args['fields'][] = array('type' => 'end_filters');

		$search = new WP_Advanced_Search($args);
		$search->the_form();
	?>
	<div class="morphsearch-map">
		<div class="row">
			<div class="col-md-12">
				<h1>Persone</h1>
			</div>
		</div>
		<div class="row">
			<?php
				$terms = get_terms('persone');
				$letters = array();
				foreach ($terms as $term)
				{
					$firstLetter = substr($term->name, 0, 1);
					$letters[$firstLetter][] = $term;
				}
			?>

			<div class="col-md-12">
				<p>
				<?php foreach($letters as $letter => $terms) : ?>
					<span class="lettera-vocaboli"><?php echo $letter; ?></span>
					<?php $out = ''; foreach($terms as $term) : ?>
						<?php $out .= ', <a href="'.get_term_link( $term ).'" title="'.$term->name.'">'.$term->name.'</a>'; ?>
					<?php endforeach; ?>
					<?php echo substr($out, 2); ?>
				<?php endforeach; ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>Glossario</h1>
			</div>
		</div>

		<div class="row">
			<?php
				$terms = get_tags();
				$letters = array();
				foreach ($terms as $term)
				{
					$firstLetter = substr($term->name, 0, 1);
					$letters[$firstLetter][] = $term;
				}
			?>

			<div class="col-md-12">
				<p>
					<?php foreach($letters as $letter => $terms) : ?>
						<span class="lettera-vocaboli"><?php echo $letter; ?></span>
						<?php $out = ''; foreach($terms as $term) : ?>
							<?php $out .= ', <a href="'.get_tag_link( $term ).'" title="'.$term->name.'">'.$term->name.'</a>'; ?>
						<?php endforeach; ?>
						<?php echo substr($out, 2); ?>
					<?php endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<span class="morphsearch-close"></span>
</div>
<div class="overlay"></div>
<style type="text/css">
.morphsearch {
	width: 200px;
	min-height: 40px;
	background: #fff;
	z-index: 10000;
	top: 50px;
	right: 50px;
	-webkit-transform-origin: 100% 0;
	transform-origin: 100% 0;
	-webkit-transition-property: min-height, width, top, right;
	transition-property: min-height, width, top, right;
	-webkit-transition-duration: 0.5s;
	transition-duration: 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
	transition-timing-function: cubic-bezier(0.7,0,0.3,1);
}

.morphsearch.open {
	position: fixed;
	width: 100%;
	margin:0 auto;
	height: 100%;
	top: 0px;
	right: 0px;
	overflow: auto;
}

.morphsearch-form {
	width: 100%;
	
	margin: 0 auto;
	position: relative;
	-webkit-transition-property: width, height, -webkit-transform;
	transition-property: width, height, transform;
	-webkit-transition-duration: 0.5s;
	transition-duration: 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
	transition-timing-function: cubic-bezier(0.7,0,0.3,1);
}

.morphsearch.open .morphsearch-form {
	width: 80%;
	
	-webkit-transform: translate3d(0,3em,0);
	transform: translate3d(0,3em,0);
}

.morphsearch .wpas-search-field,
.morphsearch .wpas-submit-field {
	display:inline;
}

.morphsearch-input {
	width: 100%;
	margin: 5px 0;
	padding: 5px 10% 5px 10px;
	border: none;
	background: transparent;
	border-bottom: 0.125em solid #a01d21;
	font-size: 1em;
	color: #a01d21;
	line-height: 1.3;
	-webkit-transition: font-size 0.5s cubic-bezier(0.7,0,0.3,1);
	transition: font-size 0.5s cubic-bezier(0.7,0,0.3,1);
}

.morphsearch-input::-ms-clear { /* remove cross in IE */
    display: none;
}

.morphsearch.hideInput .morphsearch-input {
	color: transparent;
	-webkit-transition: color 0.3s;
	transition: color 0.3s;
}

.morphsearch.open .morphsearch-input {
	font-size: 7em;
}

/* placeholder */
.morphsearch-input::-webkit-input-placeholder {
	color: #a1a1a1;
	opacity: 1;
}

.morphsearch-input:-moz-placeholder {
	color: #a1a1a1;
	opacity: 1;
}

.morphsearch-input::-moz-placeholder {
	color: #a1a1a1;
	opacity: 1;
}

.morphsearch-input:-ms-input-placeholder {
	color: #a1a1a1;
	opacity: 1;
}

/* hide placeholder when active in Chrome */
.gn-search:focus::-webkit-input-placeholder {
	color: transparent;
}

input[type="search"] { /* reset normalize */
	-webkit-box-sizing: border-box; 
	box-sizing: border-box;	
}

.morphsearch-input:focus,
.morphsearch-submit:focus {
	outline: none;
}

.morphsearch-submit {
	position: absolute;
	font-size: 1em;
	line-height: 1.3;
	padding:0;
	margin:10px 0 0 0;
	color:#a1a1a1;
	background-color: transparent;
	overflow: hidden;
	right: 0;
	top: 0;
	height: auto;
	width: 10%;
	box-shadow: none;
	border: none;
	-webkit-transition: font-size 0.5s cubic-bezier(0.7,0,0.3,1);
	transition: font-size 0.5s cubic-bezier(0.7,0,0.3,1);
}

.morphsearch-submit .glyphicon {
	vertical-align: baseline;
}

.morphsearch.open .morphsearch-submit {
	font-size: 6em;
}

.morphsearch-submit:hover,
.morphsearch-submit:active {
	background-color: transparent;
	box-shadow: none;
	color:#a01d21;
}

.morphsearch-close {
	width: 36px;
	height: 36px;
	position: absolute;
	right: 1em;
	top: 1em;
	overflow: hidden;
	text-indent: 100%;
	cursor: pointer;
	pointer-events: none;
	opacity: 0;
	-webkit-transform: scale3d(0,0,1);
	transform: scale3d(0,0,1);
}

.morphsearch.open .morphsearch-close {
	opacity: 1;
	pointer-events: auto;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
	-webkit-transition-delay: 0.5s;
	transition-delay: 0.5s;
}

.morphsearch-close::before,
.morphsearch-close::after {
	content: '';
	position: absolute;
	width: 2px;
	height: 100%;
	top: 0;
	left: 50%;
	border-radius: 3px;
	opacity: 0.2;
	background: #000;
}

.morphsearch-close:hover.morphsearch-close::before,
.morphsearch-close:hover.morphsearch-close::after {
	opacity: 1;
}

.morphsearch-close::before {
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}

.morphsearch-close::after {
	-webkit-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

.morphsearch-map,
.morphsearch-content {
	color: #333;
	width: 100%;
	height: 0;
	overflow: hidden;
	padding: 0 10.5%;
	background: #fff;
	pointer-events: none;
	opacity: 0;
}

.morphsearch.open .morphsearch-map,
.morphsearch.open .morphsearch-content {
	opacity: 1;
	margin-top: 4.5em;
	height: auto;
	display: block;
	overflow: visible; /* this breaks the transition of the children in FF: https://bugzilla.mozilla.org/show_bug.cgi?id=625289 */
	pointer-events: auto;
	-webkit-transition: opacity 0.3s 0.5s;
	transition: opacity 0.3s 0.5s;
}

/* Overlay */
.overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #fff;
	opacity: 0;
	pointer-events: none;
	z-index: 1;
	-webkit-transition: opacity 0.5s;
	transition: opacity 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
	transition-timing-function: cubic-bezier(0.7,0,0.3,1);
}

.morphsearch.open ~ .overlay {
	opacity: 1;
}

@media screen and (max-width: 53.125em) {
	.morphsearch-input {
		padding: 0 25% 0 10px;
	}
	.morphsearch.open .morphsearch-input {
		font-size: 2em;
	}
}

@media screen and (max-width: 60.625em) {
	.morphsearch {
		width: 80%;
		top: 10%;
		right: 10%;
	}
}
</style>



		<script>
		/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

			(function() {
				var morphSearch = document.getElementById( 'morphsearch' ),
					input = morphSearch.querySelector( 'input.morphsearch-input' ),
					ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
					isOpen = isAnimating = false,
					// show/hide search area
					toggleSearch = function(evt) {
						// return if open and the input gets focused
						if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

						var offsets = morphsearch.getBoundingClientRect();
						if( isOpen ) {
							classie.remove( morphSearch, 'open' );

							// trick to hide input text once the search overlay closes 
							// todo: hardcoded times, should be done after transition ends
							if( input.value !== '' ) {
								setTimeout(function() {
									classie.add( morphSearch, 'hideInput' );
									setTimeout(function() {
										classie.remove( morphSearch, 'hideInput' );
										input.value = '';
									}, 300 );
								}, 500);
							}
							
							input.blur();
						}
						else {
							classie.add( morphSearch, 'open' );
						}
						isOpen = !isOpen;
					};

				// events
				input.addEventListener( 'focus', toggleSearch );
				ctrlClose.addEventListener( 'click', toggleSearch );
				// esc key closes search overlay
				// keyboard navigation events
				document.addEventListener( 'keydown', function( ev ) {
					var keyCode = ev.keyCode || ev.which;
					if( keyCode === 27 && isOpen ) {
						toggleSearch(ev);
					}
				} );
			})();
		</script>