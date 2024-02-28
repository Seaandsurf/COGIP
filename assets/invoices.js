
async function getAll() {
    const invoices = await fetch('./backend/api.php/invoices').then(res => res.json())

    const displayDiv = document.getElementById('display-invoices')
    displayDiv.innerHTML = ''

    invoices.forEach(i => {
        const elm = document.createElement('div')
        elm.innerText = i.ref
        elm.className = 'ligne-facture red-backgound tailwind-bidule'

        displayDiv.append(elm)
    })
}

getAll()
