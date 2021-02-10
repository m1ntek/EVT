

function addProduct(element)
{
    var qtyProductId = "qtyProduct" + element.id
    var qty = parseInt(document.getElementById(qtyProductId).value)

    //If it is the first entry, just save and return
    if(document.cookie.includes(qtyProductId) == false)
    {
        document.cookie = qtyProductId + "=" + qty + "; Max-Age=0"
        return
    }

    cookieQty = parseInt(getCookie(qtyProductId))

    cookieQty += qty
    document.cookie = qtyProductId + "=" + cookieQty + "; Max-Age=0"

    //For debugging
    console.log(document.cookie)
}

function getCookie(name)
{
    return document.cookie.split("; ").find(row => row.startsWith(name)).split("=")[1]
}

function removeProduct(element)
{

}