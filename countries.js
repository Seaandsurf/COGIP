fetch("countries.json")
  .then((response) => response.json())
  .then((data) => {

    const countryDropdown = document.getElementById("countryDropdown");

    data.forEach((country) => {
      const option = document.createElement("option");
      option.value = country.code;
      option.text = country.name;
      countryDropdown.appendChild(option);
    });
  })
  .catch((error) => console.error("Error fetching countries.json:", error));
