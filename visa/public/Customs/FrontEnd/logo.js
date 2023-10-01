async function dynamic_logo() {
	try {
	  const response = await fetch("https://dhwayoverseas.com/api/logo");
	  if (!response.ok) {
		throw new Error("Failed to fetch logo data");
	  }
  
	  const logo_data = await response.json();
  
	  const logos1 = `<a href="/home"><img src="/storage/${logo_data.logo}" height="80px" width="80px" alt="Logo Not found"></a>`;
	  const logos2 = `<a href="/home"><img src="/storage/${logo_data.logo}" alt="Logo Not found"></a>`;
  
	  document.getElementById("logo_id1").innerHTML = logos1;
	  document.getElementById("logo_id2").innerHTML = logos2;
	  document.getElementById("logo_id3").innerHTML = logos2;
	  document.getElementById("logo_id4").innerHTML = logos1;
	} catch (error) {
	  console.error(error);
	}
  }
  
  (async () => {
	await dynamic_logo();
  })();
  