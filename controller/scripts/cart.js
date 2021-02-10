function addProduct(element)
{
    //Get product details
    var name = document.getElementById("nameProduct" + element.id).firstChild.data
    var price = document.getElementById("priceProduct" + element.id).firstChild.data

    //Save to cookie
    document.cookie = "nameProduct" + element.id + "=" + name + "; expires=0"
    document.cookie = "priceProduct" + element.id + "=" + price + "; expires=0"
    addQty(element.id)

    //For debugging
    console.log(document.cookie)
}

function addQty(elementId)
{
    var qtyProductId = "qtyProduct" + elementId
    var qty = parseInt(document.getElementById(qtyProductId).value)

    cookieQty = parseInt(getCookie(qtyProductId))

    cookieQty += qty
    document.cookie = qtyProductId + "=" + cookieQty + "; expires=0"
}

function getCookie(name)
{
    return document.cookie.split("; ").find(row => row.startsWith(name)).split("=")[1]
}

function removeProduct(element)
{
    
}