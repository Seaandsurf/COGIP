import { getInvoices } from './get_data.js'

async function afficherInvoices() {
    const table = document.getElementById('tab-invoices').querySelector('tbody')

    // Va chercher les données depuis PHP.
    const invoices = await getInvoices(5);

    // Crée les lignes dans la table.
    invoices.forEach(invoice => {
        const tr = document.createElement('tr')
        tr.className = 'py-8 border-collapse'

        const td1 = document.createElement('td')
        td1.className = "pl-2 pb-2 bg-red-500"
        td1.innerText = invoice.ref

        const td2 = document.createElement('td')
        td2.className = "pb-2"
        td2.innerText = invoice.date_due

        const td3 = document.createElement('td')
        td3.className = "pb-2"
        td3.innerText = invoice.company_name

        const td4 = document.createElement('td')
        td4.className = "pb-2"
        td4.innerText = invoice.created_at

        tr.append(td1, td2, td3, td4)
        table.append(tr)
    })
}

async function main() {
    afficherInvoices()
}

// TODO Gestion des erreurs.
main()
