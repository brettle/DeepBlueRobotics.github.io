![GitHub deployments](https://img.shields.io/github/deployments/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/github-pages?label=carlmontrobotics.org%20update) ![GitHub deployments](https://img.shields.io/github/deployments/DeepBlueRobotics/DeepBlueRobotics.github.io/github-pages?label=deepbluerobotics.github.io%20update)


# Introduction

These are instructions for maintaining the carlmontrobotics.org website. 

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
 4. Click `Publish` in the upper right corner and select `Publish Now`. It will take a few minutes for your changes to show up at https://deepbluerobotics.github.com. If you aren't sure whether 

## Changing Layout and Styling

## Changing Structure

## Previewing Changes on the Staging Website

## Requesting Merging of Changes into the Production Website

## Merging Changes into Production Website

Changes should be made to the DeepBlueRobotics/DeepBlueRobotics.github.io repository, previewed at https://DeepBlueRobotics.github.io, and then a pull request should be made to this repository. If the preview is acceptable to a mentor, the pull request should be merged and the result will be live. If a change needs to be undone, the corresponding pull request can be opened and reverted to create a new pull request with undoes it. That pull request should then be merged to undo the original pull request.

# Making Changes Offline

# Administration

## Adding and Removing Editors

## Adding and Removing Publishers

## Configuring a New Repository

# Behind the Scenes

