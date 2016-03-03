<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "showhaus | "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title">Showhaus</div>
      <div class="project-links"><a href="http://showhaus.org">Launch Project</a></div>

      <!-- content -->
      <div class="project-description">

	   			<p>Showhaus is a local music and performance art classifields designed to make navigating local music scenes a bit easier.
          <p>It's powered by an AngularJS backend and uses a specially designed PHP parser to automatically scape relevant Facebook events.
          <p> The goal is to provide a platform for local musicians and promoters to openly post their events, while utilizing Facebook's API to automatically scrape events that are already being promoted on Facebook.</p>
          <p> Showhaus was designed by <a href="http://luisquer.al">myself</a> and engineered by <a href="http://pedrumgolriz.com/">Pedrum Golriz</a>.

          <!-- index screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="mainscreen.png" class="full-width" alt="A nice description">
          </div>

	   			<h2>The Backstory</h2>

	   			<p>The first version of Showhaus was launched in 2013 and was written entirely in PHP.
          <p> It ran sucessfully for a few months, but struggled to maintain a consistant stream of content. We had repeat users coming back to the site, but not enough that were willing to engage and actually post content.
          <p> For awhile, I tried posting events manually by myself. This required a commitment every week which I wasn't able to keep up with.
          <p> Understandably, user adoption began to drop and the service became dormant.</p>

          <h2>The Problem</h2>
          <p>Finding good local music is unnecessarily complicated. There are lots of resources, but it's rare to find one that offers a pleasant reading experience.
          <p>These resources typically fall under two categories:

          <!-- ticket aggregators -->
          <p> <span class="highlight yellow"><code>Ticket Aggregators</code></span>
          <br> These sites are designed to scrape events from ticketing sites like Ticketfly, Ticketmaster, and other services. The goal of these sites (or apps) is primarily to sell tickets.
          <p> <a href="http://bandsintown.com/">Bands in Town</a> or <a href="http://www.songkick.com/metro_areas/7644-us-new-york">SongKick</a> are good examples.

          <p> These websites typically cater their UX towards buying tickets. They have an enourmous amount of mostly automated content and scale to multiple locations.
          <p> They also skew towards promoting shows at larger and more established venues. It's common for small to medium sized venues and show spaces to not rely on advanced ticket sales and, as a result, aren't represented on these kinds of sites.

          <!-- local resources -->
          <p> <span class="highlight yellow"><code>Local Resources</code></span>
          <br>This term refers to a more organic, homegrown forms of showlists.
          <p>These could take the form of a blog or a website whole sole purpose is to aggregate content for their local community.
          <p> <strong>Some examples:</strong> <a href="http://www.showspace.tumblr.com">Showspace</a> (Baltimore), <a href="#">DC Showspace</a> (Washington DC / NoVa), <a href="http://www.showlistaustin.com">Showlist Austin</a> (Austin), <a href="https://diyphl.com/">DIY PHL</a> (Philadelphia), <a href="http://www.noladiy.org/">NoLa DIY</a> (New Orleans), and <a href="http://www.undietacos.org/">UndieTacos</a> (Sacramento/Davis).
          <p> When compared to Ticket Aggregators, these sites will <em>always</em> feel more personalized and down-to-earth due to their emphasis on smaller venues and human curation. But these resources depend on a dedicated person(s) to run this resource.
          <p>And sometimes it works! But sometimes it's too much for that sole individual to take on by themselves.

          <h2>The Solution</h2>
          <p> What if there was a middle ground? What if we took the best of these two types of services and created something that allowed for both scalability while staying true to it's local community?
          <p>We've noted that an entirely manual showlist (either user or admin-submitted) would be difficult to keep up-to-date, and that making a showlist based only on data obtained from ticketing websites doesn't accurately reflect local music scenes.
          <p> But where would these events be taken from, if not ticketing websites?

          <h2>Feeds</h2>
          <p> The solution was to use Facebook as a main source of content.
          <p> We conducted a survey and found that while showlist sites were important to some, many found out about local shows via Facebook.
          <p> Moreover, most shows on Facebook are listed by the Venue or Promoter themselves, giving us access many different streams of content, without being limited by ticketing API's.
          <p> This realization led us to create something we call Showhaus "Feeds".

          <!-- feeds screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="feeds.png" class="full-width" alt="A nice description">

            </div>
            <p> Feeds are a list of specific Facebook pages (venues, promoters, bands, etc.) that periodically post events. These events are then scraped and fed into the main showlist.
            <p> This page also functions as a sort of wiki. Anyone that would like to submit a feed to the parsing algorithm can do so. New shows will appear in the next 20-30 minutes.
            <p> Since this feed of Facebook events covers the entire spectrum of venue sizes, we felt that it would be a more reliable source for this niche type of content. <p>Moreover, if tickets <em> are</em> availiable, that link (which is availiable in the Facebook API) is scraped too and offered in the form of a button on the home page.

            <h2>User Submissions</h2>
            <p> Of course, users can also submit a show manually.
            <!-- post a show screenshot -->
            <div class="browser">
              <div class="frame">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
              <img src="postashow.png" class="full-width" alt="A nice description">
            </div>
              <p> Entering in a Facebook event URL is optional but fills in the form to make it easier to submit. If a show doesnt not have a URL, the user can write a description and it will appear as a dropdown element on the showlist.

            <h2>Going Forward</h2>
            <p>The biggest test for Showhaus will be scalability. How do we manage several cities at once? How do we maintain a feed of consistent, solid content?
            <p> I'm not sure I have an answer to this yet, but my hope is that users will appreciate this resource enough to want to contribute and build upon it.
            <p> At the end of the day, I wanted to design a tool for the public good. There weren't a lot of great, user-submitted showlists out there and I felt like simple, utilitarian product that could serve the needs for cities that might not have a homegrown showlist site.

  		<!-- footer -->
  		<div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
  	</div>
  </body>
</html>
