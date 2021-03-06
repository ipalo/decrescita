<div id="morphsearch" class="morphsearch">
	<form class="morphsearch-form">
		<input class="morphsearch-input" type="search" placeholder="Cerca..."/>
		<button class="morphsearch-submit" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		<div class="morphsearch-content">
			<div class="row">
				<div class="wpas-tax_category wpas-taxonomy-field wpas-field form-group col-md-3" id="wpas-tax_category">
					<div class="label-container">
						<label for="tax_category" class="control-label">Categorie</label>
					</div>
					<select class="wpas-multi-select  form-control" multiple="multiple" name="tax_category[]" id="tax_category">
						<option value="conferenze">Conferenze</option>
						<option value="eve">eve</option>
						<option value="eventi">Eventi</option>
						<option value="fotostorie">Fotostorie</option>
						<option value="gruppi-di-lavoro">Gruppi di lavoro</option>
						<option value="mediateca">Mediateca</option>
						<option value="pubblicazioni">Pubblicazioni</option>
						<option value="senza-categoria">Senza categoria</option>
						<option value="video">Video</option>
					</select>
				</div>
				<div class="wpas-tax_temi wpas-taxonomy-field wpas-field form-group col-md-3" id="wpas-tax_temi">
					<div class="label-container">
						<label for="tax_temi" class="control-label">Temi</label>
					</div>
					<select class="wpas-multi-select  form-control" multiple="multiple" name="tax_temi[]" id="tax_temi">
						<option value="ben-vivere">ben vivere</option>
						<option value="lavoro">lavoro</option>
					</select>
				</div>
				<div class="wpas-tax_post_tag wpas-taxonomy-field wpas-field form-group col-md-3" id="wpas-tax_post_tag">
					<div class="label-container">
						<label for="tax_post_tag" class="control-label">Tags</label>
					</div>
					<select class="wpas-multi-select  form-control" multiple="multiple" name="tax_post_tag[]" id="tax_post_tag">
						<option value="eccetera">eccetera</option>
						<option value="glossario">glossario</option>
						<option value="supercazzola">supercazzola</option>
						<option value="tag1">tag1</option>
						<option value="termine-secondo">termine secondo</option>
					</select>
				</div>
				<div class="wpas-tax_persone wpas-taxonomy-field wpas-field form-group col-md-3" id="wpas-tax_persone">
					<div class="label-container">
						<label for="tax_persone" class="control-label">Persone</label>
					</div>
					<select class="wpas-multi-select  form-control" multiple="multiple" name="tax_persone[]" id="tax_persone">
						<option value="iva">iva</option>
						<option value="ivan-illich">ivan illich</option>
						<option value="persona">persona</option>
					</select>
				</div>
				<input type="hidden" value="1" name="wpas">
			</div>
		</div><!-- /morphsearch-content -->
		<span class="morphsearch-close"></span>
	</form>
</div><!-- /morphsearch -->
<div class="overlay"></div>

<style type="text/css">
.morphsearch {
	width: 200px;
	min-height: 40px;
	background: #e1e1e1;
	
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
	min-height: 100%;
	top: 0px;
	right: 0px;
}

.morphsearch-form {
	width: 100%;
	height: 40px;
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
	height: 160px;
	-webkit-transform: translate3d(0,3em,0);
	transform: translate3d(0,3em,0);
}

.morphsearch-input {
	width: 100%;
	height: 100%;
	padding: 0 10% 0 10px;
	font-weight: 700;
	border: none;
	background: transparent;
	font-size: 0.8em;
	color: #a01d21;
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
	color: #c2c2c2;
}

.morphsearch-input:-moz-placeholder {
	color: #c2c2c2;
}

.morphsearch-input::-moz-placeholder {
	color: #c2c2c2;
}

.morphsearch-input:-ms-input-placeholder {
	color: #c2c2c2;
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
	width: 80px;
	height: 80px;
	text-indent: 100px;
	overflow: hidden;
	right: 0;
	top: 50%;
	background: transparent url(../img/magnifier.svg) no-repeat center center;
	background-size: 100%;
	border: none;
	pointer-events: none;
	transform-origin: 50% 50%;
	opacity: 0;
	-webkit-transform: translate3d(-30px,-50%,0) scale3d(0,0,1);
	transform: translate3d(-30px,-50%,0) scale3d(0,0,1);
}

.morphsearch.open .morphsearch-submit {
	pointer-events: auto;
	opacity: 1;
	-webkit-transform: translate3d(-30px,-50%,0) scale3d(1,1,1);
	transform: translate3d(-30px,-50%,0) scale3d(1,1,1);
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
	-webkit-transition-delay: 0.5s;
	transition-delay: 0.5s;
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

.morphsearch-content {
	color: #333;
	margin-top: 4.5em;
	width: 100%;
	height: 0;
	overflow: hidden;
	padding: 0 10.5%;
	background: #e1e1e1;
	position: absolute;
	pointer-events: none;
	opacity: 0;
}

.morphsearch.open .morphsearch-content {
	opacity: 1;
	height: auto;
	overflow: visible; /* this breaks the transition of the children in FF: https://bugzilla.mozilla.org/show_bug.cgi?id=625289 */
	pointer-events: auto;
	-webkit-transition: opacity 0.3s 0.5s;
	transition: opacity 0.3s 0.5s;
}

.dummy-column {
	width: 30%;
	padding: 0 0 6em;
	float: left;
	opacity: 0;
	-webkit-transform: translate3d(0,100px,0);
	transform: translateY(100px);
	-webkit-transition: -webkit-transform 0.5s, opacity 0.5s;
	transition: transform 0.5s, opacity 0.5s;
}

.morphsearch.open .dummy-column:first-child {
	-webkit-transition-delay: 0.4s;
	transition-delay: 0.4s;
}

.morphsearch.open .dummy-column:nth-child(2) {
	-webkit-transition-delay: 0.45s;
	transition-delay: 0.45s;
}

.morphsearch.open .dummy-column:nth-child(3) {
	-webkit-transition-delay: 0.5s;
	transition-delay: 0.5s;
}

.morphsearch.open .dummy-column {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.dummy-column:nth-child(2) {
	margin: 0 5%;
}

.dummy-column h2 {
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-weight: 800;
	color: #c2c2c2;
	padding: 0.5em 0;
}

.round {
	border-radius: 50%;
}

.dummy-media-object {
	padding: 0.75em;
	display: block;
	margin: 0.3em 0;
	cursor: pointer;
	border-radius: 5px;
	background: rgba(118,117,128,0.05);
}

.dummy-media-object:hover,
.dummy-media-object:focus {
	background: rgba(118,117,128,0.1);
}

.dummy-media-object img {
	display: inline-block;
	width: 50px;	
	margin: 0 10px 0 0;
	vertical-align: middle;
}

.dummy-media-object h3 {
	vertical-align: middle;
	font-size: 0.85em;
	display: inline-block;
	font-weight: 700;
	margin: 0 0 0 0;
	width: calc(100% - 70px);
	color: rgba(145,145,145,0.7);
}

.dummy-media-object:hover h3 {
	color: rgba(236,90,98,1);
}

/* Overlay */
.overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.5);
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
	.dummy-column {
		float: none;
		width: auto;
		padding: 0 0 2em;
	}
	.dummy-column:nth-child(2) {
		margin: 0;
	}
	.morphsearch.open .morphsearch-submit {
		-webkit-transform: translate3d(0,-50%,0) scale3d(0.5,0.5,1);
		transform: translate3d(0,-50%,0) scale3d(0.5,0.5,1);
	}
}

@media screen and (max-width: 60.625em) {
	.morphsearch {
		width: 80%;
		top: 10%;
		right: 10%;
	}
}







@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: 'codropsicons';
	src:url('../fonts/codropsicons/codropsicons.eot');
	src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('../fonts/codropsicons/codropsicons.woff') format('woff'),
		url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}

/* Header */
.codrops-header {
	max-width: 50%;
	float: left;
	padding: 40px;
}

.codrops-header h1 {
	margin: 0;
	font-weight: 100;
	font-size: 4.5em;
	line-height: 0.75;
	color: #fff;
	letter-spacing: -1px;
}

.codrops-header h1 span {
	display: block;
	font-size: 31.5%;
	font-weight: 800;
	letter-spacing: 0px;
	text-indent: 5px;
	line-height: 1;
	padding: 1em 0;
	color: #000;
}

/* To Navigation Style */
.codrops-links {
	text-transform: uppercase;
	font-weight: 800;
	font-size: 1.5em;
	line-height: 2.2;
}

.codrops-links a {
	display: inline-block;
	padding: 0 0.5em 0 0;
	margin: 0 1em 0 0;
	text-decoration: none;
	letter-spacing: 1px;
	position: relative;
}

.codrops-links a:first-child:after {
	content: '/';
	color: rgba(255,255,255,0.2);
	font-weight: 100;
	position: absolute;
	font-size: 2em;
	top: 50%;
	left: 100%;
	pointer-events: none;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

.codrops-icon span {
	display: none;
}

.codrops-icon:before {
	margin: 0 4px;
	text-transform: none;
	font-weight: normal;
	font-style: normal;
	font-variant: normal;
	font-family: 'codropsicons';
	line-height: 1;
	speak: none;
	-webkit-font-smoothing: antialiased;
}

.codrops-icon-drop:before {
	content: "\e001";
}

.codrops-icon-prev:before {
	content: "\e004";
}

@media screen and (max-width: 60.625em) {
	.codrops-header {
		float: none;
		max-width: 100%;
		padding: 20px;
		text-align: center;
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


				/***** for demo purposes only: don't allow to submit the form *****/
				morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			})();
		</script>