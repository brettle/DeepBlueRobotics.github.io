---
title: Our Sponsors
subtitle: We cannot thank you enough!
short_name: Sponsors
corporate:
  title: Corporate Sponsors
  image: images/DSC02293.JPG
  content: Thank you very much for your support!
great_white:
  title: Great White
  amount: $2,500+
  sponsors:
    - title: Abbott Fund
      image: images/AbbottFund.jpg
      href: http://www.abbottfund.org/
      content: The Abbott Fund supports a diverse range of projects around the globe –
        projects where financial support from the Abbott Fund, together with
        Abbott's people, products and expertise, can make a difference.
    - title: Google
      image: images/Google.svg
      href: http://www.google.com/
      content: Google, originally a search engine for the infant web, has grown into a
        multi-company network -- developing everything from Chromebooks to
        self-driving cars. Their work continues to improve the lives of people
        around the world every day.
    - title: Sequoia Union High School District
      image: images/SUHSD.png
      href: http://www.seq.org/
      content: The Sequoia Union High School District annually serves more than 8900
        9th to 12th grade students, including Carlmont High School.
    - title: KLA Foundation
      image: /images/kla-foundation.jpg
      href: https://www.kla.foundation/
      content: "The KLA Foundation aims to support and benefit the local and
        international communities in which KLA Corporation employees live and
        work. The Foundation is dedicated to three main Pillars of Focus:
        Education (emphasis on STEM), Wellness, and Community Enrichment."
tiger_sharks:
  title: Tiger Sharks
  amount: $750-$2499
  sponsors:
    - title: Carlmont PTSA
      image: images/CarlmontPTSA.png
      href: "[www.carlmonths.org/ptsa](http://carlmonths.org/?id=253)"
      content: The mission of the Carlmont PTSA is to advocate for our students and
        families and to bring a closer relationship between the home and school
        so that parents and teachers may work collaboratively in the education
        of children and youth.
    - title: Intuitive Foundation
      image: /images/intuitive.jpg
      href: http://www.intuitive-foundation.org/
      content: The Intuitive Foundation has partnered with FIRST, awarding grants to
        high school robotic teams both in the Bay Area and other parts of the
        US. Over the years, Intuitive has inspired hundreds of students to
        engage in STEM activities.
    - title: NVIDIA
      image: /images/Nvidia.png
      href: http://www.nvidia.com/
      content: NVIDIA is the inventor of the GPU, which creates interactive graphics
        on laptops, workstations, mobile devices, notebooks, PCs, and more.
        NVIDIA'S Invention of the GPU. sparked the growth of the PC gaming
        market, redefined modern computer graphics, and revolutionized parallel
        computing.
    - href: http://villagehostpizza.com/
      title: Village Host Pizza
      image: /images/village-host-pizza.jpg
      content: Village Host Pizza, located at 1017 Alameda de las Pulgas, Belmont, CA,
        is a pizzeria dedicated to hosting gatherings among friends and family
        for any occasion. They support the town of Belmont through donations to
        schools, as well as local organizations.
hammerhead_sharks:
  title: Hammerhead Sharks
  amount: $500-$749
  sponsors:
    - title: Custom Metal Manufacturing
      image: /images/custommetalmanufacturing.jpg
      content: Custom Metal Manufacturing Company offers complete steel fabrication
        and welding services with the mission of helping customers bring their
        ideas to life at a fair price.
      href: https://www.facebook.com/custommetalmfg/
    - title: Microsoft
      image: /images/microsoft.png
      href: https://www.microsoft.com/en-us/
      content: Microsoft develops, manufactures, licenses, supports, and sells
        computer software, consumer electronics, personal computers, and related
        services. Microsoft's mission and values are to help people and
        businesses throughout the world realize their full potential.
    - title: SolidWorks
      image: /images/solidworks.png
      href: https://www.solidworks.com/
      content: SOLIDWORKS Corp. develops and markets 3D CAD design software, analysis
        software, and product data management software. SolidWorks, is one of
        the largest 3D software companies in the world.
    - title: SolidProfessor
      image: /images/solid-professor.png
      href: www.solidprofessor.com
      content: SolidProfessor is an online learning platform for engineers, design
        teams, and instructors at K-12 and post-secondary schools. With a
        SolidProfessor offers on-demand SOLIDWORKS courses and lessons in CAD,
        CAM, BIM, engineering methods, and more.
sponsor_us:
  content: Building a robot is expensive. You can help too!
  link_text: SPONSOR US!
  link_href: sponsor-us
layout: default
permalink: /sponsors
reef_sharks:
  title: Reef Sharks
  amount: $250-$499
  sponsors:
    - title: SYNOPSYS
      content: Synopsys is at the forefront of Smart Everything with the world’s most
        advanced technologies for chip design, verification, IP integration, and
        software security and quality testing. The company helps customers
        innovate from silicon to software so they can bring Smart Everything to
        life.
      image: /images/synopsys.png
      href: https://www.synopsys.com/
    - content: Applied Process Equipment is a machining shop located at 2620 Bay Rd,
        Redwood City, CA 94063
      title: Applied Process Equipment
      href: https://www.yelp.com/biz/applied-process-equipment-company-redwood-city
      image: /images/AppliedProcessEquipment.svg
    - title: FastSigns
      image: /images/logo20150114-29098-q5bz06.png
      href: https://www.fastsigns.com/san-francisco-ca/395-redwood-city
      content: Fast Signs provides visual communication solutions including sign and
        graphic consultation and design, production, delivery and installation
        services.
---
<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.corporate.image}}" data-position="center center" data-speed="0.7"></div>

<div class="content-wrap secondary-background">
	<h3 class="main-font title-font white-font">
		{{page.corporate.title}}
	</h3>
	<div class="body-font white-font">
		{{page.corporate.content | markdownify}}
	</div>
</div>

<div class="content-wrap">
	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.great_white.title}}
		</h3>
		<p class="body-font center-font">
			{{page.great_white.amount}}
		</p>
	</div>
	<div id="sponsors">
    {% for s in page.great_white.sponsors %}
		<div class="sponsor">
			<div class="logo">
				<img src="{{s.image}}">
			</div>
			<div class="description"><a href="{{s.href}}" target='_blank'>{{s.content | markdownify}}</a></div>
		</div>
    {% endfor %}
	</div>


	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.tiger_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.tiger_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.tiger_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after the third sponsor for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 3 %}
    </div>
    <div class="list-row">
      {% endif %}

      {% endfor %}
    </div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.hammerhead_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.hammerhead_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.hammerhead_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after sponsors 2, 4, and 6 for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 2 or index == 4 or index == 6 %}
    </div>
    <div class="list-row">
      {% endif %}
      
      {% endfor %}
    </div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			{{page.reef_sharks.title}}
		</h3>
		<p class="body-font center-font">
			{{page.reef_sharks.amount}}
		</p>
	</div>
	<div class="list-wrap">
    <div class="list-row">
      {% for s in page.reef_sharks.sponsors %}
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="{{s.image}}" />
				<div id="sponsor-text">
					<div class="body-font">
						{{s.content | markdownify}}
					</div>
				</div>
			</div>

      {% comment %}Start a new row after sponsors 2, 4, and 6 for aesthetic reasons. Change as necessary as sponsors change.{% endcomment %}
      {% assign index = forloop.index %}
      {% if index == 2 or index == 4 or index == 6 %}
    </div>
    <div class="list-row">
      {% endif %}
      
      {% endfor %}
    </div>
	</div>
</div>

<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			{{page.sponsor_us.content|markdownify}}
		</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="{{page.sponsor_us.link_href}}">
				<span class="wsite-button-inner"><strong>{{page.sponsor_us.link_text}}</strong></span>
			</a>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->
