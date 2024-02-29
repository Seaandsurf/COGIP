import { getDataLimit } from './get_data.js'

async function afficherLastInvoices() {
    const table = document.getElementById('lastInvoices').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const lastInvoices = await getDataLimit('./backend/api.php/invoices', 5);

    // Crée les lignes dans la table.
    lastInvoices.forEach(last_invoices => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = last_invoices.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = last_invoices.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = last_invoices.price

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_invoices.company_name

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = last_invoices.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = last_invoices.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}


async function afficherLastContacts() {
    const table = document.getElementById('lastContacts').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const LastContacts = await getDataLimit('./backend/api.php/contacts', 5);

    // Crée les lignes dans la table.
    LastContacts.forEach(last_contacts => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = last_contacts.name

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = last_contacts.company_name

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = last_contacts.email

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_contacts.phone

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = last_contacts.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = last_contacts.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}


async function afficherLastCompanies() {
    const table = document.getElementById('lastCompanies').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const LastCompanies = await getDataLimit('./backend/api.php/companies', 5);

    // Crée les lignes dans la table.
    LastCompanies.forEach(last_companies => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = last_companies.name

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = last_companies.types_id_name

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = last_companies.country

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_companies.tva

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = last_companies.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = last_companies.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}


async function afficherAllInvoices() {
    const table = document.getElementById('allInvoices').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const AllInvoices = await getDataLimit('./backend/api.php/invoices', 10);

    // Crée les lignes dans la table.
    AllInvoices.forEach(all_invoices => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = all_invoices.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = all_invoices.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = all_invoices.price

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_invoices.company_name

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = all_invoices.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = all_invoices.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}


async function afficherAllContacts() {
    const table = document.getElementById('allContacts').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const AllContacts = await getDataLimit('./backend/api.php/contacts', 10);

    // Crée les lignes dans la table.
    AllContacts.forEach(all_contacts => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = all_contacts.name

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = all_contacts.company_name

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = all_contacts.email

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_contacts.phone

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = all_contacts.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = all_contacts.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}



async function afficherAllCompanies() {
    const table = document.getElementById('allCompanies').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const AllCompanies = await getDataLimit('./backend/api.php/companies', 10);

    // Crée les lignes dans la table.
    AllCompanies.forEach(all_companies => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = all_companies.name

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = all_companies.types_id_name

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = all_companies.country

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_companies.tva

        const td5 = document.createElement('td')
        td5.className = "pb-2"
        td5.innerText = all_companies.created_at

        const td6 = document.createElement('td')
        td6.className = "pb-2"
        td6.innerText = all_companies.updated_at

        tr.append(td1, td2, td3, td4, td5, td6)
        table.append(tr)
    })
}







async function main() {
    afficherLastInvoices()
    afficherLastContacts()
    afficherLastCompanies()
    afficherAllInvoices()
    afficherAllContacts()
    afficherAllCompanies()

}

// TODO Gestion des erreurs.
main()
