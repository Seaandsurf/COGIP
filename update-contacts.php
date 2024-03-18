
<?php
require_once('backend/controllers/contactsControllers.php');
require_once('backend/models/contacts.php');

$contactId = isset($_GET['id']) ? $_GET['id'] : null;

$contactsController = new ContactsController();
$contact = $contactsController->get_contactByID($contactId);

if ($contact) {
    $contact_name = $contact['name'];
    $contact_mail = $contact['email'];
    $contact_phone = $contact['phone'];
} else {
    echo "Contact not found";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $updatedName = $_POST['name'];
    $updatedPhone = $_POST['phone'];
    $updatedEmail = $_POST['mail'];
    $companyId = $_POST['company-name'];

    $isUpdated = $contactsController->update_contact($updatedName, $updatedEmail, $updatedPhone, $companyId, $contactId); // Corrected variable names

    if ($isUpdated) {
        echo "Contact updated successfully.";
        echo $updatedName;
    } else {
        echo "Failed to update contact.";
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
<form id="updateContactForm" method="POST">
    <input id="contacts_name" name="name" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $contact_name; ?>" />
    <input id="contacts_phone" name="phone" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $contact_phone; ?>">
    <input id="contacts_mail" name="mail" class="bg-slate-100 mt-11 p-2" type="text" value="<?php echo $contact_mail; ?>" >
    <select
    id="contacts_update"
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
            "contacts_update"
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
  <label for="company-name"></label>
  <input
    id="contacts_date"
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