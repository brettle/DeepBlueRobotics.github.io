---
layout: default
title: Our Sponsors
subtitle: We cannot thank you enough!
short_name: Sponsors
permalink: /sponsors
corporate:
  title: Corporate Sponsors
  image: images/sponsors/Davis/DSC02293.JPG
  content: Thank you very much for your support!
great_white:
  title: Great White
  amount: $2,500+
  sponsors:
    - title: Abbott Fund
      image: images/sponsors/AbbottFund.jpg
      href: http://www.abbottfund.org/
      content: The Abbott Fund supports a diverse range of projects around the globe – projects where financial support from the Abbott Fund, together with Abbott's people, products and expertise, can make a difference.
    - title: Google
      image: images/sponsors/Google.svg
      href: http://www.google.com/
      content: Google, originally a search engine for the infant web, has grown into a multi-company network -- developing everything from Chromebooks to self-driving cars. Their work continues to improve the lives of people around the world every day.
    - title: Pentair
      image: images/sponsors/Pentair.png
      href: http://www.pentairthermal.com/index.aspx
      content: Pentair Thermal Management is a thermal engineering company dedicated to innovation and customer satisfaction.
    - title: Sequoia Union High School District
      image: images/sponsors/SUHSD.png
      href: http://www.seq.org/
      content: The Sequoia Union High School District annually serves more than 8900 9th to 12th grade students, including Carlmont High School.
tiger_sharks:
  title: Tiger Sharks
  amount: $750-$2499
  sponsors:
    - title: Abbott Fund
      image: images/sponsors/AbbottFund.jpg
      href: http://www.abbottfund.org/
      content: The Abbott Fund supports a diverse range of projects around the globe – projects where financial support from the Abbott Fund, together with Abbott's people, products and expertise, can make a difference.
    - title: Google
      image: images/sponsors/Google.svg
      href: http://www.google.com/
      content: Google, originally a search engine for the infant web, has grown into a multi-company network -- developing everything from Chromebooks to self-driving cars. Their work continues to improve the lives of people around the world every day.
    - title: Pentair
      image: images/sponsors/Pentair.png
      href: http://www.pentairthermal.com/index.aspx
      content: Pentair Thermal Management is a thermal engineering company dedicated to innovation and customer satisfaction.
    - title: Sequoia Union High School District
      image: images/sponsors/SUHSD.png
      href: http://www.seq.org/
      content: The Sequoia Union High School District annually serves more than 8900 9th to 12th grade students, including Carlmont High School.
---
<div class="parallax-window" data-parallax="scroll" data-image-src="{{page.corporate.image}}" data-position="center center" data-speed="0.7"></div>

<div class="content-wrap secondary-background">
	<h3 class="main-font title-font white-font">
		{{page.corporate.title}}
	</h3>
	<p class="body-font white-font">
		{{page.corporate.content | markdownify}}
	</p>
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
			<div class="description"><a href="{{s.href}}" target="_blank">{{s.content | markdownify}}</a></div>
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
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="images/sponsors/intuitive-logo-black-1060874-lo-res.png" />
				<div id="sponsor-text">
					<p class="body-font">
						<a
						 href="http://intuitive.com/" target="_blank">Intuitive</a> was founded in 1995 to create innovative, robotic-assisted systems that help empower doctors and hospitals to make surgery less invasive than an open approach. Since da Vinci® became one of the first robotic-assisted systems cleared by the FDA for general laparoscopic surgery, it’s taken robotic-assisted surgery from “science fiction” to reality. Working with doctors and hospitals, they're continuing to develop new, minimally invasive surgical platforms and future diagnostic tools to help solve complex healthcare challenges around the world.
					</p>
				</div>
			</div>
		    <div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="images/sponsors/CarlmontPTSA.png" />
				<div id="sponsor-text">
					<p class="body-font">
						The mission of the Carlmont PTSA is to advocate for our students and families and to bring a closer relationship between the home and school so that parents and teachers may work collaboratively in the education of children and youth. Learn more at
						<a
						 href="http://carlmonths.org/?id=253" target="_blank">www.carlmonths.org/ptsa</a>.
					</p>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<!-- text based on website, logo traced masterfully by gabe :) -->
				<img id="sponsor-logo" src="images/sponsors/Fable.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Fable, Inc. has created fine architectural metalwork for homes and businesses since 1990. Learn more at <a href="http://www.fableinc.com/" target="_blank">www.fableinc.com</a>.
					</p>
				</div>
			</div>
		</div>
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<!-- logo by julia and text from michyle -->
				<img id="sponsor-logo" src="images/sponsors/GreenDuckPunch.svg" />
				<div id="sponsor-text">
					<p class="body-font">
						Jennifer Low, MD, PhD, is an experienced oncology drug developer. Green Duck Punch LLC is the organization that she has created to provide consulting services to a limited number of clients. Learn more at <a href="http://www.greenduckpunch.com">www.greenduckpunch.com</a>.
					</p>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<!-- logo and text both directly from Lisa McGann so we're good -->
				<img id="sponsor-logo" src="images/sponsors/Wizbots.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Wizbots combines LEGO® robotics, Java coding, and lots of imagination to provide unique STEM learning experiences for kids (ages 8-14) in the San Francisco Bay Area. Learn more at <a href="http://wizbots.com/" target="_blank">www.wizbots.com</a>.
					</p>
				</div>
			</div>
			<!-- need to add Green Duck Punch, LLC, so get logo-->
		</div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			Hammerhead Sharks
		</h3>
		<p class="body-font center-font">
			$500-$749
		</p>
	</div>
	<div class="list-wrap">
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="images/sponsors/AlanSteel.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Alan Steel and Supply Co. produces quality steel and metal. Alan Steel and Supply is located at <a href="https://www.google.com/maps/place/505+E+Bayshore+Rd,+Redwood+City,+CA+94063/@37.4975512,-122.2331307,17z/data=!3m1!4b1!4m2!3m1!1s0x808fa25ad696293b:0x345042a6093abbbb"
						 target="_blank">505 East Bayshore Rd, Redwood City, California 94063</a>.
					</p>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<!-- logo by gabe and text from michyle -->
				<img id="sponsor-logo" src="images/sponsors/AppliedProcessEquipment.svg" />
				<div id="sponsor-text">
					<p class="body-font">
						Applied Process Equipment was established more than 30 years ago, and provides services in the Machine Shop, Jobbing and Repair area within the Industrial and Commercial Machinery and Computer Equipment sectors. Applied Process Equipment is located at
						<a href="https://www.google.com/maps/place/2620+Bay+Rd,+Redwood+City,+CA+94063/@37.4838597,-122.209979,17z/data=!3m1!4b1!4m5!3m4!1s0x808fa31aa52b4d75:0x55bfd304ec7b3341!8m2!3d37.4838597!4d-122.2077903" target="_blank">2620 Bay Road, Redwood City, CA 94063</a>.
					</p>
				</div>
			</div>
		</div>
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="images/sponsors/JSD.jpeg" />
				<div id="sponsor-text">
					<p class="body-font">
						JSD Construction offers contracting services in custom built residential homes and remodeling in the peninsula area. Learn more at <a href="http://www.jsdconstruction.com" target="_blank">www.jsdconstruction.com</a>.
					</p>
				</div>
			</div>
			<!-- mad mark's -->
			<div class="list-chunk sponsor-width">
				<!-- logo and text from website -->
				<img id="sponsor-logo" src="images/sponsors/MadMark.jpg" />
				<div id="sponsor-text">
					<p class="body-font">
						Mad Mark's Mysterious Old Bike Shop proudly provides the illusion of running a business based on the sale of antique motorcycle parts and merchandise.
					</p>
				</div>
			</div>
		</div>
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<!-- logo and text from website -->
				<img id="sponsor-logo" src="images/sponsors/Lazar.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Lazar Machining Inc is a precision machining company located in San Carlos, California. The company has 33 years of experience manufacturing parts for the semiconductor, medical, aerospace, food processing, alternative energy and movie industries. Learn
						more at <a href="http://www.lazarmfg.com" target="_blank">www.lazarmfg.com</a>.
					</p>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<img id="sponsor-logo" src="images/sponsors/Nvidia.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Learn more about Nvidia at <a href="http://www.nvidia.com/" target="_blank">www.nvidia.com</a>.
					</p>
				</div>
			</div>
		</div>
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<!-- logo and text from website -->
				<img id="sponsor-logo" src="images/sponsors/PrecisionPowderCoating.svg" />
				<div id="sponsor-text">
					<p class="body-font">
						Precision Powder Coating has been in business for 20 years and provides Powder Coating, Sandblasting and Glass Bead Blasting services. Precision Powder Coating is located at <a href="https://www.google.com/maps/place/248+Harbor+Blvd,+Belmont,+CA+94002/@37.5223644,-122.2705018,17z/data=!3m1!4b1!4m5!3m4!1s0x808f9f4d8044b97d:0x42db9f5e3206a0cc!8m2!3d37.5223644!4d-122.2683131"
						 target="_blank">248 Harbor Boulevard, Belmont, CA 94002</a>.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="label">
		<h3 class="main-font subtitle-font center-font">
			Reef Sharks
		</h3>
		<p class="body-font center-font">
			$250-$499
		</p>
	</div>
	<div class="list-wrap">
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<!-- logo and modified text from website. both need improvement. -->
				<img id="sponsor-logo" src="images/sponsors/Chen.png" />
				<div id="sponsor-text">
					<p class="body-font">
						Chen Financial Group's mission is to create a simpler and clearer financial picture to clients. Learn more at <a href="http://www.chenfinancial.com/" target="_blank">www.chenfinancial.com</a>.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			Building a robot is expensive. You can help too!
		</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="sponsor-us">
				<span class="wsite-button-inner"><strong>SPONSOR US!</strong></span>
			</a>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->
