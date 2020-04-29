# Introduction
![GitHub deployments](https://img.shields.io/github/deployments/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/github-pages?label=carlmontrobotics.org%20update) ![GitHub deployments](https://img.shields.io/github/deployments/DeepBlueRobotics/DeepBlueRobotics.github.io/github-pages?label=deepbluerobotics.github.io%20update)

These are instructions for maintaining the [carlmontrobotics.org](https://carlmontrobotics.org/) website. 

There are three types of changes that you might want to make:

 * Changes to *content* like text and images. Content changes also include changes to basic text formatting changes such as bold, italics, lists, and links, but don't include things like font or font size. **You don't need any special skills to make content changes.**
 * Changes to *layout and styling*. Layout and styling dictate where and how various bits of content is displayed on a page, including fonts, font sizes, colors, positioning, and how the page will appear on different devices or in different sized windows. To make layout and styling changes, you will need to know [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML) and [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) so that the site will look attractive and work effectively across devices. You will also need a working understanding of Jekyll.
 * Changes to *structure*. Structure changes include changes to the types of content on a page, how the various bits of content relate to each other, and which page contains which content. Adding or deleting pages or sections of pages are examples of structure changes. To make structure changes you will need to know how to configure [NetlifyCMS](https://www.netlifycms.org/) so that content editors can continue to make changes to the content without needing any special skills.

To make changes to the carlmontrobotics.org website:

 1. An editor makes the changes to the staging website, deepbluerobotics.github.io.
 2. The editor requests that the changes be merged into the production website, carlmontrobotics.org.
 3. A reviewer approves the changes and merges them into the production website, carlmontrobotics.org.

The editor and reviewer both need to have GitHub accounts. If you don't have one, just [sign up](https://github.com/join). 

Editors need to be members of the [DeepBlueRobotics organization](https://github.com/DeepBlueRobotics) with write access to at least the [DeepBlueRobotics.github.io project](https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io). If you need access, contact the programming subteam lead or programming subteam lead mentor.

Reviewers are mentors and they need to be members of the [DeepBlueRoboticsMentors organization](https://github.com/DeepBlueRoboticsMentors) with write access to at least the [DeepBlueRoboticsMentors.github.io project](https://github.com/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io). If you are a mentor and need access, contact the programming subteam lead mentor.

[Making changes is easy](#making-changes-online) and can be done from any modern web browser. More advanced users can also [make changes offline](#making-changes-offline) using open source tools running on a MacOS or Linux machine. [Administative tasks](#administration) like managing permissions are accomplished via GitHub. If you are curious how the site works, take a look [behind the scenes](#behind-the-scenes).

# Making Changes Online

The easiest way to make changes is using any modern web browser.

## Changing Content

To change content:
 1. Go to https://deepbluerobotics.github.io/admin. If prompted, sign in to GitHub and give the NetlifyCMS application permission to write to the DeepBlueRobotics/DeepBlueRobotics.github.io repository.
 2. Select the page you want to edit. The various bits of content on that page will be displayed in a way that allow you to edit them.
 3. Make the changes you want.
 4. Click `Publish` in the upper right corner and select `Publish Now`. It should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the publication process has finished yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred.
 5. Repeat steps 2 through 4 for each page that has content you want to change.
 6. Follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Changing Layout and Styling

To change layout and styling you will need to know [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML) and [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) and a working understanding of [Jekyll](https://jekyllrb.com/docs/). The site is hosted by [GitHub Pages](https://help.github.com/en/github/working-with-github-pages) which uses Jekyll to regenerate the site from the source files whenever a source file is changed. You can change the files online at https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/.

Once you commit a change, it should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred. 

Once you are happy with how your changes appear on a variety of devices/browsers, follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Changing Structure

To change the structure of the site or it's content you will need to know how to configure [NetlifyCMS](https://www.netlifycms.org/) so that content editors can continue to make changes to the content without needing any special skills. You can make structure changes by editing [admin/config.yaml](https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/admin/config.yaml) and the site's source files such that the fields in `admin/config.yaml` specify appropriate widgets for editing the various parts of the site's source files. For detailed documentation, see [the NetlifyCMS docs](https://www.netlifycms.org/docs/), especially the docs concerning [options for configuring  `collections`](https://www.netlifycms.org/docs/configuration-options/#collections).

Once you commit a change, it should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred. 

Once you are happy with how your changes appear on a variety of devices/browsers, follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Requesting Merging of Changes into the Production Website

To request inclusion of your changes in the production website, [make a "pull request"](https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/pull/new/master) and then let a reviewer know that you have done so.

## Merging Changes into the Production Website

If you've been asked to merge changes into the production website:

 1. Go to https://github.com/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/pulls. There should be one open pull request. (If there is more than one, work with the people who are requesting that their changes be merged to figure out which changes one to merge.) Click on the pull request.
 2. Confirm that the request is to merge the `master` branch of the `DeepBlueRobotics/DeepBlueRobotics.github.io` repository into the `master` branch of the `DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io` repository. If the request lists different repositories or branches, you will not be able to review it by looking at the staging site, so you should ask the requester to make the changes to the staging site first.
 3. Verify that the staging site, https://deepbluerobotics.github.io contains the desired corrections and is no worse than the production site, https://carlmontrobotics.org/, ideally on both a computer and a phone.
 4. If everything looks good, click the button to merge the pull request.
 5. it should only take a few seconds for your changes to show up at https://carlmontrobotics.org/. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/deployments to see how recently the last deployment occurred. 

 ## Undoing Changes to the Production Website
 
 If a change needs to be undone, the corresponding pull request can be opened and reverted to create a new pull request with undoes it. That pull request should then be merged to undo the original pull request.

# Making Changes Offline

# Administration

## Adding and Removing Editors

## Adding and Removing Publishers

## Configuring a New Repository

# Behind the Scenes

