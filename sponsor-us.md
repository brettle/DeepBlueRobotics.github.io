---
layout: default
title: Sponsor us
subtitle: Information about how you can help.
short_name: Sponsor Us
permalink: /sponsor-us
tagline: Robots are expensive.
intro:
  title: Let's Keep STEM Going!
  content: "Our team relies on personal donations and corporate sponsors to cover our operational expenses. Unlike other teams, we do not have “team fees” that students must pay to join the team. In past years, our former team's annual expenses have been around $40,000: $10,000 for robot development and parts, $10,000 for competition registration, $15,000 for travel/lodging/shipping, $2,500 for tool upkeep and materials replacement, and $2,500 for public relations/outreach items and general team expenses. We expect our annual expenses to be similarly high. However, as this is our first year and we are starting a new team at a school that does not have a shop, we will also have to purchase tools, machines, and stock materials that other established teams do not have to worry about. We estimate that these additional expenses will be around $10,000. As you can see, FRC is an amazing program, however it requires some money. We rely on corporate sponsors and personal donations to fund our team and allow us to continue bringing STEM education to our students. Your support is always appreciated.
  
  All donations, either corporate or personal, are tax-deductible."
become_a_corporate_sponsor:
  title: Become a Corporate Sponsor
  content: If you would like to sponsor us, please write a check to “Carlmont High School”, with “Robotics” in the memo line. Checks should be sent to Carlmont High School, 1400 Alameda de las Pulgas, Belmont, CA, 94002. Please send an email with your company’s	logo to [sponsorships@carlmontrobotics.org](mailto:sponsorships@carlmontrobotics.org) so we can provide you with sponsorship benefits.
become_a_personal_sponsor:
  title: Become a Personal Sponsor
  content: If you would like to support us as a personal donor, we can accept tax deductible donations with checks payable to “Carlmont High School”, with “Robotics Team” in the memo line. Checks should be sent to Carlmont High School, 1400 Alameda de las Pulgas, Belmont, CA, 94002. Please send an email to [sponsorships@carlmontrobotics.org](mailto:sponsorships@carlmontrobotics.org) with your name so we can list you on our website under the supporters tab. If you would like to remain anonymous, please indicate this in your email.
sponsor_benefits:
  title: Sponsor Benefits
  content: Corporate sponsors gain publicity through the team in many ways. Sponsors’ names and logos are featured prominently on this website, are printed on our team t-shirts (which we wear at all competitions and outreach events), and are featured on the side panels of our robot itself. Sponsors are also listed with FIRST and therefore appear on all competition programs as part of our official team name which is announced at the beginning of elimination matches at competition.
need_more_info:
  title: Need More Info?
  content: If you are interested in becoming a corporate sponsor and would like more information, please email [sponsorships@carlmontrobotics.org](mailto:sponsorships@carlmontrobotics.org) and we can send you some materials or even arrange a tour of our facilities or a student presentation to your company. If you have received a letter, phone call, or email from a student on the team regarding your potential sponsorship, please reply to that student.
tiers_intro:
  title: Donation Tiers
  content: We greatly appreciate any and all support.
tiers:
  - title: Manta Rays
    amount: $100+
    content: Company receives framed and signed team photo.
  - title: Reef Sharks
    amount: $250+
    content: |
      Company receives framed and signed team photo.
      
      Company's logo and brief description featured on website.
  - title: Hammerhead Sharks
    amount: $500+
    content: |
      Company receives framed and signed team photo.
      
      Company's logo and brief description featured on website.
      
      Company's logo featured on team apparel.
  - title: Tiger Sharks
    amount: $750+
    content: |
      Company receives framed and signed team photo.
      
      Company's logo and brief description featured on website.
      
      Company's logo featured on team apparel.

      Company's logo featured on **THE ROBOT!**
  - title: Great White
    amount: $2500+
    content: |
      Company receives framed and signed team photo.
      
      Company's logo and brief description featured on website.
      
      Company's logo featured on team apparel.
      
      Company's name announced at competitions.
      
      Company's name on competition pamphlets.
      
      Company's logo featured on **THE ROBOT!**

---
<div class="content-wrap secondary-background">
	<h3 class="main-font title-font white-font ">
		{{page.tagline}}
	</h3>
</div>

<div class="content-wrap">
	<h3 class="main-font subtitle-font black-font">
		{{page.intro.title}}
	</h3>
  <div class="body-font">
    {{page.intro.content|markdownidfy}}
  </div>

	<div class="list-wrap">
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<i id="sponsorus-icon" class="fa fa-user-circle fa-5x" style="color: black;"></i>
				<div id="sponsorus-text">
					<h3 class="main-font subtitle-font">{{page.become_a_corporate_sponsor.title}}</h3>
					<div class="body-font">
          {{page.become_a_corporate_sponsor.content|markdownify}}
					</div>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<i id="sponsorus-icon" class="fa fa-user-circle-o fa-5x attn-color" style="color: black;"></i>
				<div id="sponsorus-text">
					<h3 class="main-font subtitle-font">{{page.become_a_personal_sponsor.title}}</h3>
					<div class="body-font">
          {{page.become_a_personal_sponsor.content|markdownify}}
					</div>
				</div>
			</div>
		</div>
		<div class="list-row">
			<div class="list-chunk sponsor-width">
				<i id="sponsorus-icon" class="fa fa-plus-circle fa-5x" style="color: black;"></i>
				<div id="sponsorus-text">
					<h3 class="main-font subtitle-font">{{page.sponsor_benefits.title}}</h3>
					<div class="body-font">
					{{page.sponsor_benefits.content|markdownify}}
					</div>
				</div>
			</div>
			<div class="list-chunk sponsor-width">
				<i id="sponsorus-icon" class="fa fa-info-circle fa-5x" style="color: black;"></i>
				<div id="sponsorus-text">
					<h3 class="main-font subtitle-font">{{page.need_more_info.title}}</h3>
					<div class="body-font">
						{{page.need_more_info.content|markdownify}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3 class="main-font title-font">
		{{page.tiers_intro.title}}
	</h3>
	<div class="body-font">
		{{page.tiers_intro.content|markdownify}}
	</div>
	<div class="list-wrap">
    <div class="list-chunk tier-width-2">
        <div class="tier-width tier-width-full">
        {% assign t = page.tiers[0] %}
        {% include tier.html t=t %}
        </div>
        <div class="tier-width tier-width-full">
        {% assign t = page.tiers[1] %}
        {% include tier.html t=t %}
        </div>
    </div>
    {% for t in page.tiers offset:2 %}
    {% assign style_attr = "" %}
    {% if t.title == "Great White" %}
      {% assign style_attr = "style='background-color:#093172'" %}
    {% endif %}
		<div class="list-chunk tier-width" {{style_attr}}>
      {% include tier.html t=t %}
		</div>
    {% endfor %}
  </div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
