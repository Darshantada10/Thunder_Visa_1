async function dynamic_slider() {
    try {
      const response = await fetch("https://dhwayoverseas.com/api/slider");
      if (!response.ok) {
        throw new Error("Failed to fetch slider data");
      }
  
      const slider_data = await response.json();
  
      const heading = slider_data.heading;
      const sub_heading = slider_data.sub_heading;
  
      document.getElementById("slider_heading").innerHTML = heading;
      document.getElementById("slider_sub_heading").innerHTML = sub_heading;
    } catch (error) {
      console.error(error);
    }
  }
  
  (async () => {
    await dynamic_slider();
  })();
  