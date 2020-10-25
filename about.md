---
who_we_are:
  title: Who We Are
  image: /images/DSCF2291.JPG
  content: >-
    Established in August of 2015, FIRST Robotics Competition (FRC) Team 199,
    Deep Blue Robotics, gives students the opportunity to learn first-hand about
    essential technical and business skills, inspiring them to reach out into a
    world of opportunities for innovation and entrepreneurship. As members of
    the team we participate in an annual competition put on by the FIRST
    organization ([firstinspires.org](http://firstinspires.org/)). FIRST (For
    Inspiration & Recognition of Science & Technology) organizes several
    different competitions targeted at different grade ranges. We compete in the
    FIRST Robotics Competition (FRC), as Team 199, Deep Blue Robotics.


    Team 199 consists of Carlmont students, invaluable mentors, and supportive parents. Carlmont also has a Robotics Engineering class.
layout: default
permalink: /about
title: About Us
subtitle: Information about Deep Blue Robotics
short_name: About
mission:
  title: Mission
  content: >
    The mission of Deep Blue Robotics is to provide students with the
    opportunity to explore STEM fields and develop engineering, project
    management, and community relations skills in an engaging and challenging
    environment. We are dedicated to thriving as

    a team, and further extending our hands to greet more members of our community with the gracious professionalism and technological opportunities that FIRST has to offer.
mentors:
  - name: Al Davies
    role: Mentor
  - name: Alex Shimota
    role: Mentor
  - name: Bill Crook
    role: Mentor
  - name: Blane Stroh
    role: Mentor
  - name: Bonnie Wolf
    role: Mentor
  - name: Cameron Young
    role: Mentor
  - name: Charles Shanefelter
    role: Mentor
  - name: Chris Moropoulos
    role: Mentor
  - name: Cristina Tudor
    role: Mentor
  - name: Curt Nehring
    role: Mentor
  - name: David Talcott
    role: Mentor
  - name: Dean Brettle
    role: Mentor
  - name: Jim Wilfong
    role: Mentor
  - name: Matt Moropoulos
    role: Mentor
  - name: Michael Gottesman
    role: Mentor
  - name: Olga Strongin
    role: Mentor
  - name: Rene Saltzherr
    role: Mentor
  - name: Sally Piao
    role: Mentor
  - name: Shimpei Koike
    role: Mentor
  - name: Stoyan Gaydarov
    role: Mentor
history:
  title: History
  image: /images/random-image-of-team.jpg
  content: >
    Deep Blue Robotics has grown enormously as an enterprise and as a community
    since our foundation in 2015. Based at Carlmont High School after breaking
    off from FRC Team 100 at Woodside High School, we have worked hard to grow
    from a garage team without

    adequate shop space and tooling, staff resources, or funding, to a well-equipped team integrated into our school and local community. On the team, any Carlmont student that wishes to join and dedicate time has the opportunity to learn first-hand about

    essential technical and business skills, giving them priceless career experience and intellectually inspiring them through the potential of innovation and entrepreneurship.


    Our progress has been dramatic, and our organization is expanding still. Starting in the 2016 school year, the team now has an official course at Carlmont High School, entitled Engineering Robotics, which is opening a huge opportunity for technical

    and entrepreneurial training and non-rushed development of our team's priorities, optimized structure, and efforts to engage with the community. Such a quick expansion would not have been possible without the advice and dedication of our mentors, the

    financial support of our sponsors, the invaluable help of our past and present core teachers, and our school administration's kind accommodation of us.
our_mentors:
  title: Our Mentors
  image: images/MrT.png
  content: We can't thank you enough!
  mentors:
    - name: Alex Abbas
      role: Mentor
    - name: Bonnie Wolf
      role: Lead Business Mentor
    - name: Chris Moropoulos
      role: Mentor
    - name: Dan Deasy
      role: " Staff Chaperone"
    - name: David Elliston
      role: Mentor
    - name: Dean Brettle
      role: Coach, Lead Sensing & Actuation Mentor
    - name: Emily Katz
      role: " Chaperone"
    - name: Jim Wilfong
      role: Mentor
    - name: Jennifer Low
      role: Mentor
    - name: Karin Saltzherr
      role: Mentor
    - name: Matt Moropoulos
      role: Mentor
    - name: Mike Bushue
      role: Lead Fabrication Mentor
    - role: Mentor
      name: Michyle LaPedis
    - name: Mike Gottesman
      role: Mentor
    - name: Nicole Bachelor
      role: Mentor
    - name: Ms Carefoot Carefoot
      role: Staff Chaperone
    - name: Steve Siefert
      role: Lead Design Mentor
    - name: Susan Neth
      role: Lead Programming Mentor
    - name: " Tatiana Elliston"
      role: " Chaperone"
    - name: Wynne Chan
      role: Mentor
    - name: " Cindy Huang"
      role: " Chaperone"
---
<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.who_we_are.image}}" data-position="center center" data-speed="0.7"></div>

<!--<div id="image-container">
		<div id="image-wrap" style="background-image: url('images/Team.jpg'); background-position: center 42%;">

		</div>
	</div> -->
<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<div class="content-wrap">
	<h3 class="main-font title-font">
				{{page.who_we_are.title}}
			</h3>
	<div class="body-font">{{page.who_we_are.content | markdownify}}</div>

	<h3 class="main-font title-font">
				{{page.mission.title}}
			</h3>
	<div class="body-font">{{page.mission.content | markdownify}}</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.history.image}}" data-position="center center" data-speed="0.7"></div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>

<div class="content-wrap">
	<h3 class="main-font title-font">
				{{page.history.title}}
			</h3>
	<div class="body-font">{{page.history.content | markdownify}}</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>

<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.our_mentors.image}}" data-position="center center" data-speed="0.7"></div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<div class="content-wrap">
	<h3 class="main-font title-font">
				{{page.our_mentors.title}}
			</h3>
	<div class="body-font">{{page.our_mentors.content | markdownify}}</div>
	<div class="list-wrap">
		{% for m in page.mentors %}
		<div class="list-chunk mentor-width">
			<blockquote class="body-font"><strong>{{m.name}}</strong><br>-{{m.role}}</blockquote>
		</div>
		{% endfor %}
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->