function dynamic_benefits()
	{
		fetch("https://dhwayoverseas.com/api/visa-process").then((res) => res.json()).then((benefits) => {

			// console.log(benefits);
			const p1 = benefits.point1
			const h1 = benefits.heading1

			const p2 = benefits.point2
			const h2 = benefits.heading2
			
            const p3 = benefits.point3
			const h3 = benefits.heading3
            
			
				document.getElementById("process_point1").innerHTML = p1
				document.getElementById("process_heading1").innerHTML = h1

				document.getElementById("process_point2").innerHTML = p2
				document.getElementById("process_heading2").innerHTML = h2
				
                document.getElementById("process_point3").innerHTML = p3
				document.getElementById("process_heading3").innerHTML = h3


		});
	}

    dynamic_benefits();
