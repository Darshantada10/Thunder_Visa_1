function dynamic_about()
	{
		fetch("https://dhwayoverseas.com/api/about").then((res) => res.json()).then((abouts) => {

			// console.log(abouts);
			const heading = abouts.heading
			const description = abouts.description
			const point1 = `<i class="icon fa fa-circle-arrow-right"></i>${abouts.point_1}`
			const description1 = abouts.description_1
			const point2 = `<i class="icon fa fa-circle-arrow-right"></i>${abouts.point_2}`
			const description2 = abouts.description_2
			
				document.getElementById("about_heading").innerHTML = heading
				document.getElementById("about_description").innerHTML = description
				document.getElementById("about_point_1").innerHTML = point1
				document.getElementById("about_description_1").innerHTML = description1
				document.getElementById("about_point_2").innerHTML = point2
				document.getElementById("about_description_2").innerHTML = description2

		});
	}

    dynamic_about();
