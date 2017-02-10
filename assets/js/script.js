// logic for the website itself, not the library

// function GoTo(Page) {
// 	event.preventDefault();
// alert(Page);
// 	switch(Page) {
// 	    case 'home':
// 			Heading = 'Basic Page';
// 			Message = 'This index.html page is a placeholder with the CSS, font and favicon. It\'s just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.';
// 	        break;
// 	    case 'about':
// 			Heading = 'About';
// 			Message = 'More about us';
// 	        break;
// 	    default:
// 			Heading = '404';
// 			Message = 'An error occured';
// 	}

// 	UpdateContent(Heading, 'heading');
    
// 	UpdateContent(Message, 'message');
// };

var width = document.documentElement.clientWidth;

if (width < 900) {
	$(".menu").click(function(){
	    $(".menu").toggleClass("hide");
	});
} else {
	$(".menu").toggleClass("hide");
	$(".close").toggleClass("hide");
}

var Var1 = 'Goodbye!';


function UpdateMe(Input) {
	GetContent(Input);

	Output = 'You typed ' + Content.length + ' characters';
	
	UpdateContent(Output, 'Div1')
};

Paragraph3 = document.getElementById("Paragraph3").offsetTop;





















