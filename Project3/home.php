<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
      <?php include "base.php"; ?>
      <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Roboto+Slab|Titillium+Web" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="./css/style.css"/>
  </head>
  <body>
    <?php include "./includes/header.php"; ?>
    <?php include "./includes/menu.php"; ?>
 	<div class="row">
      <section class="col-12" style="text-align: center;" >
        <header>
          Welcome
        </header>
        This website was created for a web development project for an undergratuate computer science course at Pacific Lutheran University. The entire website was coded by PLU seniors Emily Bower and Casey Kaku, expected to graduate in May 2017, in a combined effort for a final grade. Relevant sources have been cited on the citations page. All information has been provided by Emily Bower and Casey Kaku. We claim that all details are true, however may not be completely up-to-date. On this website you will find several pages about each of us detailing our education, work experiences, realted work/projects, and occupational aspirations. We hope you enjoy what you find! Both of us can be reached on the contact form listed in the menu. We're just two computer science students looking for jobs after we graduate from Pacific Lutheran University this spring.
      </section>
      <article class="col-12">
      <p class="emphasize2" style="text-align: center;">
        <img src="./images/math.png" alt="math icon" class="icon"/>
        <img src="./images/pencil.png" alt="pencil icon" class="icon"/>
        <img src="./images/program.png" alt="programming icon" class="icon"/>
        <img src="./images/time.png" alt="time icon" class="icon"/>
        <img src="./images/thumbs.ico" alt="thumbs up icon" class="icon"/>
      </p> 
      </article>
       <article class="col-6">
        <header>
          Emily Bower
        </header><a href="emily/resume">
        <img class="col-12" src="./images/em.png" alt="Emily Profile" title="This is Emily Bower, a senior at Pacific Lutheran University"/></a>
      </article>
      <article class="col-6">
      <header>Casey Kaku</header>
        <a href="casey/resume">
        <img class="col-12" src="./images/caseyprofile.jpg" alt="Casey Profile" title="This is Casey Kaku, a senior at Pacific Lutheran University"/></a>
      </article>
	</div>
    <?php include "./includes/footer.php"; ?>
  </body>
</html>
