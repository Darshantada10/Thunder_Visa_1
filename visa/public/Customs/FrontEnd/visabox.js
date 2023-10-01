function truncateText(text, maxLength) 
{
    if (text.length > maxLength) 
    {
        return text.substring(0, maxLength) + "...";
    }
    
    return text;
}

function visa_box() 
{
    fetch("https://dhwayoverseas.com/api/visa-box").then((res) =>res.json()).then((visa_box) => 
    {
            let boxHtml = "";
            visa_box.forEach((visa) => {
                const truncatedDescription = truncateText(visa.small_description, 50); 
                boxHtml +=
                    `<div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="/contact-us"><img src="/storage/${visa.image}" alt=""></a></figure>
                            </div>
                            <div class="overlay-content">
                            <i class="icon fa fa-graduation-cap"></i>
                                <h6 class="title"><a href="/contact-us">${visa.title}</a></h6>
                                <div class="text">${truncatedDescription}</div>
                            </div>
                        </div>
                    </div>`;
            });

            document.getElementById("visa_box").innerHTML = boxHtml;
        });
}

visa_box();
