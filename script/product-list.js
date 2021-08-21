function getProductList() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', '/htdocs-update/api/product.php?action=list', true);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.send();
}

function postDeleteProduct() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '/htdocs-update/api/product.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.send('action=delete');
}

// $(function){
//     $("#btn-list").click(getProductList);
//     $("#btn-del").click(postDeleteProduct);
// }


function getProductListJq() {
    $.get( "/htdocs-update/api/product.php?action=list", function( data ) {
        let jsob = JSON.parse(data);
        console.log(jsob);
    });
}

function callApiSearch(searchText) {
    $.get( `/htdocs-update/api/product.php?action=list&queryString=${searchText}`, function( data ) {
        let jsob = JSON.parse(data);
        //update UI
        refreshProductGrid(jsob);
    });
}

function refreshProductGrid(products) {
    $('#product-grid').empty();
    for (let product of products) {
        $('#product-grid').append(`<div class='col-lg-4 col-sm-6 item-item mb-3 product-item'>
            <div class='card'>
                <img class='card-img-top pic' src='https://capherangxay.vn/wp-content/uploads/2018/03/cong-thuc-pha-che-ca-phe-phin-ngon-tuyet-hao-2.jpg' alt='Card image cap'>
                <div class='card-body'>
                <h5 class='card-title'>${product.name}</h5>
                <p class='card-text'>${product.description}</p>
                <p class='card-text'>${product.price}</p></p>
                <button productId='${product.id}' class='btn btn-primary btn-add-top-cart'>Thêm vào giỏ</button>
                </div>
            </div>
        </div>`);
    }
}

function postDeleteProductJq() {
    let formData = {
        action: 'delete',
    }
    $.post( "/htdocs-update/api/product.php", formData, function( data ) {
        console.log(data);
    });
}

$(function(){
    $('input.search_input').keyup(function() {
        let searchText = $(this).val();
        callApiSearch(searchText);
    });
})

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

