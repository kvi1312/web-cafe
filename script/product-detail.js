function showNotification(message, color){
    
    $('#notificationContainer').append(
        ` <div  class="alert alert-${color} alert-dismissible fade show mt-4 mr-4" role="alert">
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`
    );
}

function addToCart(productId){
    $.post( `/htdocs-update/api/invoice.php`, {
        'action':'add-to-cart',
        'productId': productId,
        'amount': 1,
    // }, function(data){
    //     showNotification('Đã thêm vào giỏ!', 'success');
    // });
    }, function( data ) {
        console.log(data);// data response from server
        // Cast json to js object 
        let response = JSON.parse(data);
        if (response.errorCode == 1) {
            // Require login
            window.location.href = '/htdocs-update/login.php';
        } else if (response.errorCode == 0) {
            // success
            showNotification('Thêm vào giỏ thành công!', 'success');
        } else {
            console.log('Error: unknown error');
        }
    });
}

$(function(){
    $('.btn-add-to-cart').click(function(event){
        event.preventDefault();
        event.stopPropagation();
        addToCart($(this).attr('productId'));
    })
})
