<?php
require_once('backend/controllers//invoicesControllers.php');
require_once('backend/models/invoices.php');

$invoiceId = isset($_GET['id']) ? $_GET['id'] : null;
echo $invoiceId ;

$invoicesController = new InvoicesController();
$invoice = $invoicesController->get_invoiceByID($invoiceId);

if ($invoice) {
    $invoice_ref= $invoice['ref'];
    $invoice_price = $invoice['price'];
} else {
    echo "invoice not found";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $updatedRef = $_POST['ref'];
    $updatedPrice = $_POST['price'];
    $companyId = $_POST['company-name'];
  
    $isUpdated = $invoicesController->update_invoice($updatedRef, $updatedPrice, $companyId, $invoiceId);

    if ($isUpdated) {
        echo "invoice updated successfully.";
        echo $updatedref;
    } else {
        echo "Failed to update invoice.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta ref="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="updateinvoiceForm" method="POST">
    <input id="invoices_ref" name="ref" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $invoice_ref; ?>" />
    <input id="invoices_price" name="price" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $invoice_price; ?>">
    <select
    id="invoices_update"
    name="company-name"
    class="bg-slate-100 mt-11 p-2"
    type="text"
    placeholder="Company name"
  >
    <script>
      fetch("http://localhost/COGIP/backend/api.php/companies")
        .then((response) => {
          if (!response.ok) {
            throw new Error("bip bip error");
          }
          return response.json();
        })
        .then((companies) => {
          let selectElement = document.getElementById(
            "invoices_update"
          );
          companies.forEach((company) => {
            let option = document.createElement("option");
            option.value = company.id;
            option.textContent = company.name;
            selectElement.appendChild(option);
          });
        })
        .catch((error) =>
          console.error(
            "Erreur lors de la récupération des types :",
            error
          )
        );
    </script>
  </select>
  <label for="company-ref"></label>
  <input
    id="invoices_date"
    ref="date"
    class="bg-slate-100 mt-11 p-2"
    type="date"
    placeholder="Date"
  />
  <label for="date"></label>

    <input  class="bg-indigo-300 mt-11 w-full text-left p-2" type="submit" ref="submit" value="Update">
      </form >
  </body>
</html>