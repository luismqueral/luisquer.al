<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "teacherquest | "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title-img"><img src="tq-logo.svg" style="width:180px;" alt="TeacherQuest Logo"></div>
      <div class="project-links"><a href="http://teacherquest.org">View Project</a> / <a href="http://blenderbox.com/projects/teacherquest">View Blenderbox Case Study</a></div>

      <!-- content -->
      <div class="project-description">
     		<p>TeacherQuest is a professional development workshop for educators designed to teach game-design and the fundamentals of play-based learning. During this workshop, teachers learn how to create fun, interactive learning experiences for their students.
        <p>The main goal of this project was to translate TeacherQuest's in-person workshops into an online experience.
        <p>The result was a hand-crafted Ruby-on-Rails application designed to match the workflow of the in-person sessions, while allowing for scalability as the program increases in popularity.
        <p>I served as the lead user-experience designer for the project, along side a <a href="#">developer</a> and a <a href="#">visual designer</a>.

        <!-- workflow -->
        <h2>How TeacherQuest Works</h2>
        <p>The online teacherquest experience follows a "call and response" style workflow.
        <p>TeacherQuest administrations post game-making challenges to their "Cohorts" (small groups of local participants), and the users would then reply with creative responses.
        <p>There are two different types of administrator-created challenges:
        <p><span class="highlight yellow"><code>PlayQuicks</code></span>
        <br>Short, weekly challenges that are designed to take no longer than a few hours.
        <p><span class="highlight yellow"><code>Design Challenges</code></span>
        <br>In-depth, Bi-Monthly challenges that require a longform response.
        <p>These two pieces of content are the centerpiece of the application, and the user workflow is designed to revolve around these two concepts.

        <!-- onboarding -->
        <h2>Onboarding</h2>
        <p>We learned that teachers would be first introduced to the TeacherQuest online towards the end of their in-person workshops. Administrators planned on walking through the registration process together.
        <p> As a result, onboarding was designed to help users fill out their profile information.
        <!-- onboard screenshot -->
        <div class="browser">
          <div class="frame">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="onboard.png" class="full-width" alt="A nice description">
        </div>



        <!-- dash -->
        <h2>The Dashboard</h2>
        <p>After creating an account, the user is taken to the dashboard screen.
        <p> This page serves as a springboard to the two different types of challenges that will be offered throughout the session. Users can also see what kind of activity has been posted since they last logged in.

        <!-- onboard screenshot -->
        <div class="browser">
          <div class="frame">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="dashboard.png" class="full-width" alt="A nice description">
        </div>

        <!-- playquicks & design challenges -->
        <h2>Playquicks & Design Challenges</h2>
        <p> After administrators post either Playquicks or Design Challenges, users then respond with their thoughts.
        <p> Design Challenge responses contain a series of structured headlines which can be modified when creating design challenges in the CMS.
        <p> Users can also tag multiple authors in their Design Challenge responses.
        <!-- onboard screenshot -->
        <div class="browser">
          <div class="frame">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="dc-response.png" class="full-width" alt="A nice description">
        </div>


        <!-- comments -->
        <h2>Commenting</h2>
        <p>The commenting system was a collaboration across Blenderbox's UX, Visual Design, and Development teams.
        <p>The goal was to encourage users to comment on eachother's submitted content. They can also flag content to the TeacherQuest team that they found particularly useful.

        <!-- onboard screenshot -->
        <div class="browser">
          <div class="frame">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="comment.gif" class="full-width" alt="A nice description">
        </div>

        <!-- homepage -->
        <h2>The Homepage</h2>
        <p>The last step in the design of TeacherQuest was creating the homepage. This page acts as a platform for marketing the program as a whole.
        <p>We deemphasized the signup process (since at the time of launch, public registrations were not possible) and focused on the value proposition of the workshop.

        <!-- onboard screenshot -->
        <div class="browser">
          <div class="frame">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <img src="homepage.png" class="full-width" alt="A nice description">
        </div>
      </div>

      <!-- footer -->
      <div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
  </body>
</html>
