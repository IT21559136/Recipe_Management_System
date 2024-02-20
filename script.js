const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
var Big = document.getElementById("MainImg");
var Small = document.getElementsByClassName("S_Img");


let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}


  Small[0].onclick = function(){
    Big.src = Small[0].src;
  }
  Small[1].onclick = function(){
    Big.src = Small[1].src;
  }
  Small[2].onclick = function(){
    Big.src = Small[2].src;
  }
  Small[3].onclick = function(){
    Big.src = Small[3].src;
  }


// function loadData(data){
// 	if(data=='btn1'){
// 		document.getElementById('MainImg').src="images/iphone.jpg";
// 		document.getElementById('Image2').style.width="300px";
// 		document.getElementById('Image3').innerHTML="The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface. The iPhone runs the iOS operating system, and in 2021 when the iPhone 13 was introduced, it offered up to 1 TB of storage and a 12-megapixel camera.The first-generation iPhone came preloaded with a suite of Apple software, including iTunes, the Safari web browser and iPhoto. Internet Message Access Protocol and Post Office Protocol 3 email services were integrated with the device."
// 	}
// 	else if(data=='btn2'){
// 		document.getElementById('phoneimg').src="images/samsung.jpg";
// 		document.getElementById('phonepara').innerHTML="Samsung, South Korean company that is one of the world’s largest producers of electronic devices. Samsung specializes in the production of a wide variety of consumer and industry electronics, including appliances, digital media devices, semiconductors, memory chips, and integrated systems. It has become one of the most-recognizable names in technology and produces about a fifth of South Korea’s total exports.Samsung was founded as a grocery trading store on March 1, 1938, by Lee Byung-Chull. He started his business in Taegu, Korea, trading noodles and other goods produced in and around the city and exporting them to China and its provinces."
// 	}
	
// 	else if(data=='btn3'){
// 		document.getElementById('phoneimg').src="images/nokia.jpg";
// 		document.getElementById('phonepara').innerHTML="Nokia Corporation is the world's largest manufacturer of mobile phones, serving customers in 130 countries. Nokia is divided into four business groups: Mobile Phones, Multimedia, Enterprise Solutions, and Networks. The Mobile Phones group markets wireless voice and data products in consumer and corporate markets. The Multimedia segment sells mobile gaming devices, home satellite systems, and cable television set-top boxes. The Enterprise Solutions group develops wireless systems for use in the corporate sector. Wireless switching and transmission equipment is sold through the company's Networks division. Nokia operates 15 manufacturing facilities in nine countries and maintains research and development facilities in 12 countries."
// 	}
// }



MainImg
Image2
Image3
Image4
recipeName
originCountry
step1
step2
step3
step4