<!-- <nav class="clear-nav">
	<a href="#home" class="logo">
		<img src="assets/vario-css/img/logo.png" class="clear-nav" height="30px" width="30px" alt="Vario logo with text saying var">
	</a>
	<a href="#get-started">Get Started</a>
	<a href="#fonts">Fonts</a>
	<a href="#colors">Colours</a>
</nav> -->
<!-- <div class="banner">
	<strong class="important-text">This library is currently in Beta and may change frequently</strong>
</div> -->
<br>
<h1 class="dark-grey">Vario Library</h1>

<div class="card full-screen-card" id="get-started">
	<h2 id="hierarchy">Getting Started</h2>
	<p><strong>Welcome to the Vario color and font library.</strong><br>
	Vario means variable in both Italian and Spanish, and that's what this library aims to be. Vario is essentially a boilerplate, some optional fonts, and a color palate. This allows Vario to be as lightweight as possible, around 3kB in fact. It's not quite ready, but when it is we'll link to the download file here.<br>
<!-- 		To get started just add the following two files to your project and edit the second one, which is all set up with preset colours etc.</p>
	<p><strong>Download the library...</strong><br>
	Download the SASS library (you generally won't edit this file)<a download href="sass/vario.scss" class="underline">here.</a>
	<p><strong>...then download and edit this file</strong><br>
	Download the SASS file<a download href="sass/my.scss" class="underline">here.</a> -->
	</p>
</div>

<div class="card full-screen-card" id="components">
	<h2 id="fonts">Add Fonts</h2>
	<p>We've picked a number of go-to fonts to get you started. Example html links are provided for pnthe regular style only.</p>
	
	<h3>Heading fonts</h3>
	<p><strong>Oswald</strong></p>
	<p>Owswald is <em>san-serif</em> typeface based on classic gothic and grotesque styles. It has a condensed, thick and tall appearance, perfect for bold headings. Pair Oswald with Merriweather, Roboto or Open Sans.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/oswald-min.png">

	<p><strong>Abril Fatface</strong></p>
	<p>Abril Fatface is a modern <em>serif</em> typeface and is an elegant headline choice. Only the regular style is available for free from google fonts. Pair Abril Fatface with Open Sans or Roboto.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/abril-fatface-min.png">

	<p><strong>Playfair Display</strong></p>
	<p>Playfair Display is a transitional <em>serif</em> typeface. It is best used for titles and headlines and has a classy, feminine feel. Pair Playfair Display with Rubik or Open Sans.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/playfair-display-min.png">

	<p><strong>Lobster 2</strong></p>
	<p>Lobster 2 is a fun <em>script</em> typeface ideal for heaedings. Pair Lobster 2 with Roboto or Rubik.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/lobster-2-min.png">

	<p><strong>Roboto Slab</strong></p>
	<p>Roboto slab is a <em>slab serif</em> typeface. As it doesn't have any italic styles, I'd refrain from using it for body copy. Pair Roboto Slab with Roboto.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/roboto-slab-min.png">

	<h3>Paragraph fonts</h3>
	<p><strong>Roboto</strong></p>
	<p>Roboto is a grotesque <em>sans-serif</em> typeface, and is the standard typeface for Android. It is very legible on screens of all sizes. Pair Roboto with Roboto Slab, Lobster 2 or Abril Fatface.<br> 
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/roboto-min.png">

	<p><strong>Open Sans</strong></p>
	<p>Open Sans is a humanist <em>sans-serif</em> typeface. It is an extremely versatile font and is found all over the web. It has an open and friendly vibe, and is great used for body copy. Pair Open Sans with Merriweather, Oswald or Abril Fatface.<br> 
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/open-sans-min.png">

	<p><strong>Merriweather</strong></p>
	<p>Merriweather is a <em>serif</em> typeface designed to be highly visible on screens. Pair Merriweather with Oswald. Merriweather also works beautifully as a heading typeface, and can be paired with Open Sans or Rubik body copy.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/merriweather-min.png">

	<p><strong>Rubik</strong></p>
	<p>Rubik is a <em>sans-serif</em> typeface characterised by its rounded corners. Pair Rubik with Merriweather, Playfair Display or Lobster 2. Rubik also works well as a heading typeface, and can be paired with Roboto or Open Sans body copy.<br>
	<span class="underline">&lt;link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"&gt;</span></p>
	<img class="font-img" src="assets/vario-css/img/rubik-min.png">

</div>


<div class="card full-screen-card" id="components">
	<h2 id="colors">Add Colors</h2>
	<p><strong>Here are the twelve colors of the Vario library.</strong><br>To add a color, simply add the class listed on the box of that color.<br>They can also be used as text colors by removing the '-bg' from the class.</p>

	<div class="card third-screen-card magenta-bg">.magenta-bg</div>
	<div class="card third-screen-card red-bg">.red-bg</div>
	<div class="card third-screen-card orange-bg">.orange-bg</div>
	<div class="card third-screen-card amber-bg">.amber-bg</div>
	
	<div class="card third-screen-card yellow-bg">.yellow-bg</div>
	<div class="card third-screen-card emerald-bg">.emerald-bg</div>
	<div class="card third-screen-card teal-bg">.teal-bg</div>
	<div class="card third-screen-card light-blue-bg">.light-blue-bg</div>
	
	<div class="card third-screen-card medium-blue-bg">.medium-blue-bg</div>
	<div class="card third-screen-card dark-blue-bg">.dark-blue-bg</div>
	<div class="card third-screen-card dark-grey-bg">.dark-grey-bg</div>
	<div class="card third-screen-card light-grey-bg this4">.light-grey-bg</div>
	
	<br><br>
</div>


<link rel="stylesheet" type="text/css" href="assets/vario-css/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/vario-css/css/alpha.css">
<link rel="stylesheet" type="text/css" href="assets/vario-css/css/style.css">

<script type="text/javascript">
	document.getElementById('title').innerHTML = 'Vario Colour and Font Library';
</script>

