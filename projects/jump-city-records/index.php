<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "jump city records| "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title">Jump City Records</div><div class="project-links"><a href="http://soundcloud.com/jumpcityrecords">Launch Project</a> / <a href="https://github.com/luismqueral/jumpcityrecords">View on Github</a></div>
      <div class="project-description">
        <p><strong>Jump City Records</strong> is an open-source, python-based, generative audio project built in the Fall of 2014. The goal was to create a completely self-sustainable record label that automatically uploads its work to Soundcloud.

        <p>Jump City Records is powered by a variety of scripts performing all of the functions needed to create an "album". This includes: album art generation, selecting source material, mixing the selected samples, lossless outputting, track and album naming, and a readme.txt.

        <p>I was responsible for the design and management for the project, the code was lovingly crafted by <a href="https://twitter.com/overtoom">Michiel Overtoom</a>, a software engineer from the Netherlands, and the illustration below was drawn by <a href="http://mattcarignan.com/">Matt Carignan</a> of Scramble Skates.

        <img class="full-width" src="http://i.imgur.com/OgS5UHF.png">

        <h2>An Introduction</h2>

        <p> For reference, let's begin by listening to a typical Jump City Records track:

          <p><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/180169477&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

        <p> Now this one: </p>

        <p><iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/178314011&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

        <p> It's hard to tell that these are automated, at least from a standpoint of typical algorithmic music generators. There's nothing structural that sounds out, no patterns or schemes you can pick out and try to reverse engineer.

        <p> The reason is because this project is entirely sample-based. Each track released by Jump City Records is generated by mashing together samples from a massive, curated sample bank of field recordings, avant-garde music libraries, other oddities that I've been collecting for the past few years. Hundred upon thousands of pieces of audio that I have, all in either MP3 (320kbps) or losses (FLAC, WAV) format.

        <h2> How it Works </h2>

  <pre><code>jumpcityrecords/
  │
  ├── _albums/
  │
  ├── _assets/
  │   ├── sample folder 1
  │   ├── sample folder 2
  │   └── sample folder 3
  │
  └── src/
  ├── jumpcity.py
  ├── albumart.py
  ├── albumtracks.py
  ├── ... (a few other scripts)
  └── utils.py</code></pre>


        <p>The chart above shows the basic file system for Jump City. There are three main folders:

        <p> <span class="highlight yellow"><code>_albums</code></span> <br>This folder stores the albums that Jump City outputs.

        <p> <span class="highlight yellow"><code>_assets</code></span> <br>This is where all of the audio samples live. Samples must be organized in folders because the script will select one folder per album to draw samples from. This was designed for maximum variation.

        <p><span class="highlight yellow"><code>src</code></span> <br>This folder is where the various python scripts are stored. Everything from generating album artwork to combining and mixing out tracks are all found here.

        <p><strong>The following items are generated when the main script is run:</strong> </p>

        <ul>
          <li> Album Art </li>
          <li> Album Title (generated via Wikipedia)</li>
          <li> Number of Tracks </li>
          <li> Duration of each Track </li>
          <li> Title of Tracks (generated via Wikipedia) </li>
        </ul>

        <p><strong>The chart below should help you visualize the process flow of Jump City:</strong></p>

        <img class="full-width" src="flow.png">

        <h2> Creating a Track </h2>
        <p> The first step Jump City does is selects a random folder <span class="highlight gray"><code>_assets</code></span to pull samples from. This allows me to assign different pools of samples and makes for great unpredictability. I figured that a single, massive folder would get watered down after awhile.

        <p> The selected folder determines the sample bank for the entire album.

        <p>After selecting a folder, the script determines how many tracks are going to be in the album and generates its first track. The script then selects three random audio samples in the defined folder and cuts them to the desired length <strong>(x)</strong>. For longer samples (I have a lot of samples that are over an hour) it randomly crops it at <strong>(x)</strong> duration.

        <p>The mixing algorithm is such that each three tracks are panned a certain way. One track pans hard left, another hard right, and the last one is centered. This system makes the tracks a little bit more interesting to listen to and gives them a "wider" feel.

        <p>The track then needs to be named. To do this, Jump City just selects a random article title from a Wikipedia entry and prints it as the file name (while writing it in the file's ID3 tag).

        <p> The final mixed track exports as a .flac and repeats the process until it reaches the generated track limit.

        <h2> Generating Album Art </h2>
        <p> Here are some examples of of the album art that Jump City generates:
        <p><img class="full-width" style="max-width: 600px;" src="albums.gif">

        <p> You'll notice that the album art is a bit more formulaic than the audio output of Jump City Records.

        <p> The logic just consists of picking a background color, generating two quadrilaterals, assigning them two random colors, and rotating them a randomly generated number of degrees. Then placing a timestamp at the bottom, to indicate time and date of creating (the font used is <a href="https://www.myfonts.com/fonts/adobe/orator/">Orator</a>, incase you're wondering).

        <p> One source of inspiration for these visuals was Dadaist algorithmic art, notably Jean Arp's <a href="http://www.moma.org/learn/moma_learning/jean-hans-arp-untitled-collage-with-squares-arranged-according-to-the-laws-of-chance-1916-17">chance collages</a>.


        <h2>Ongoing Work</h2>
        This project is still actively being developed and improved. As the project matures, I'll be looking out for the following improvements
        <ul>
          <li> <em>Album art generation:</em> Think of another visual system that could be used for future Jump City releases.<br>
          <li> <em>More high quality samples and sounds</em>: From wherever I can find them. Data sources like Youtube aren't out of the question either, but it's not ideal due to low quality audio.

          <p> If you stumbled upon this project, remember that it's entirely open-source. Feel free to do what you'd like to it, just preserve the names of the people who helped build it!

        </ul>
        <h2>Further Reading</h2>

        <p> Premiere of Jump City Records at Livestream HQ in Bushwick! (I'm the first presenter):

        <div class="embed-container">
          <iframe src="http://new.livestream.com/accounts/8720916/events/3631228/videos/73797509/player?autoPlay=false&height=360&mute=false&width=640" width="640" height="360" frameborder="0" scrolling="no"></iframe>
        </div>

        <!-- footer -->
        <div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
      </div>
    </div>
  </body>
</html>
