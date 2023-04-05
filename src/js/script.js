// add to cart
function addtocart($id){
    $.ajax({
        url:"./action/cartaction.php",
        type:"POST",
        data:{id:$id,"action":"addcart"},
        datatype:"json"
    }).done(function(result){
        
        $("#details").html(result);
    })
}
// remove from cart
function remove($id)
{
    //console.log("helo"+$id);
    $.ajax({
        url:"./action/cartaction.php",
        type:"POST",
        data:{id:$id,"action":"remove"},
        datatype:"json"
    }).done(function(result){
     
        $("#details").html(result);
    })
}
// decrement cart by 1
function decrement($id)
{
$.ajax({
    url:"./action/cartaction.php",
    type:"POST",
    data:{id:$id,"action":"decreaseone"},
    datatype:"json"
}).done(function(result){
 
    $("#details").html(result);
})
}
// increment function
function increment($id)
{
//console.log("helo"+$id);
$.ajax({
    url:"./action/cartaction.php",
    type:"POST",
    data:{id:$id,"action":"increaseone"},
    datatype:"json"
}).done(function(result){
 
    $("#details").html(result);
})
}
// empty the cart
function empty()
{
    $.ajax({
        url:"./action/cartaction.php",
        type:"POST",
        data:{"action":"empty"},
        datatype:"json"
    }).done(function(result){
     
        $("#details").html(result);
    })
}