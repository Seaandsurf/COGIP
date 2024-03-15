fetch("countries.json")
  .then((response) => response.json())
  .then((data) => {
    // Récupérer l'élément de liste déroulante
    const countryDropdown = document.getElementById("companies_country");

    // Boucler à travers les données et ajouter chaque pays comme une option
    data.forEach((country) => {
      const option = document.createElement("option");
      option.value = country.code;
      option.text = country.name;
      countryDropdown.appendChild(option);
    });
  })
  .catch((error) => console.error("Error fetching countries.json:", error));
