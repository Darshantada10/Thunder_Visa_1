function dynamic_video_title()
{
	fetch("https://dhwayoverseas.com/api/video-title").then((res) => res.json()).then((video) => 
	{
		// console.log(video);

    const video_url =
    `
    <a href="${video.url}" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon fa fa-play" aria-hidden="true"></i><span class="ripple"></span></a>

    `
  
    const video_title = video.title

		document.getElementById("video_url").innerHTML = video_url
		document.getElementById("video_title").innerHTML = video_title

	});

}

dynamic_video_title();