<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "synesthesia | "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title">Synesthesia</div>

      <!-- content -->
      <div class="embed-container"><iframe src="https://www.youtube.com/embed/alMIWxy2Rqg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>

      <div class="project-content">
        <p>This was an assignment for a split visual/performing arts class at UMBC.

          <p> The instructor, Heather Boaz, wanted us to create a piece that encompassed the Dada notion of randomness and chance. Though it was a pretty primitive project, I think it was really important for me in regards to my interest in Dadaist and algorithmic art.

          <p><strong>The prompt was as follows:</strong>

          <div class="quote">"Create a work of art that, who outcome is determined by a series of rules and/or restrictions.
          <br> Be sure that these rules are in some way related to your interpretations of chance and control."</div>

          <p> There were also a few questions to help the class get started and to help us think more philosophically about the project:

          <div class="quote">Consider what it means to relinquish control in your artwork. In what other ways do you relinquish control?"
          <p>Consider what control means to you...In what ways do you attempt to control the world around you?"</div>

          <p>I was interested in crafting an audio/visual piece, but didn't really know where to start. Meanwhile, at around this time, I was introducing myself to sound artists like Alva Noto and Stockhausen who also use aspects of change and liberal experimentation to help guide their works.

          <p><strong>After some rough drafts, I came up with the following rules and constraints:</strong>

          <ul>
            <li> Assign each note of a musical scale a number and a color. A= 1, Blue; B=2,Green; etc.
            <li> Using a string of randomly generated numbers, assign four layers of 35 quarter notes (135 notes total) to a single, 35/4 measure.
            <li> In a video editing software (I used premiere), set each of the 7 total colors to 25% opacity, and layer them according to the order in which they appear on a score.
          </ul>

          <p> To create the random numbers (1-8), you can use this simple bash command:

          <pre><code>$ echo $[ 1 + $[ RANDOM % 8 ]]</code></pre>

          <p> Alas, the final score!

          <img src="score.png" class="full-width">

          <p> The video above shows all of the moving parts. To generate the audio, I think I used Fruity Loops or Ableton Live (I don't remember).

          <p> However, one random thing I <em>do</em> distinctly remember about its production is that I used square waves to represent each note. At first, I considered using sine waves, but it didn't really have the sonic impact I was interested in. The result is this great sequence of dissonant and clean sounding wave of chords, slapping against a sea of color.

          <p> Overall, I enjoy reflecting about this piece. It's very simple and didn't really take me too long to produce, but it was an important first step in the appreciation of algorithmic art. Moreover, in Prof. Boaz's assigned readings, I learned about artists embracing Dadaist principles in all forms, whether it be installation, performance, music, or film. There's no doubt that this piece helped me assign an identity to my future work.
  		</div>

  		<!-- footer -->
  		<div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
  	</div>
  </body>
</html>
