function visitor_visa()
{
    fetch('https://dhwayoverseas.com/api/visitor-visa').then((res)=>res.json()).then((response)=>
    {
        // console.log(response);
        image = ""
        heading1 = ""
        info1 = ""
        heading2 = ""
        info2 = ""
        p1 = ""
        p2 = ""
        p3 = ""
        p4 = ""
        p5 = ""
        p6 = ""
        response.forEach(visa => 
        {

            image += `<img src="/storage/${visa.image}" alt="" /> `
            document.getElementById("image").innerHTML = image

            heading1 += `${visa.heading_1}`
            document.getElementById("heading_1").innerHTML = heading1
            

            info1 += `${visa.information_1}`
            document.getElementById("info_1").innerHTML = info1
            
            heading2 += `${visa.heading_2}`
            document.getElementById("heading_2").innerHTML = heading2
            
            info2 += `${visa.information_2}`
            document.getElementById("info_2").innerHTML = info2
            
            p1 += `${visa.point_1}`
            document.getElementById("p1").innerHTML = p1
            
            
            p2 += `${visa.point_2}`
            document.getElementById("p2").innerHTML = p2
            
            
            p3 += `${visa.point_3}`
            document.getElementById("p3").innerHTML = p3
            
            
            p4 += `${visa.point_4}`
            document.getElementById("p4").innerHTML = p4
            
            
            p5 += `${visa.point_5}`
            document.getElementById("p5").innerHTML = p5
            
            
            p6 += `${visa.point_6}`
            document.getElementById("p6").innerHTML = p6
            

        });
    });
}
visitor_visa();