<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
	<h1>VarioJS Basics</h1>
	<p>Reusable functions for common JavaScript tasks. Around 200 lines of code. No jQuery required. Still in Beta.</p>
	
<!-- Update content on event
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 15%">
  		<h4>Click the button to change the text</h4>
  		<button onclick="UpdateContent(Var1, 'Paragraph1')">Click me!</button>
  		<p id="Paragraph1">Hello!</p>

		<pre>
	HTML: 
		&lt;button onclick="UpdateContent(Var1, 'Paragraph1')"&gt;Click me!&lt;/button&gt;
		&lt;p id="Paragraph1"&gt;Hello!&lt;/p&gt;

	JS:
		var Var1 = 'Goodbye!';
		</pre>

	</div>
</div>



<!-- Update attribute on event
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Change attributes</h4>
  		<p>Change attributes, such as href, src, class etc on an event such as click. In this case the URL on the link will change when you click the button. You can also change other attibutes, such as class names and images.</p>
  		<button onclick="UpdateAttribute('https://facebook.com', 'Link1', 'href')">Click me!</button>
  		<a href="https://google.com" target="_blank" id="Link1">Go to..?</a>

		<pre>
	HTML: 
		&lt;button onclick="UpdateAttribute('https://facebook.com', 'Link1', 'href')"&gt;Click me!&lt;/button&gt;
		&lt;a href="https://google.com" target="_blank" id="Link1"&gt;Go to..?&lt;/a&gt;
		</pre>
	</div>
</div>



<!-- Get and update attribute on event
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Get Input and Update Content</h4>
  		<p>Get the content of an input field on an event such as 'onchange' or 'onclick'. Run some JavaScript logic, and put the updated content back on the page.</p>
  		
  		<input type="text" name="input1" id="Input1" oninput="UpdateMe('Input1');" placeholder="Type here..." >
  		<div id="Div1"></div>

		<pre>
	HTML: 
		&lt;input type="text" name="input1" id="Input1" oninput="UpdateMe('Input1');" placeholder="Type here..."&gt;
		&lt;div id="Div1"&gt;&lt;div&gt;

	JS:
		function UpdateMe(Input) {
			GetContent(Input);

			Output = 'You typed ' + Content.length + ' characters';
			
			UpdateContent(Output, 'Div1')
		};
		</pre>
	</div>
</div>

<!-- Create new element node
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Create New Element Node</h4>
  		<p>Create a new HTML element.</p>
  		<p></p>
  		<div id="List1">
  			<button onclick="CreateNode('List1', 'a', 'Hello', 'class', 'block')">Click me!</button>
  		</div>

		<pre>
	HTML: 
		&lt;div&gt;
			&lt;button onclick="CreateNode(ParentId, TagType, Text, AttributeType, AttributeName)"&gt;Click me!&lt;button&gt;
		&lt;div&gt;
		</pre>
	</div>
</div>

<!-- Hide or show
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Hide or show</h4>
  		<p>Optionally enter a variable as the second parameter. Recommended for performance if you intend to use this function frequently.</p>
  		<button onclick="HideOrShow('Paragraph2', 'none')">Hide!</button>
  		<button onclick="HideOrShow('Paragraph2', 'block')">Show!</button>
  		<p id="Paragraph2">Hello!</p>

		<pre>
	HTML: 
		&lt;button onclick="HideOrShow('Paragraph2', 'none')"&gt;Hide!&lt;/button&gt;
		&lt;button onclick="HideOrShow('Paragraph2', 'block')"&gt;Hide!&lt;/button&gt;
		&lt;p id="Paragraph2"&gt;Hello!&lt;/p&gt;
		</pre>
	</div>
</div>

<!-- Toggle class
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Toggle class</h4>
  		<p>Similar to above, but more useful in some situations.</p>
  		<button onclick="ToggleClass('Paragraph3', 'hide')">Toggle!</button>
  		<p id="Paragraph3">Hello!</p>

		<pre>
	HTML: 
		&lt;button onclick="ToggleClass('Paragraph3', 'hide')"&gt;Toggle!&lt;/button&gt;
		&lt;p id="Paragraph3"&gt;Hello!&lt;/p&gt;
		</pre>
	</div>
</div>

<!-- Face In or Out
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Fade in or out</h4>
  		<p>Without using jQuery.</p>
  		<button onclick="FadeOut('Paragraph4')">Fade out!</button>
  		<button onclick="FadeIn('Paragraph4')">Fade in!</button>
  		<p id="Paragraph4">Hello!</p>

		<pre>
	HTML: 
		&lt;button onclick="FadeOut('Paragraph4')"&gt;Fade out!&lt;/button&gt;
		&lt;button onclick="FadeIn('Paragraph4')"&gt;Fade in!&lt;/button&gt;
		&lt;p id="Paragraph4"&gt;Hello!&lt;/p&gt;

	CSS:
		@-webkit-keyframes fadein {
		    0% {opacity: 0;}
		    100% {opacity: 1;}
		}
		@keyframes fadein {
		    0% {opacity: 0;}
		    100% {opacity: 1;}
		}
		.FadeIn {
		  opacity:1;
		  -moz-animation   : fadein 1s linear;
		  -webkit-animation: fadein 1s linear;
		  animation        : fadein 1s linear;
		}

		@-webkit-keyframes fadeout {
		    0% {opacity:1;}
		    100% {opacity:0;}
		}
		@keyframes fadeout {
		    0% {opacity:1;}
		    100% {opacity:0;}
		}
		.FadeOut {
		  opacity:0;
		  -moz-animation   : fadeout 1s linear;
		  -webkit-animation: fadeout 1s linear;
		  animation        : fadeout 1s linear;
		}
		</pre>
	</div>
</div>

<!-- Smooth scroll
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Smooth scroll</h4>
  		<p>Without jQuery.</p>
  		<button onclick="ScrollTo(Paragraph3, 600);">Scroll!</button>

		<pre>
	HTML: 
		&lt;button onclick="ScrollTo(Paragraph3, 600);"&gt;Hide!&lt;/button&gt;
	JS:
		Paragraph3 = document.getElementById("Paragraph3").offsetTop;
		</pre>
	</div>
</div>

<!-- Lazy load
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Lazy load</h4>
  		<p>Load less important files once the page has loaded.</p>

		<pre>
		window.onload = function() {
			LazyLoad('script', 'js/script.js');
		};
		</pre>
	</div>
</div>

<!-- Download
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
	<div class="twelve column" style="margin-top: 20%">
  		<h4>Download</h4>
  		<p id="thanks">This project is still in Beta. But if you want, you can click below to download the file.</p>
		<a href="assets/js/vario.js" download onclick="UpdateContent(Var1, 'Cheers!')">Download</a>
		<p></p>
	</div>
</div>


<style type="text/css">
@-webkit-keyframes fadein {
    0% {opacity: 0;}
    100% {opacity: 1;}
}
@keyframes fadein {
    0% {opacity: 0;}
    100% {opacity: 1;}
}
.FadeIn {
  opacity:1;
  -moz-animation   : fadein 1s linear;
  -webkit-animation: fadein 1s linear;
  animation        : fadein 1s linear;
}

@-webkit-keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
@keyframes fadeout {
    0% {opacity:1;}
    100% {opacity:0;}
}
.FadeOut {
  opacity:0;
  -moz-animation   : fadeout 1s linear;
  -webkit-animation: fadeout 1s linear;
  animation        : fadeout 1s linear;
}
</style>

</div>