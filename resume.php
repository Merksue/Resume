<!DOCTYPE html>
<html lang="en">
<head>
<!-- The purpose of this document is to provide a template for you to follow.
Your resume will be two files, this one resume_template.html to help you to 
define the CONTENT for your resume and resume.css to help you to define the 
LOOK of your resume. I will try to put a comment tag pointing out the places 
you should fill out with your own content. Most should seem obvious.
-->

<!-- **** you need to put in y our own title below -->
  <title>Gabriel Aboy</title>
     
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

<!-- **** you need to in your own description in the content below -->  
    <meta name="description" content="This is what shows up as a google description so sell yourself!" >

<!-- **** you need to in your name in the content below -->
    <meta name="author" content="Your Name" >

<!-- **** the href below is the name of your style sheet that will define the
look for your resume. -->   
<!--<link rel="alternate stylesheet" type="text/css" href="styletwo.css"title="wacky" />-->



    <link href='style.css' rel='stylesheet' type='text/css' media='screen' title='professional'/>
    <link href="styletwo.css" rel="alternate stylesheet" type="text/css"  media='screen' title='crazy'/>
    <link href='print.css' rel='stylesheet' type='text/css' media='print'/>


    
        <!--WHat are these two style sheets for?-->

    
</head>
    <body id="resume">
    
    <article>
<!-- *************   Your personal information ***************************  -->
<!-- **** change the id here and in the style sheet to  your name -->
<div id="hcardGabrielAboy" class="vcard">

<!-- ****  Of course link to your photo and change the alt description -->
<!--**** <p id="myImage"> placeholder to put image as background</p> -->
 
<!-- ****  put in  your name and your url -->
<h1 id="name">Gabriel Aboy</h1>
<h3 id="WDP"> "Web Designer, Programmer"</h3>
  

<div class="email">
   <span class="type">Email: </span>
        
<!-- ****  notice you need to put your address in twice, once for the link and 
once to display -->     
    <span class="value"><a class="email" href="mailto:robert.erickson@uvm.edu">gaboy@uvm.edu</a></span>
</div>





<!-- ****  type in your contact numbers, delete extra, copy if you need more -->
<div class="tel">
    <span class="type">Cell: </span>
    <span class="value">(305) 815 - 6918</span>
</div>



</div>  


<!-- ****  in all the following span tags put in your address info -->  
<div class="adr">
    <span class="street-address">331 Votey</span>, 
    <span class="locality">Burlington</span>,  
    <span class="region">Vermont</span>, 
    <span class="postal-code">05405</span>
    <span class="country-name">USA</span>
</div>


<!-- ends div class vcard -->







<!-- 
the main code above was modified from the generator found below.
This <a href="http://microformats.org/wiki/hcard">hCard</a> created with 
the <a href="http://microformats.org/code/hcard/creator">hCard creator</a>. 
***********  end of personal information ********************************** -->


<!-- This section is for work that you do that is directly related to your 
career. Internships, projects etc.  if you do not have any GET some, till then
just comment this section out ********************* -->
<div id="profExperience">
<h2>Professional Experience</h2>

<!-- **** notice the comments for a job, to have more than one copy from Begin 
job  to end of job and replace the text as needed. They list the most recent first

change the id coName to the name of the company HERE and in the 
STYLE SHEET if you want to style it.

use google maps, yahoo maps or anyone you like. its neat to click on it to 
see the building.
 -->

<!-- Begin job -->
<ol>
    <li class="job" id="coName"> 
        <span class="dates">1991 - present</span>
        <a href="http://www.uvm.edu" class="company">University of Vermont</a>, 
        
        <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
        validate -->
        <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en-ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=Explore+this+place" 
        class="location">Burlington, VT</a>

        <span class="jobtitle">Student</span>

        <p class="description">Currently I am a student at the University of Vermont. Persuing a proffesional career in Computer Science web design and programming. Aspiring to continue my research in order to run my own business. Entrepreneurship inspired me  </p>
    </li><!-- end of this job -->


<!-- past other jobs here, descending by dates -->


    
    <!-- list web sites and projects here -->
    <li class="job" id="workExamples"><span class="dates">1995 - present</span>
    Websites and Projects
        <ul class="websites">
            <li><a href="https://github.com/Merksue/FinalProject.git">Github</a> Java card game "War"</li>
            <li><a href="https://github.com/Merksue/CSFairTimer.git">Github</a> Computer video game League of Legends interactive Jungle timer.</li>
           
        </ul>
    </li>
    <!-- end web sites and projects -->

</ol>       
</div> <!-- end of your Experience-->





<hr>







<!-- Skill set section *********************************************-->
<div id="skills">
<h2>Skills</h2>
    <ul>
        <li>HTML</li>
        <li>Java</li>
        <li>JQuery</li>
        
    </ul>
    <hr class = "hrsolid">
        <ul>
        <li>CSS</li>
        <li>Python</li>
        <li>Microsoft XP/Vista</li>
        
      
    </ul>
    <hr class = "hrsolid">
        <ul>
        <li>Javascript</li>
        <li>PHP</li>
        <li>OS X</li>

    </ul>
</div> <!-- ends skill sets -->

<!-- Education section *********************************************

only list college education (high school education is not needed.
Always list most recent first 

change the id to the abbreviation for the school.

-->
<hr>








<div id="education">
<h2>Education</h2>

<ol>
    <li class="school" id="uvm">
    <span class="dates">2008 - 2012</span>
    <a href="http://www.uvm.edu" class="institution">University of Vermont</a>, 
    <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en-ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=Explore+this+place" 
class="location">Burlington, VT</a>

    <span class="MajorDegree">Computer Science</span>
   

    <!-- List the most important courses for your major that you have taken (or will take). This gives you some common ground when interviewing and something to talk about. list the NAME not the number. If there is a link for your course put it in but be sure the link will always
    be available. -->
    <h3 class="subtitle">Course of Study </h3>
    <ul class="courses major">
        <li>Descrete Structures</li>
        <li>Advanced Web Design</li>
        <li>Python</li>
        <li>Java</li>
        <li>Statistics</li>
        <li>Calculus</li>
        <li>Biology</li>
    </ul>


    
    </li> <!-- end school  -->

    <!-- add another school here if you attended more than one. Same as with Experience
    just copy and paste the code changing the relevant info. -->




</ol>

</div> <!-- end education division -->











<!-- Work History ***************************************************
This is just what you have been doing to make money, if it is related to your profession then it belongs up above in professional Experience.

Your work history goes here with the most recent first. However, if the work is related to your major then it belongs above in Professional Experience, if they were just jobs to help pay your way, list them here as Work Experience. this is the same as professional
experience only the work is not related to your career but shows that you can work  -->

<div id="experience">
<h2>Work Experience</h2>
<!-- Begin job -->

<ol>
    <li class="job">
        <span class="dates"> DATE - present</span>
        <a href="http://www.gamestop.com/" class="company">GameStop</a>,  
        <a href="http://maps.google.com/" class="location">Williston, Vermont</a>

        <span class="jobtitle">Cashier</span>

        <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
    </li><!-- end of this job -->
</ol>
<ol>
    <li class="job">
        <span class="dates">beginning year - present</span>
        <a href="https://www.prestigemedical.com/" class="company">Prestige Medical Supply</a>,  
        <a href="http://maps.google.com/" class="location">Miami, Florida</a>

        <span class="jobtitle">Factory Worker</span>

        <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
    </li><!-- end of this job -->
    <!-- past other jobs here descending by dates -->


</ol>       
</div> <!-- end of your Experience-->
<hr class = "orig">
<!-- Interests section ************************************************
You have to have something that interests you. This is to let everyone know that you have a life beyond working. -->
<div id="interests">
<h2>Interests</h2>

    <ol>
        <li class="int">
            <p class="discription"> I moved from Miami to Vermont to gain new experiences. Back home I was an experienced diver, spear fisher, water skier all great activities in trade for the mountains. Exploring Vermont I have gained new hobbies and experiences outside my nitch. Pushing myself through such veriety has shaped my character. </p>
        </li>
    </ol>






</div> <!-- ends interests -->
<hr class="orig">
</article>
</body>
</html>