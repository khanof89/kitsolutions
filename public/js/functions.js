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

    $.post('/add-to-cart', {'name' : name, 'id' : id, 'size' : size, 'quantity' : quantity, 'color' : color, '_token' : token}, function(data)
    {
        var parsed = JSON.parse(data);
        console.log(parsed);
    });
});