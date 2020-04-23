---
layout: default
title: MEDIA
subtitle: Our posts, vids, and pics. Follow us!
short_name: Media
permalink: /media

social_media:
  title: Social Media
photo_gallery:
  title: Photo Gallery
---

<div class="content-wrap">
	<h3 class="main-font title-font black-font bottommargin-font" style="float:left">
		{{page.social_media.title}}
	</h3>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> 
	<div class="addthis_inline_follow_toolbox" style="float:right"></div>
	<!-- Youtube Player -->
	<div class="embed-container" style="clear: both">
		<iframe src="https://www.youtube.com/embed?listType=playlist&list=PL_uLVutPGMwP0qteV-TlLQf2oyapuls5k" frameborder="0" allowfullscreen></iframe>
	</div>
	<h3 class="main-font title-font black-font topmargin-font bottommargin-font">
		{{page.photo_gallery.title}}
	</h3>
	<div id="nanoGalleryContainer"><div id="nanoGallery"></div></div>
	<script>
		$(document).ready(function () {
    $("#nanoGallery").nanoGallery({
      thumbnailWidth: 'auto',
      thumbnailHeight: 210,
      
      userID: '101242297207886111263', kind:'picasa',
      album: '6349924070069115185',
      colorScheme: 'none',
      thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
			theme: 'light',
			photoSorting: 'reversed',
      thumbnailGutterWidth : 0,
      thumbnailGutterHeight : 0,
			paginationMaxLinesPerPage: 3,
			galleryFullpageBgColor: "none",
			touchAutoOpenDelay: -1,
      i18n: { thumbnailImageDescription: 'View Photo', thumbnailAlbumDescription: 'Open Album' },
      thumbnailLabel: { display: true, position: 'overImageOnMiddle', align: 'center' }
    });
  });
	</script>
	
	<div class="list-wrap">
		<div class="list-chunk sponsor-width">
			<!-- Facebook Feed 
			<div class="fb-page" data-href="https://www.facebook.com/frcteam199" data-tabs="timeline" data-width="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<blockquote cite="https://www.facebook.com/frcteam199" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/frcteam199">Deep Blue Robotics</a></blockquote>
			</div>-->
		</div>
		<div class="list-chunk sponsor-width">
			
		</div>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->
