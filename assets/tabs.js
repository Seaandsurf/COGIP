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
        td3.innerText = last_invoices.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_invoices.created_at

        tr.append(td1, td2, td3, td4)
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
        td1.innerText = last_contacts.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = last_contacts.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = last_contacts.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_contacts.created_at

        tr.append(td1, td2, td3, td4)
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
        td1.innerText = last_companies.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = last_companies.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = last_companies.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = last_companies.created_at

        tr.append(td1, td2, td3, td4)
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
        td3.innerText = all_invoices.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_invoices.created_at

        tr.append(td1, td2, td3, td4)
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
        td1.innerText = all_contacts.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = all_contacts.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = all_contacts.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_contacts.created_at

        tr.append(td1, td2, td3, td4)
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
        td1.innerText = all_companies.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = all_companies.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = all_companies.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = all_companies.created_at

        tr.append(td1, td2, td3, td4)
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
