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
    var cartTotalClass = $('.cartTotal');
    var item_id = $('#item_id').val();
    var token = $("input[name='_token']").val();
    if(quantity > 0) {
        quantity = quantity - 1;
        quantityField.val(quantity);
        $.post('update-cart', {'item_id': item_id, '_token' : token, 'value' : 1}, function(data)
        {
           var parsed = JSON.parse(data);
            if(parsed === 'success')
            {
                var total = price * quantity;
                totalClass.empty();
                totalClass.append(total);
                var cartTotal = cartTotalClass.data('value');
                cartTotal = parseInt(cartTotal) - parseInt(price);
                cartTotalClass.empty();
                cartTotalClass.append("INR"+cartTotal);
                cartTotalClass.data('value', cartTotal);

                console.log('show the success modal');
            }
            else{
                console.log('show the failure modal');
            }
        });
    }
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
    var item_id = $('#item_id').val();
    var token = $("input[name='_token']").val();
    quantity = parseInt(quantity) + value;
    quantityField.val(quantity);
    $.post('update-cart', {'item_id': item_id, '_token' : token, 'value' : 2}, function(data)
    {
        var parsed = JSON.parse(data);
        if(parsed === 'success')
        {
            var totalPerProduct = price * quantity;
            totalClass.empty();
            totalClass.append(totalPerProduct);
            var cartTotal = cartTotalClass.data('value');
            cartTotal = parseInt(cartTotal) + parseInt(price);
            cartTotalClass.empty();
            cartTotalClass.append("INR"+cartTotal);
            cartTotalClass.data('value', cartTotal);
            console.log('show the success modal');
        }
        else{
            console.log('show the failure modal');
        }
    });
});

$('#login').click(function()
{
    $('#login-modal').modal('show');
});

$('#process-login').click(function()
{
    var email = $('#email').val();
    var password = $('#password').val();
    var token = $("input[name=_token]").val();

    $.post('/login', {'email' : email, 'password' : password, '_token' : token}, function(data)
    {
       var parsed = JSON.parse(data);
        if(parsed === 'success')
        {
            window.location.replace("http://lalit.dev/checkout");
        }
    });
});

$("input[name='optionsRadios']").click(function()
{
    var options = $("input[name='optionsRadios']:checked").val();
    if(options == 'offline')
    {
        $('#pay_button').html('Place order');
    }
    else
    {
        $('#pay_button').html('Proceed to pay');
    }
});