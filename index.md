---
layout: default
title: MORE THAN JUST THE ROBOT.
subtitle: Carlmont High School FRC Team 199
short_name: Home
permalink: /
actions:
  - content: Promoting STEM and Community Service. Meet our team!
    link_text: OUR STORY
    link_href: /about
    image: /images/team-photo-2019-space.jpg
  - content: Become an official sponsor!
    link_text: SPONSOR US
    link_href: /sponsor-us
    image: images/DSC02293.JPG
  - content: Shop at our online store!
    link_text: SHOP
    link_href: /shop
    image: images/DSC01952.JPG
---
{% for action in page.actions %}
  {% if action.image %}
<div class="parallax-window" data-parallax="scroll" data-image-src="{{action.image}}" data-position="center center"></div>
  {% endif %}
<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page-->
<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			 {{action.content|markdownify}}
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="{{action.link_href}}">
			<span class="wsite-button-inner"><strong>{{action.link_text}}</strong></span>
		</a>
	</div>
</div>
{% endfor %}
<!--END PAGE CONTENT-->