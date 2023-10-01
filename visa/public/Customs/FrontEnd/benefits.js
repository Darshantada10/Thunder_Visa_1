function dynamic_benefits()
	{
		fetch("https://dhwayoverseas.com/api/benefits").then((res) => res.json()).then((benefits) => {

			// console.log(benefits);
			const p1 = benefits.point1
			const h1 = benefits.heading1

			const p2 = benefits.point2
			const h2 = benefits.heading2
			
            const p3 = benefits.point3
			const h3 = benefits.heading3
			
            const h4 = benefits.heading4
			const p4 = benefits.point4
            
			
				document.getElementById("benefits_point1").innerHTML = p1
				document.getElementById("benefits_heading1").innerHTML = h1

				document.getElementById("benefits_point2").innerHTML = p2
				document.getElementById("benefits_heading2").innerHTML = h2
				
                document.getElementById("benefits_point3").innerHTML = p3
				document.getElementById("benefits_heading3").innerHTML = h3
				
                document.getElementById("benefits_point4").innerHTML = p4
				document.getElementById("benefits_heading4").innerHTML = h4


		});
	}

    dynamic_benefits();
