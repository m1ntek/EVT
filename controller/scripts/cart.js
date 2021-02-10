

function addProduct(element)
{
    var qtyProductId = "qtyProduct" + element.id
    var qty = parseInt(document.getElementById(qtyProductId).value)

    console.log(document.cookie)

    //If it is the first entry, just save and return
    if(document.cookie.includes(qtyProductId) == false)
    {
        document.cookie = qtyProductId + "=" + qty
        return
    }

    cookieQty = parseInt(getCookie(qtyProductId))

    cookieQty += qty
    document.cookie = qtyProductId + "=" + cookieQty

    //For debugging
    console.log(document.cookie)
}

function removeProduct(element)
{
    console.log(document.cookie)
    console.log(element)

    var qtyProductId = "qtyProduct" + element.id

    //Remove the cookie
    if(document.cookie.includes(qtyProductId) == true)
    {
        document.cookie = qtyProductId + "=0; Max-Age=0"
    }

    window.location.reload();
}

function getCookie(name)
{
    return document.cookie.split("; ").find(row => row.startsWith(name)).split("=")[1]
}