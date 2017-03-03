<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casey Kaku Resume</title>
      <?php include "../includes/base.php"; ?>
      <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Roboto+Slab|Titillium+Web" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>
  <body>
    <?php include "../includes/casey.php"; ?>
    <?php include "../includes/menu.php"; ?>
      <div class="row">
      	<aside class="col-3">
        <p style="text-align:center;">
        <img src="./images/diploma.png" alt="diploma clipart" class="icon"/></p>
        <header>
          Education
        </header>
        Pacific Lutheran University<br>Bachelor's of Arts in Computer Science
        <br> Minor - Business Administration
        <br> Excepted Graduation: May 2017
        <p style="text-align:center;">
        <img src="./images/math.png" alt="math clipart" class="icon"/></p>
    	<header>Skills</header>
   	  <ul> <li>Detail Oriented</li>
	    <li>Problem-solver</li>
            <li>Good Communicator</li>
            <li>Team-oriented</li>
            <li>Leadership and Public Speaking</li>
          </ul>
        <p style="text-align:center;">
        <img src="./images/pencil.png" alt="pencil clipart" class="icon"/></p>
        <header>Languages</header>
          <ul><li>Object-Oriented: Java, C++</li>
             <li>Scripting: PHP, Python</li>
             <li>Web Development: HTML5, CSS, SaSS</li>
             <li>Functional: scheme</li></ul>
        <p style="text-align:center;">
        <img src="./images/cs.png" alt="computer clipart" class="icon"/></p>  
        <header>Software</header>
          <ul><li>Eclipse</li>
            <li>Atom</li>
            <li>Android Studio</li>
            <li>vi</li>
            <li>Intellij</li>
            <li>Microsoft Office</li></ul> 
        </aside>
        <section class="col-9">
        <p style="text-align: center;"><img src="./images/time.png" alt="time clipart" class="icon"/></p>
        <header>
        Past Experiences
        </header>
        <div class="emphasize">
        <h3>Pacific Lutheran University School of Business Student Intern</h3>
       <p>Location: Tacoma, WA  | |   Held Position: September 2015 - May 2017 </p> 
       <ul><li>Facilitated distribution of information to keep students and faculty updated on upcoming events, program changes, and new opportunities avaliable.</li>
       <li>Assisted with the management, organization, and documentation of financial records to be processed for accounting purposes.</li></ul>
       </div>
       <div class="emphasize2">        
       <h3>Smith Brother's Farms Brand Ambassador</h3>
       <p>Location: Kent, WA   | |   Held Position: May 2016 - August 2016 </p> 
       <ul><li>Promoted the company by quickly learning about the services and products offered by Smith Brother's Farms to present the information knowledgably to perspective clients and distributors at local events.</li>
       <li>Worked with sales representatives to ensure that prespective and current customer were updated on company changes and improvements that could better serve their needs.</li></ul>
       </div>
       <div class="emphasize">        
       <h3>Auburn School District 408 Assistant Gymnastics Coach</h3>
       <p>Location: Tacoma, WA   | |   Held position: November 2014 - Present </p> 
       <ul><li>Developed repertoire quickly to better serve clients in an industry I had no prior experience in.</li>
       <li>Maintained high customer serivce standard that has made Emerald Downs the first recommended tourist activity in the Auburn area by Trip Advisor</li></ul>
       </div>
      </section>
      <article class="col-9">
      <p style="text-align: center;"><img class="icon" src="./images/program.png" alt="programming icon"/></p>
        <header>Projects</header>
      <div class="emphasize2">
        <h3>Four-Year Plan Database Project</h3>
        <p>Created a database with web application access for students to create class schedules and track their progess towards various degrees in computer science at Pacific Lutheran University. 
        <ul><li>Langauge: Java, CSS, html</li>
          <li>Editors: Eclipse</li>
          <li>Software: Apache</li></ul>
        <h3>BirdFeed</h3>
        <p>Android app that will display top rated restaurants near the user's location. Will allow the user to define distance radius, look up restaurants by name and cuisine, and limit searches based upon dietary preferences/restrictions. The app will get the information from a NoSQL database. The database will stream data from Twitter to fine what are the most popular/ most talked about restaurants in a given area. Data on the individual restaurants will also be saved in the database through data scraping or manual entry. This project was completed with two other group members as a senior capstone project.</p>
        <ul><li>Langauge: Java</li>
          <li>Editors: Android Studio</li>
          <li>Software: Sparx</li></ul>
      </div>
      </article>
    </div>
    <?php include "../includes/footer.php"; ?>
  </body>
</html>
