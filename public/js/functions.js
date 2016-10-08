/**
 * Created by shahrukh on 3/10/16.
 */

$('#add-to-cart').click(function()
{
    var name = $('#name').val();
    var id = $('#id').val();
    var size = $("input[name='product-size']:checked").val();
    var quantity = $('#quantity').val();
    var color = $('#color').val();
    var token = $('#token').val();
    var sku = id + '-' + convertToSlug(name);

    $.post('/add-to-cart', {
        'name' : name,
        'id' : id,
        'size' : size,
        'quantity' : quantity,
        'color' : color,
        '_token' : token,
        'sku' : sku
    }, function(data)
    {
        var parsed = JSON.parse(data);
        console.log(parsed);
    });
});

function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '')
        ;
}

$('.minus').click(function()
{
    var id = $(this).data('id');
    var quantityField = $('#quantity-'+id);
    var quantity = quantityField.val();
    var price = $('#amount-'+id).attr('data-amount');
    var totalClass = $('.total-'+id);
    if(quantity > 0) {
        quantity = quantity - 1;
        quantityField.val(quantity);
    }
    var total = price * quantity;
    totalClass.empty();
    totalClass.append(total);
});

$('.plus').click(function()
{
    var id = $(this).data('id');
    var value = 1;
    var quantityField = $('#quantity-'+id);
    var quantity = quantityField.val();
    var totalClass = $('.total-'+id);
    var cartTotalClass = $('.cartTotal');
    var price = $('#amount-'+id).attr('data-amount');
    quantity = parseInt(quantity) + value;
    quantityField.val(quantity);
    var totalPerProduct = price * quantity;
    totalClass.empty();
    totalClass.append(totalPerProduct);
    var cartTotal = cartTotalClass.data('value');
    cartTotal = parseInt(cartTotal) + parseInt(price);
    cartTotalClass.empty();
    cartTotalClass.append("INR"+cartTotal);
    cartTotalClass.data('value', cartTotal);
});