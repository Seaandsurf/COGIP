export async function getDataLimit(url, limit) {
    // Appelle PHP pour récurérer les données.

    if(limit) {
        return fetch(`${url}?limit=${limit}`).then(res => res.json())
    } else {
        return fetch(url).then(res => res.json())
    }
}
