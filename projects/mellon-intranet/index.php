<?
  ini_set('display_errors',1);
  error_reporting(-1);
  $page_title = "mellon intranet | "; // this is for <title>
  include_once $_SERVER['DOCUMENT_ROOT']."/_include/head.php";
?>

  <body>

  	<div class="project-contain">

  		<!-- title -->
  		<div class="project-title">Mellon Intranet</div>
      <div class="project-links"><a href="http://blenderbox.com/projects/mellon-intranet">View the Blenderbox Case Study</a></div>

      <!-- content -->
      <div class="project-description">

	   			<p>While working at <a href="http://blenderbox.com">Blenderbox</a>, I led the UX for the redesign of the Mellon Foundation's corporate intranet.
          <p>Designing an intranet sounds terribly un-sexy, but it was without a doubt one of the most creatively enriching experiences I'd ever had as a designer.
          <p> It required me to practice empathy, putting myself in the shoes of an employee for a company I had never worked for. I needed to examine the workflow of the prior intranet and examine what worked well and what didn't.
          <p> I also had to consider a range of ages and internet skill levels, and take into consideration the limitations of internal IT systems (like monitor resolutions and browser types).
          <p> In the end, the Mellon Foundation and a 5 person project team at Blenderbox worked together to design a cutting-edge, django-based intranet that allowed for a more consise network of corporate information.

          <!-- homepage -->
          <h2>A Dynamic Homepage</h2>
          <p> The homepage is the starting point Foundation's intranet. This isn't always the case for public websites, where internal pages could be accessed and linked through a search engine.
          <p> Now, whenever someone opens their browser at Mellon, they see this:

          <!-- homepage screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="home.png" class="full-width" alt="A nice description">
          </div>

          <p>This was an important design consideration. Knowing that a large majority of users were seeing the homepage first, we needed to design a homepage system that allowed for the communication of Mellon Internal News and events (like Birthdays, Meetings, Deadlines).

          <p>We also introduced a "Quick Links" section. This area is fully administrable in the CMS, can be kept relevant by keeping tabs on internal analytics to see what pages are getting the most traffic.

          <!-- navigation and structure
          <h2>Navigation & Structure</h2>

          <p>If there's one thing you should know about intranet design, it's to prepare for content. Lot's and lots of content.
          <p>After a thoroguh content audit, we found that the vast majority of the intranet's content consisted of text. Things you would expect in a corporate intranet: Policy information, Contacts, Rules & Regulations, that sort of thing.

          <h3>Before:</h3>

          <p><img src="sitemap-before.png" class="full-width" alt="A nice description">

          <p> Overall, the top-level nav was difficult to scan and there were a number of pages that could be consolidated.

          <h3>After:</h3>
          <p><img src="sitemap-after.png" class="full-width" alt="A nice description">
          <p> Here's the end result.
          <p> It features a clean, easily scannable nav, fewer pages (albeit with more content), and a few label recommendations throughout to make the content a bit more predictable.
          -->

          <!-- longform pages -->
          <h2>Longform Pages</h2>


          <p>Because we consolidated so much content into much fewer pages, we needed to design some kind of way to sift through large amounts of information in a short period of time.
          <p>Instead of forcing the user to click into individual pages to find their content, we created a system of "longform" pages.
          <p>These pages primarily reference policy information.

          <!-- longform screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="longform.png" class="full-width" alt="A nice description">
          </div>

          <p>These pages allow the user to easily navigate around a single page using a static navigation to the right.

          <!-- embed module -->
          <h2>Embedable Policy Information</h2>
          <p>Another pattern we noticed while auditing their exisiting intranet was the amount of linking in between pages. The majority of this was happening on policy pages.
          <p>By nature, policy, at times, needs to reference other policy. So, in order to reference, you would need to provide a link to the piece of policy.
          <p> We thought this was cumbersome. We instead created "policy snippets", which allow admins to embed chunks of longform pages in other pages.

          <!-- policy embed screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="snippet.png" class="full-width" alt="A nice description">
          </div>

          <p> The implementation of policy snippets transformed the Mellon Foundation's existing heirachy of pages into an interconnected set of documents.
          <p><img src="snippet2.png" class="full-width" alt="A nice description">

          <!-- calendar -->
          <h2>Full Screen Calendar</h2>
          <p>Designing online, grid-based calendars is deceptively challenging. They all look the same but they each require specific and unique sets of needs.
          <p>The Mellon Foundation's Intranet Calendar was no different and luckily it's design and implementation was as smooth as it could be.

          <!-- calendar screenshot -->
          <div class="browser">
            <div class="frame">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="calendar.png" class="full-width" alt="A nice description">
          </div>

          <p>Events can be populated in two ways: via an internal Sharepoint calendar or using Django CMS's event content type.
          <p>We found that their internal Sharepoint calendar was already active, so creating a periodic Sharepoint pull-script would be necessarily to keep the calendar up-to-date. For anything else that didn't need to be on their Sharepoint calendar, they could add it through the CMS.

          <!-- research -->
          <h2>Other Resources and Further Reading</h2>
          <p>Planning for this project required a substantial about of research.
          <p>The <a href="http://nngroup.com">Nielson Norman Group</a> is widely considered a stable for Intranet design research in the UX community. If you're working on an Intranet, I would heavily consider checking out <a href="https://www.nngroup.com/reports/intranet-design-annual/">Nielson Norman's 2016 Intranet Design Annual</a>.

          <p> If you don't use it already, I would also consider exploring the <a href="http://www.basecamp.com">Basecamp</a> interface. This is a project-management specific web tool, but some of the concepts and UI patterns gave us a lot of inspiration while designing Mellon's intranet.


          <!-- footer -->
          <div class="project-linkback"><a href="http://luisquer.al">www.luisquer.al</a></div>
      </div>
  </body>
</html>
