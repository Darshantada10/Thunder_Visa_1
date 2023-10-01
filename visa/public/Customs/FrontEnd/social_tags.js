async function dynamic_social_tags() {
  try {
    const response = await fetch("https://dhwayoverseas.com/api/social-tags");
    if (!response.ok) {
      throw new Error("Failed to fetch social tags");
    }

    const social_tags = await response.json();

    const social_info = `
      <li><a href="${social_tags.instagram}"><span class="fab fa-instagram"></span></a></li>
      <li><a href="${social_tags.twitter}"><span class="fab fa-twitter"></span></a></li>
      <li><a href="${social_tags.facebook}"><span class="fab fa-facebook-f"></span></a></li>
      <li><a href="${social_tags.youtube}"><span class="fab fa-youtube"></span></a></li>
    `;

    document.getElementById("social_info").innerHTML = social_info;
  } catch (error) {
    console.error(error);
  }
}

(async () => {
  await dynamic_social_tags();
})();
