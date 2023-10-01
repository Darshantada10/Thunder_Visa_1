
async function dynamic_data() {
	try {
	  // const response = await fetch("https://dhwayoverseas.com/api/ahpd");
	  const response = await fetch("http://localhost:8000/api/ahpd");
	  if (!response.ok) {
		throw new Error("Failed to fetch logo data");
	  }
	  const data = await response.json();
        
	  console.log("data",data);
    const logo_data = await data.logo;
    if(logo_data)
    {

    
	  const logos1 = `<a href="/home"><img src="/storage/${logo_data.logo}" alt="Logo Not found"></a>`;
	  const logos2 = `<a href="/home"><img src="/storage/${logo_data.logo}" alt="Logo Not found"></a>`;
  
	  document.getElementById("logo_id1").innerHTML = logos1;
	  document.getElementById("logo_id2").innerHTML = logos2;
	  document.getElementById("logo_id3").innerHTML = logos2;
	  document.getElementById("logo_id4").innerHTML = logos1;
	  
    }
	  
	  // const menu_data = await data.navbar;
  
    //   if (menu_data.length > 0) {
    //     const menuHtml = buildMenu(menu_data);
    //     document.getElementById("dynamic_navbar1").innerHTML = menuHtml;
    //     document.getElementById("dynamic_navbar2").innerHTML = menuHtml;
    //   } else {
    //     document.getElementById("dynamic_navbar1").innerHTML = "No menu data found.";
    //   }
      
      
      
       const slider_data = await data.slider;
    if(slider_data)
    {
        // console.log(slider_data)
      const slider_heading = slider_data.heading;
      const sider_sub_heading = slider_data.sub_heading;
  
      document.getElementById("slider_heading").innerHTML = slider_heading;
      document.getElementById("slider_sub_heading").innerHTML = sider_sub_heading;
    }
	  
	  
	  
	   const social_tags = await data.social;
    if(social_tags)
    {

    
    const social_info = `
      <li><a href="${social_tags.instagram}"><span class="fab fa-instagram"></span></a></li>
      <li><a href="${social_tags.twitter}"><span class="fab fa-twitter"></span></a></li>
      <li><a href="${social_tags.facebook}"><span class="fab fa-facebook-f"></span></a></li>
      <li><a href="${social_tags.youtube}"><span class="fab fa-youtube"></span></a></li>
    `;
    }
    document.getElementById("social_info").innerHTML = social_info;


    
    const contact_data = await data.contact;
    if(contact_data)
    {
    const contact_info_1 = `
      <li><span class="d-block">FR &nbsp;<img src="https://dhwayoverseas.com/Assets/FrontEnd/images/resource/france-flag-icon-18755.png"> </span> <i class="fa fa-phone"></i> &nbsp; <i class="fa-brands fa-whatsapp" ></i>&nbsp;${contact_data.mobile1}</li>
       
      <li><span class="d-block">IND &nbsp;<img src="https://dhwayoverseas.com/Assets/FrontEnd/images/resource/shiny-illustration-of-indian-flag.png"> </span><i class="fa fa-phone"> </i> &nbsp;<i class="fa-brands fa-whatsapp"> </i>&nbsp;${contact_data.mobile2}</li> 
    `;
    //   <li><i class="fa fa-map-marker"></i> ${contact_data.address}</li> 

    const contact_info_2 = `
      <li>
        <i class="icon fa fa-phone-square"></i>
        <span class="title">Phone:</span>
        <div class="text"><a href="tel:${contact_data.mobile1}">${contact_data.mobile1}</a></div>
      </li>
      <li>
        <i class="icon fa fa-phone-square"></i>
        <span class="title">Phone:</span>
        <div class="text"><a href="tel:${contact_data.mobile2}">${contact_data.mobile2}</a></div>
      </li>
      <li>
        <i class="icon fa fa-map-marker"></i>
        <span class="title">Address:</span>
        <div class="text">${contact_data.address}</div>
      </li>
    `;
    
    
    document.getElementById("header_contact_info").innerHTML = contact_info_1;
    document.getElementById("footer_contact_info").innerHTML = contact_info_2;
  }
  
      const visa_box = await data.visa_boxes;
      if(visa_box)
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
    }

      const about_data = await data.about
      if(about_data)
      {
      const about_heading = about_data.heading
			const about_description = about_data.description
			const about_point1 = `<i class="icon fa fa-circle-arrow-right"></i>${about_data.point_1}`
			const about_description1 = about_data.description_1
			const about_point2 = `<i class="icon fa fa-circle-arrow-right"></i>${about_data.point_2}`
			const about_description2 = about_data.description_2
			
				document.getElementById("about_heading").innerHTML = about_heading
				document.getElementById("about_description").innerHTML = about_description
				document.getElementById("about_point_1").innerHTML = about_point1
				document.getElementById("about_description_1").innerHTML = about_description1
				document.getElementById("about_point_2").innerHTML = about_point2
				document.getElementById("about_description_2").innerHTML = about_description2
      }

        const video_data = await data.video_title
      if(video_data)
      {
        const video_url =
        `
        <a href="${video_data.url}" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon fa fa-play" aria-hidden="true"></i><span class="ripple"></span></a>
    
        `
      
        const video_description = video_data.title
    
        document.getElementById("video_url").innerHTML = video_url
        document.getElementById("video_title").innerHTML = video_description
    }

        const benefit_data = await data.benefit
      if(benefit_data)
      {

      
        const benefits_heading1 = benefit_data.heading1
        const benefits_point_1 = benefit_data.point1
        
        const benefits_heading_2 = benefit_data.heading2
        const benefits_point_2 = benefit_data.point2
        
        const benefits_heading_3 = benefit_data.heading3
        const benefits_point_3 = benefit_data.point3
        
        const benefits_heading_4 = benefit_data.heading4
        const benefits_point_4 = benefit_data.point4
            
			
				document.getElementById("benefits_heading1").innerHTML = benefits_heading1
				document.getElementById("benefits_point1").innerHTML = benefits_point_1

				document.getElementById("benefits_heading2").innerHTML = benefits_heading_2
				document.getElementById("benefits_point2").innerHTML = benefits_point_2
				
				document.getElementById("benefits_heading3").innerHTML = benefits_heading_3
        document.getElementById("benefits_point3").innerHTML = benefits_point_3
				
				document.getElementById("benefits_heading4").innerHTML = benefits_heading_4
        document.getElementById("benefits_point4").innerHTML = benefits_point_4

    }

        const process_data = await data.visa_process

        if(process_data)
        {

        
        const process_heading_1 = process_data.heading1
        const process_point_1 = process_data.point1

        const process_heading_2 = process_data.heading2
        const process_point_2 = process_data.point2
			
        const process_heading_3 = process_data.heading3
        const process_point_3 = process_data.point3
            
			
				document.getElementById("process_heading1").innerHTML = process_heading_1
				document.getElementById("process_point1").innerHTML = process_point_1

				document.getElementById("process_heading2").innerHTML = process_heading_2
				document.getElementById("process_point2").innerHTML = process_point_2
				
				document.getElementById("process_heading3").innerHTML = process_heading_3
        document.getElementById("process_point3").innerHTML = process_point_3
        }


            
        const blogs_data = await data.blogs;

        if (blogs_data && blogs_data.length > 0) {
          let blogs_details = "";
        
          blogs_data.forEach((blog, index) => {
            const date = new Date(blog.created_at);
            const day = date.getDate();
            const month = date.toLocaleString('default', { month: 'long' });
            const year = date.getFullYear();
        
            const contentArray = blog.content || [];
            const contentText = contentArray.map((item) => item.content).join('');
        
            const text = typeof contentText === 'string' ? contentText.split(' ').slice(0, 50).join(' ') : '';
            const truncatedText = contentText.length > text.length ? text + '...' : text;
        
            blogs_details += `
              <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image"><a href="/blog/${blog._id}"><img src="/storage/${blog.image}" alt=""></a></figure>
                    <span class="date">${day} <span class="month">${month}</span></span>
                  </div>
                  <div class="lower-content">
                    <h4 class="title"><a href="/blog/${blog._id}">${blog.title}</a></h4>
                    <div class="text">${truncatedText}</div>
                  </div>
                </div>
              </div>`;
          });
        
          document.getElementById("dynamic_blogs").innerHTML = blogs_details;
        }
        
        
        

  } 
  
  catch (error) 
  {
	  console.error(error);
	}
  }


  function truncateText(text, maxLength) 
  {
      if (text.length > maxLength) 
      {
          return text.substring(0, maxLength) + "...";
      }
      
      return text;
  }


// async function dynamic_data() {
// 	try {
// 	  const response = await fetch("https://dhwayoverseas.com/api/logo");
// 	  if (!response.ok) {
// 		throw new Error("Failed to fetch logo data");
// 	  }
// 	  const logo_data = await response.json();
 
// 	  const logos1 = `<a href="/home"><img src="/storage/${logo_data.logo}" height="80px" width="80px" alt="Logo Not found"></a>`;
// 	  const logos2 = `<a href="/home"><img src="/storage/${logo_data.logo}" alt="Logo Not found"></a>`;
  
// 	  document.getElementById("logo_id1").innerHTML = logos1;
// 	  document.getElementById("logo_id2").innerHTML = logos2;
// 	  document.getElementById("logo_id3").innerHTML = logos2;
// 	  document.getElementById("logo_id4").innerHTML = logos1;
// 	} catch (error) {
// 	  console.error(error);
// 	}
//   }

  
//   async function dynamic_navbar() {
//     try {
//       // const response = await fetch("https://dhwayoverseas.com/api/ahpd");
//       const response = await fetch("http://localhost:8000/api/ahpd");
//       if (!response.ok) {
//         throw new Error("Failed to fetch navbar data");
//       }
//       const data = await response.json();
        
//       console.log("data",data);
//       const menu_data = await data.navbar;
//       // const menu_data = await response.json();
  
//       if (menu_data.length > 0) {
//         const menuHtml = buildMenu(menu_data);
//         // document.getElementById("dynamic_navbar").innerHTML = menuHtml;
        
//         document.getElementById("dynamic_navbar1").innerHTML = menuHtml;
//         document.getElementById("dynamic_navbar2").innerHTML = menuHtml;
//       } else {
//         document.getElementById("dynamic_navbar").innerHTML = "No menu data found.";
//       }
//     } catch (error) {
//       console.error(error);
//     }
//   }
  
//   function buildMenu(menu_data) {
//     let menuHtml = '<ul class="navigation">';
//     const topLevelItems = menu_data.filter((item) => item.parent_id == null);
  
//     topLevelItems.forEach((navbar) => {
//       menuHtml += '<li';
//       if (has_submenu(menu_data, navbar.id)) {
//         menuHtml += ' class="dropdown"';
//       }
//       menuHtml += '>';
//       if (has_submenu(menu_data, navbar.id)) {
//         menuHtml += `<a href="/${navbar.url}">${navbar.title}</a>`;
//         menuHtml += buildSubMenu(menu_data, navbar.id);
//       } else {
//         menuHtml += `<a href="/${navbar.url}">${navbar.title}</a>`;
//       }
//       menuHtml += '</li>';
//     });
  
//     menuHtml += '</ul>';
//     return menuHtml;
//   }
  
//   function buildSubMenu(menu_data, parentId) {
//     const subItems = menu_data.filter((item) => item.parent_id == parentId);
//     if (subItems.length == 0) {
//       return '';
//     }
  
//     let submenuHtml = '<ul>';
//     subItems.forEach((subnavbar) => {
//       submenuHtml += '<li';
//       if (has_submenu(menu_data, subnavbar.id)) {
//         submenuHtml += ' class="dropdown"';
//       }
//       submenuHtml += '>';
//       submenuHtml += `<a href="/${subnavbar.url}">${subnavbar.title}</a>`;
//       submenuHtml += buildSubMenu(menu_data, subnavbar.id);
//       submenuHtml += '</li>';
//     });
  
//     submenuHtml += '</ul>';
//     return submenuHtml;
//   }
  
//   function has_submenu(menu_data, parentId) {
//     return menu_data.some((item) => item.parent_id == parentId);
//   }

//   function truncateText(text, maxLength) 
// {
//     if (text.length > maxLength) 
//     {
//         return text.substring(0, maxLength) + "...";
//     }
    
//     return text;
// }


// async function dynamic_slider() {
//     try {
//       const response = await fetch("https://dhwayoverseas.com/api/slider");
//       if (!response.ok) {
//         throw new Error("Failed to fetch slider data");
//       }
  
//       const slider_data = await response.json();
    
//     console.log(slider_data)
//       const heading = slider_data.heading;
//       const sub_heading = slider_data.sub_heading;
  
//       document.getElementById("slider_heading").innerHTML = heading;
//       document.getElementById("slider_sub_heading").innerHTML = sub_heading;
//     } catch (error) {
//       console.error(error);
//     }
//   }
  

  
  
//   async function dynamic_social_tags() {
//   try {
//     const response = await fetch("https://dhwayoverseas.com/api/social-tags");
//     if (!response.ok) {
//       throw new Error("Failed to fetch social tags");
//     }

//     const social_tags = await response.json();

//     const social_info = `
//       <li><a href="${social_tags.instagram}"><span class="fab fa-instagram"></span></a></li>
//       <li><a href="${social_tags.twitter}"><span class="fab fa-twitter"></span></a></li>
//       <li><a href="${social_tags.facebook}"><span class="fab fa-facebook-f"></span></a></li>
//       <li><a href="${social_tags.youtube}"><span class="fab fa-youtube"></span></a></li>
//     `;

//     document.getElementById("social_info").innerHTML = social_info;
//   } catch (error) {
//     console.error(error);
//   }
// }


// async function dynamic_contact_info() {
//   try {
//     const response = await fetch("https://dhwayoverseas.com/api/contact-info");
//     if (!response.ok) {
//       throw new Error("Failed to fetch contact info");
//     }

//     const contact_data = await response.json();

//     const contact_info_1 = `
//       <li><i class="fa fa-phone"></i>${contact_data.mobile1}</li>
//       <li><i class="fa fa-phone"></i>${contact_data.mobile2}</li> 
//       <li><i class="fa fa-map-marker"></i> ${contact_data.address}</li> 
//     `;

//     const contact_info_2 = `
//       <li>
//         <i class="icon fa fa-phone-square"></i>
//         <span class="title">Phone:</span>
//         <div class="text"><a href="tel:${contact_data.mobile1}">${contact_data.mobile1}</a></div>
//       </li>
//       <li>
//         <i class="icon fa fa-phone-square"></i>
//         <span class="title">Phone:</span>
//         <div class="text"><a href="tel:${contact_data.mobile2}">${contact_data.mobile2}</a></div>
//       </li>
//       <li>
//         <i class="icon fa fa-map-marker"></i>
//         <span class="title">Address:</span>
//         <div class="text">${contact_data.address}</div>
//       </li>
//     `;

//     document.getElementById("header_contact_info").innerHTML = contact_info_1;
//     document.getElementById("footer_contact_info").innerHTML = contact_info_2;
//   } catch (error) {
//     console.error(error);
//   }
// }

(async () => {
    await dynamic_data();
    // await dynamic_navbar();
    // await dynamic_contact_info();
    // await dynamic_slider();
    // await dynamic_social_tags();
    // await dynamic_navbar();
})();

