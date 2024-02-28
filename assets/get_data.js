export async function getInvoices(limit) {
    // Appelle PHP pour récurérer les données.

    if(limit) {
        return fetch(`./backend/api.php/invoices?limit=${limit}`).then(res => res.json())
    } else {
        return fetch('./backend/api.php/invoices').then(res => res.json())
    }
}
