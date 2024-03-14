fetch("countries-flag.json")
  .then((response) => response.json())
  .then((data) => {
    const selectElement = document.getElementById("companies_country");

    data.forEach((country) => {
      const optionElement = document.createElement("option");
      optionElement.value = country.code;
      optionElement.textContent = country.country;

      const imgElement = document.createElement("img");
      imgElement.src = country.flag;

      optionElement.appendChild(imgElement);

      selectElement.appendChild(optionElement);
    });
  })
  .catch((error) => console.error("Error fetching countries.json:", error));
