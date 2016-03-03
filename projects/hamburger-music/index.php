<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "hamburger music | "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title">Hamburger Music</div>
      <div class="project-links"><a href="http://hamburgermusic.tumblr.com">Launch Project</a> / <a href="https://github.com/luismqueral/hamburger_music">View on Github</a></div>

      <!-- content -->
      <img class="full-width" src="hamb.png">

      <div class="project-description">

	   			<p>Hamburger Music is a generative poetry project that began in the summer of 2014. </p><p>It’s powered by a <a href="https://github.com/luismqueral/hamburger_music">python script</a> that scrapes words and phrases from Youtube closed -captions. In turn, the snippets of prose created by this script are used to power my personal twitter account and a poetry blog of the same name.

	   			</p><p>It was written by <a href="https://twitter.com/elonbing">Elon Bing</a>, a talented young developer from the Netherlands.

	   			</p><p><strong>Some examples</strong>:</p>

	   			<div class="quote">
	   				“I am God…<br>
		   			little bit to deal with there.<br>
			   		Those lost memories…<br>
		   			you’re actually at.<br>
		   			Now I am just holding on to it”
		   		</div>

	   			<div class="quote">
		   			<p>“I’ve given you 100% already<br>
		   			I secretly love you 100% <br>
		   			I’ve given you 100% already <br>
		   			Harmful.”
		   		</p></div>


	   			<h2>How it Works</h2>

	   			<p>When run, the script performs the following:</p>

	   			<ol>
  	   			<li>Selects a random Youtube video</li>
  	   			<li>Scrapes one or more lines from the selected video's <a href="http://stackoverflow.com/questions/23665343/get-closed-caption-cc-for-youtube-video">closed-captions</a></li>
  	   			<li> Places those lines on top of each other</li>
            <li> Outputs the resulting combination (or single caption) as a .txt document</li>
  	   			<li> Repeats (x) times, if noted </li>
	   			</ol>

	   			<p>That’s it. After you run it, you'll up with a folder full of .txt documents with which you can do whatever you like. It’s a great way to generate lots of random snippets of writing.</p>

	   			<p>Note that the closed captions fetched from YouTube are only those that were entered in manually (getting automated captions is <a href="http://stackoverflow.com/questions/14013431/extract-automatic-captions-from-youtube-video">kind of complicated</a>). </p>

	   			<h3>Structure &amp; Variables</h3>

	   			<p>"Settings.py" lays out the variables and filters we can use to control the output of this script:</p>

	   			<pre><code class="hljs python">POEM_LENGTH=5
MINSUBLENGTH=3
MAX_LINES_PER_VIDEO=2
SAVE_TO_FILE=True
POEM_BASENAME="Poem-"
POEM_EXTENSION=".txt"
POEM_PATH="/path/to/poetry/dir/"
NUMBER_OF_POEMS=50
WORDRANGE=xrange(3,6)
#WORDRANGE=[1,3,7,8]
#WORDRANGE=[6]
CAPITALIZE=True</code></pre>

	   			<p><span class="highlight yellow"><code>POEM_LENGTH</code></span> <br> This controls the amount of "lines" that you want in your poem. As such, this also determines how many captions are scraped. So, as an example, setting it to 5 might get you something like:</p>

	   			<div class="quote">
	   			No? ok… *crying intensifies*<br>
	   			But then again<br>
	   			Are more likely to receive clicks.<br>
	   			Is showing to potential customers.<br>
	   			THIS MORNING.
	   			</div>

	   			<p><span class="highlight yellow"><code>MINSUBLENGTH</code></span> <br>The minimum length in characters for a caption. This was included so that we could avoid single letters or two letter words from being entire lines (though if you're into that kind of thing, just comment it out!)</p>

	   			<p><span class="highlight yellow"><code>MAX_LINES_PER_VIDEO</code></span> <br>The amount of lines scraped from a single video. Setting this to a higher number gives higher performance but cuts down on the output’s “randomness”.</p>

	   			<p><span class="highlight yellow"><code>SAVE_TO_FILE</code></span> <br>This is so that the script outputs your poems as .txt documents. Setting this to "False" will print the result directly in the terminal.</p>

	   			<p><span class="highlight yellow"><code>NUMBER_OF_POEMS</code></span> <br>This setting allows you to repeat the script after it finishes creating its poem.</p>

	   			<p><span class="highlight yellow"><code>WORDRANGE</code></span> <br>There are a few different styles of this variable:
	   			</p><ul>
		   			<li><span class="highlight gray"><code>xrange(x,y)</code></span> - Allows you to return anywhere from x to y words. Setting this to (3,6), as shown in the example above, will only return captions in that word range.</li>
		   			<li><span class="highlight gray"><code>[w,x,y,z]</code></span> - Allows you to specifically select multiple word number constraints. So in the example above, [1,3,7,8], will only return captions with either one, three, seven, or eight words.</li>
		   			<li><span class="highlight gray"><code>[x]</code></span> - Will only return captions based on a single variable. Above, we use [6] as an example, which will only grab captions with six words.</li>
	   			</ul>

	   			<p>Note that <span class="highlight gray"><code>WORDRANGE</code></span> will <em>not</em> truncate or modify captions. It simply returns captions that meet that criteria. Also note that only one <span class="highlight gray"><code>WORDRANGE</code></span> variable type can be used at once.</p>

	   			<p><span class="highlight yellow"><code>CAPITALIZE</code></span> <br>Setting this to "True" will capitalize the first letter of each line. Setting it to "False" will return raw formatting (which may or may not be capitalized).</p>

	   			<h2> Filtering Content </h2>
	   			<p>Also included is a feature that allows you to white or blacklist certain words or phrases:

	   			</p><pre><code class="python hljs">WHITELIST=[
<span class="hljs-string">'awesome'</span>,
<span class="hljs-string">'I\'m hungry'</span>,
<span class="hljs-string">'driveway'</span>
]

<span class="hljs-comment">#WHITELIST=open('/path/to/whitelist.txt').read().splitlines()</span>

BLACKLIST=[
<span class="hljs-string">'New York'</span>,
<span class="hljs-string">'Los Angeles'</span>,
<span class="hljs-string">'don\'t mess with me'</span>
]

<span class="hljs-comment">#BLACKLIST=open('/path/to/blacklist.txt').read().splitlines()</span></code></pre>

				<p> New additions to the whitelist or blacklist should follow the convention seen above. Don't forget to include 'single quotes' for each new word or phrase.

				<p> To create an external whitelist or blacklist, create a text document with your words and phrases separated by line break and change <span class="highlight gray"><code>path/to/</code></span> to point to that file. This can make lists that are long easier to manage.

				<p> If you want to disable these lists, you can comment them out or leave them blank.


	   			</p><h2>Further Reading</h2>
	   			<p> During this project, I stumbled across an poet by the name of <a href="https://www.wikiwand.com/en/Kenneth_Goldsmith"> Kenneth Goldsmith</a>. He's an advicate of <em> Plagerism as Content </em>, a hopelessly new media-centric term describing the kind of algorithmic, data-fueled poetry that has been making its rounds during the early part of the Information Era. I encourage anyone who is interested in this kind of work to look him up. </p>
          <p>Here's a talk he did a while back entitled "On Uncreative Writing":

          <div class="embed-container">
	   				<iframe width="560" height="315" src="https://www.youtube.com/embed/FEhMR0U6oz8" frameborder="0" allowfullscreen=""></iframe>
	   			</div>

	   			<p>I was also heavy into <a href="https://en.wikipedia.org/wiki/Dada">Dada stuff</a> when I made this.</p>

          <!-- footer -->
          <div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
      </div>
  </body>
</html>
