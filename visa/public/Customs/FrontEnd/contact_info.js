async function dynamic_contact_info() {
  try {
    const response = await fetch("https://dhwayoverseas.com/api/contact-info");
    if (!response.ok) {
      throw new Error("Failed to fetch contact info");
    }

    const contact_data = await response.json();

    const contact_info_1 = `
      <li><i class="fa fa-phone"></i>${contact_data.mobile1}</li>
      <li><i class="fa fa-phone"></i>${contact_data.mobile2}</li> 
      <li><i class="fa fa-map-marker"></i> ${contact_data.address}</li> 
    `;

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
  } catch (error) {
    console.error(error);
  }
}

(async () => {
  await dynamic_contact_info();
})();
