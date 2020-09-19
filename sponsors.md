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
    - title: Pentair
      image: images/Pentair.png
      href: http://www.pentairthermal.com/index.aspx
      content: Pentair Thermal Management is a thermal engineering company dedicated
        to innovation and customer satisfaction.
    - title: Sequoia Union High School District
      image: images/SUHSD.png
      href: http://www.seq.org/
      content: The Sequoia Union High School District annually serves more than 8900
        9th to 12th grade students, including Carlmont High School.
tiger_sharks:
  title: Tiger Sharks
  amount: $750-$2499
  sponsors:
    - title: Intuitive
      image: images/intuitive-logo-black-1060874-lo-res.png
      href: http://intuitive.com/
      content: "[Intuitive](http://intuitive.com/){: target='_blank'} was founded in
        1995 to create innovative, robotic-assisted systems that help empower
        doctors and hospitals to make surgery less invasive than an open
        approach. Since da Vinci® became one of the first robotic-assisted
        systems cleared by the FDA for general laparoscopic surgery, it’s taken
        robotic-assisted surgery from &quot;science fiction&quot; to reality.
        Working with doctors and hospitals, they're continuing to develop new,
        minimally invasive surgical platforms and future diagnostic tools to
        help solve complex healthcare challenges around the world."
    - title: Carlmont PTSA
      image: images/CarlmontPTSA.png
      href: http://carlmonths.org/?id=253
      content: "The mission of the Carlmont PTSA is to advocate for our students and
        families and to bring a closer relationship between the home and school
        so that parents and teachers may work collaboratively in the education
        of children and youth. Learn more at
        [www.carlmonths.org/ptsa](http://carlmonths.org/?id=253){:
        target='_blank'}."
hammerhead_sharks:
  title: Hammerhead Sharks
  amount: $500-$749
  sponsors:
    - title: Nvidia
      image: images/Nvidia.png
      href: http://www.nvidia.com/
      content: "Learn more about Nvidia at [www.nvidia.com](http://www.nvidia.com/){:
        target='_blank'}."
    - title: Precision Powder Coating
      image: images/PrecisionPowderCoating.svg
      href: https://www.google.com/maps/place/248+Harbor+Blvd,+Belmont,+CA+94002/@37.5223644,-122.2705018,17z/data=!3m1!4b1!4m5!3m4!1s0x808f9f4d8044b97d:0x42db9f5e3206a0cc!8m2!3d37.5223644!4d-122.2683131
      content: "Precision Powder Coating has been in business for 20 years and
        provides Powder Coating, Sandblasting and Glass Bead Blasting services.
        Precision Powder Coating is located at [248 Harbor Boulevard, Belmont,
        CA
        94002](https://www.google.com/maps/place/248+Harbor+Blvd,+Belmont,+CA+9\
        4002/@37.5223644,-122.2705018,17z/data=!3m1!4b1!4m5!3m4!1s0x808f9f4d804\
        4b97d:0x42db9f5e3206a0cc!8m2!3d37.5223644!4d-122.2683131){:
        target='_blank'}."
    - title: Custom Metal Manufacturing
      image: /images/custommetalmanufacturing.jpg
      content: "**Custom Metal Manufacturing Company offers complete steel fabrication
        and welding services with the mission of helping customers bring their
        ideas to life at a fair price.**"
      href: https://www.facebook.com/custommetalmfg/
sponsor_us:
  content: Building a robot is expensive. You can help too!
  link_text: SPONSOR US!
  link_href: sponsor-us
layout: default
permalink: /sponsors
reef_sharks:
  title: Reef Sharks
  amount: $250-$499
  sponsors: []
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
