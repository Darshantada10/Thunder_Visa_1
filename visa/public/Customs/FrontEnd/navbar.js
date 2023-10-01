async function dynamic_navbar() {
    try {
      // const response = await fetch("https://dhwayoverseas.com/api/navbar");
      const response = await fetch("http://localhost:8000/api/navbar");
      if (!response.ok) {
        throw new Error("Failed to fetch navbar data");
      }
  
      const menu_data = await response.json();
  
      if (menu_data.length > 0) {
        const menuHtml = buildMenu(menu_data);
        document.getElementById("dynamic_navbar").innerHTML = menuHtml;
      } else {
        document.getElementById("dynamic_navbar").innerHTML = "No menu data found.";
      }
    } catch (error) {
      console.error(error);
    }
  }
  
  function buildMenu(menu_data) {
    let menuHtml = '<ul class="navigation">';
    const topLevelItems = menu_data.filter((item) => item.parent_id == null);
  
    topLevelItems.forEach((navbar) => {
      menuHtml += '<li';
      if (has_submenu(menu_data, navbar.id)) {
        menuHtml += ' class="dropdown"';
      }
      menuHtml += '>';
      if (has_submenu(menu_data, navbar.id)) {
        menuHtml += `<a href="/${navbar.url}">${navbar.title}</a>`;
        menuHtml += buildSubMenu(menu_data, navbar.id);
      } else {
        menuHtml += `<a href="/${navbar.url}">${navbar.title}</a>`;
      }
      menuHtml += '</li>';
    });
  
    menuHtml += '</ul>';
    return menuHtml;
  }
  
  function buildSubMenu(menu_data, parentId) {
    const subItems = menu_data.filter((item) => item.parent_id == parentId);
    if (subItems.length == 0) {
      return '';
    }
  
    let submenuHtml = '<ul>';
    subItems.forEach((subnavbar) => {
      submenuHtml += '<li';
      if (has_submenu(menu_data, subnavbar.id)) {
        submenuHtml += ' class="dropdown"';
      }
      submenuHtml += '>';
      submenuHtml += `<a href="/${subnavbar.url}">${subnavbar.title}</a>`;
      submenuHtml += buildSubMenu(menu_data, subnavbar.id);
      submenuHtml += '</li>';
    });
  
    submenuHtml += '</ul>';
    return submenuHtml;
  }
  
  function has_submenu(menu_data, parentId) {
    return menu_data.some((item) => item.parent_id == parentId);
  }
  
  (async () => {
    await dynamic_navbar();
  })();
  


