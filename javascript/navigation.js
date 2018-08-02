

var aboutMeButton = document.getElementById('aboutMe');

aboutMeButton.addEventListener('click', aboutMe);

var myWorkButton = document.getElementById('myWork');
myWorkButton.addEventListener('click', myWork);

var heading = document.getElementById('pageHeading');
var content = document.getElementById('content');
content.addEventListener("load", aboutMe);



function myWork(){
  content.innerHTML = "<h1 id=pageHeading>My Work</h1><a href='../WEBSCRP'>Second year university project (Shopping Website)</a>";
}

function aboutMe(){
  var textContent = "<h1 id=pageHeading>About me</h1>";
  textContent += "<p>I am a student at the <a href='http://www.port.ac.uk/'>University Of Portsmouth</a> studying Computer Science</p>";
  content.innerHTML = textContent;
}
