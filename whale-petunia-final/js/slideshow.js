//The slideshow requires five things: 
// 1) all "slideshowX.png" files must be in a single folder (example: slides)
// 2) You need to set NUMBER_OF_SLIDES to the number of files in the prevously mentioned folder
// 3) You need to create a new img element for each slide, and point it to the file, like so:
// <div id="slideshow">
// 	  <img src="./html/img/slideshow/slideshow1.png"></img>
// 	  <img src="./html/img/slideshow/slideshow2.png"></img>
// 	  <img src="./html/img/slideshow/slideshow3.png"></img>
// </div>
// 4) Create new circles beneath the slideshow to match the number of images in the slideshow.
//    Make sure that the id of each circle is set as below
// <div style="text-align: center">
// 	 <div id="circle1" class="circle"></div>
// 	 <div id="circle2" class="circle"></div>
// 	 <div id="circle3" class="circle"></div>
// </div>


$(document).ready(function(){ //wait until page is fully loaded

	//the slideshow code uses this to determine a few things. Make sure this is set correctly!			
	const NUMBER_OF_SLIDES = 4;

	//get the width of the side-scrollable area in the 'sldieshow' div and divide by NUMBER_OF_SLIDES so that the 
	//scrollLeft under setInterval knows by how much to scroll
	var slide_width = document.getElementById('slideshow').scrollWidth / NUMBER_OF_SLIDES; 

	//used as a reference for what slide to switch to in the coming setInterval()
	var slide_number = 1;		

	//sets which circle is highlighted depending on the integer fed into it
	var setCircle = function(input_circle){

		//set all circles to grey
		for(x=1;x <= NUMBER_OF_SLIDES; x++){
			$("#circle" + x).css({
				"background-color": "lightgrey"
			});	
		}
		
		//set a circle to be bright pink, based on input_circle
		$("#circle" + input_circle).css({
			"background-color": "green"
		});
	}

	//initially setting the first circle to be bright pink, before the slideshow starts manipulating them
	setCircle(1);

	//initially set to changing slide every 4 seconds(excluding the 500ms slide effect), slide to the next image, and set the appropriate circle to be bright pink
	setInterval(function(){
		if (slide_number < NUMBER_OF_SLIDES){
			//move to next slide
			$("#slideshow").animate({
				scrollLeft: slide_width * slide_number
			},500);					
			slide_number++;	
		}else{
			//go to the first slide
			$("#slideshow").animate({
				scrollLeft: 0
			},500);
			slide_number = 1;
		}
		setCircle(slide_number);

	}, 3000);	
});