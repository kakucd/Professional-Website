<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Emily Bower Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include "../includes/base.php" ?>
      <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Roboto+Slab|Titillium+Web" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>
  <body>
    <?php include "../includes/emily.php" ?>
    <?php include "../includes/menu.php" ?>
    <div class="row">
	<aside class="col-3">
	<p style="text-align:center;">
	<img src="./images/diploma.png" alt="diploma clipart" class="icon"/></p>
	<header> Education </header>       
           Pacific Lutheran University
           <br>Bachelors of Science in Computer Science
           <br> Minors - Mathematics, Religion
           <br> Expected Graduation: May 2017
	
	<p style="text-align:center;">
	<img src="./images/math.png" alt="math clipart" class="icon" /></p>
        <header>Skills</header>
        <ul> 
   	<li>Strong communication skills in written and oral format</li>
   	<li>Enjoy workinig with a team</li>
   	<li>Good collaboration skills</li>
   	</ul>
	
	<p style="text-align:center;">
        <img src="./images/pencil.png" alt="pencil clipart" class="icon" /></p>
	<header>Languagues</header>
	<ul>
	<li>Java</li>
	<li>C</li>
	<li>PHP</li>
	<li>JavaScript</li>
	<li>HTML5</li>
	<li>CSS</li>
	<li>SQL</li>
	</ul>

	<p style="text-align:center;">        
	<img src="./images/cs.png" alt="computer clipart" class="icon" /></p>                             <header>Software</header>
   	<ul>
	<li>MySQL</li>
	<li>Microsoft Office</li>
	<li>Android Studio</li>
	<li>Intellij</li>
	<li>Eclipse</li>
   	<li>vim</li>
	<li>jEdit</li>
   	</ul>
    </aside>
    <section class="col-9">
    <p style="text-align: center;">
    <img src="./images/time.png" alt="time clipart" class="icon" /></p>
   
    <header> Experience</header>
    <div class="emphasize">
    <h3>Data Analyst/Program Assistant</h3> 
    <p>Location: Tacoma, WA | | Held Position: June 2015 - Present</p>
    <p>Analyze data from outcome surveys of PLU graduates for University marketing and departmental decision-making and then present in meaningful form. Support Career Connections staff in the management and organization of the opportunities database. Modify and create online surveys for the Career Connections office as a mechanism for gathering feedback on offered services.</p>
    </div>
    <div class="emphasize">
    <h3>CSCE Grader</h3>
    <p>Location: Tacoma, WA | | Held Postion: September 2016 - Present</p>
    <p>Grade homework for the Computer Science course, Algorithms. Provide meaningful feedback and corrections on students’ work and use prior knowledge of course to help students be successful.</p>
    </div>
    </section>
      
    <article class="col-9">
    	<div class="emphasize2">
	<p style="text-align: center;">
    	<img class="icon" src="./images/program.png" alt="programming icon"/></p>	
        <header>Projects</header>
        <h3>BirdFeed</h3>
	<p>For my senior project, my group is creating an Android app that will stream data from Twitter using Spark streaming and Java. We are making a restaurant review app for Pike Place Restaurants, and we based our ratings of restaurants on the overall sentiment of the tweets talking about the restaurant. The app allows the users to search for restaurants by category and by proximity. </p>
        <h3>Farkle Web Application</h3>
	<p>Created a web application with a group of peers that allowed the user to play the dice game Farkle against other humans or AIs. This was a Java-based web application.</p>
        <h3>Four-Year Plan Database Project</h3>
	<p>Created a web application using HTML, CSS, Java, JavaScript, and MySQL with a group of my peers that allowed the user to create a four-year plan for a degree based on PLU’s requirements. The user could save multiple schedules in the database, and when a user created a four year plan, the application would let the user know if they were missing any requirements or if they were taking any classes out of order based on pre-requisites.</p>
        <h3>Image Gallery Web Application</h3>
	<p>Created a web application using HTML, CSS, and PHP. User was able to upload and delete multiple images from gallery. The application had a gallery, where the user could click on a preview of an image and enlarge it. The images were stored in a directory on the server.</p>
	</div>
      </article>
    </div>
    </div>
 <?php include "../includes/footer.php" ?> 
  </body>
</html>
