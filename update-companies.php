<?php
require_once('backend/controllers/companiesControllers.php');
require_once('backend/models/companies.php');

$companyId = isset($_GET['id']) ? $_GET['id'] : null;

$companiesController = new CompaniesController();
$company = $companiesController->get_companyByID($companyId);

if ($company) {
    $company_name = $company['name'];
    $company_tva = $company['tva'];
    $company_country = $company['country'];
    $company_supplier =$company['supplier'];
} else {
    echo "company not found";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $updatedName = $_POST['name'];
    $updatedcountry = $_POST['country'];
    $updatedtva = $_POST['tva'];
    $supplier = $_POST['supplier']; 
    $updated_type= $_POST['type_id']; 

    $isUpdated = $companiesController->update_company($updatedName, $updated_type, $updatedtva, $updatedcountry, $companyId, $updatedSupplier);

    if ($isUpdated) {
        echo "company updated successfully.";
        echo $updatedName;
    } else {
        echo "Failed to update company.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="updatecompanyForm" method="POST">
    <input id="companies_name" name="name" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $company_name; ?>" />
    <script src="countries.js" defer></script>
    <script src="countries-flag.js" defer></script>
    <select id="companies_country" name="country" class="bg-slate-100 mt-11 p-2 w-full mr-4">
                            <option value="">Select a country</option>
    <input id="companies_tva" name="tva" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $company_tva; ?>" >
 
  <select id="type_id" name="type_id" class="bg-slate-100 mt-11 p-2">
                            <script>
                                
                                fetch('http://localhost/COGIP/backend/api.php/types')
                                    .then(response => {
                                        if (!response.ok) {
                                            throw new Error('bip bip error');
                                        }
                                        return response.json();
                                    })
                                    .then(types => {
                                        let selectElement = document.getElementById('type_id');
                                        types.forEach(type => {
                                            let option = document.createElement('option');
                                            option.value = type.id; 
                                            option.textContent = type.name; 
                                            selectElement.appendChild(option);
                                        });
                                    })
                                    .catch(error => console.error('Erreur lors de la récupération des types :', error));
                            </script>
                            </select>
                            <input id="contact" name="contact" value="0"  class="bg-slate-100 mt-11 p-2 w-full" type="radio" checked>
                        <label class="mt-11 p-2 w-full" for="contact">Contact</label>

                        <input id="supplier" name="supplier" value="1" class="bg-slate-100 mt-11 p-2 w-full" type="radio">
                        <label class="mt-11 p-2 w-full" for="supplier">Supplier</label>
  <label for="company-name"></label>
  <input
    id="companies_date"
    name="date"
    class="bg-slate-100 mt-11 p-2"
    type="date"
    placeholder="Date"
  />
  <label for="date"></label>

    <input  class="bg-indigo-300 mt-11 w-full text-left p-2" type="submit" name="submit" value="Update">
      </form >
  </body>
</html>