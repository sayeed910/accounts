<?php session_start(); ?>

<?php
if (!isset($_SESSION['me'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link   rel="stylesheet" type="text/css" href ='css/jquery.mCustomScrollbar.min.css'>
        <script src="js/editablegrid.js"></script>
        <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_renderers.js" ></script>
        <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_editors.js" ></script>
        <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_validators.js" ></script>
        <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_utils.js" ></script>
        <!-- [DO NOT DEPLOY] --> <script src="js/editablegrid_charts.js" ></script>

        <!--<script>

            window.onload = function () {
                editableGrid = new EditableGrid("DemoGridAttach", {sortIconUp: "up.png", sortIconDown: "down.png"});


                editableGrid.load({metadata: [
                        {name: "product-name",
                            datatype: "string",
                            editable: "true"
                        }, {
                            name: "product-id",
                            datatype: "string",
                            editable: "true"
                        }, {
                            name: "product-price",
                            datatype: "double(2)",
                            editable: "true"
                        }]
                });

                editableGrid.attachToHTMLTable('firstTable');
                editableGrid.renderGrid();
            }


        </script>-->


        <title>Dashboard</title>
    </head>

    <body>
        <header>
            <hgroup>
                <img id="logo" src="media/image/SupertechLogo.gif">
                <h1 class="site-title" >Supertech Trading Co.</h1>
            </hgroup>
            <hgroup class="usergroup">
                <span   class="username" id="username" >User</span>
                <image id="user-image" src="media/image/user.png"> 
            </hgroup>
        </header>
        <section>
            <nav class="main-menu-container">
                <ul class="main-menu">
                    <li><a href="index.php" class="menuItem">Dashboard</a></li>
                    <li><a href="#"  class="dropdown menuItem" id="product">
                            Product<span class="arrow">&#x25BC;</span></a>
                        <ul class="dropdown-nav" id="product-dropdown" data-toggle="collapse">
                            <li> <a href="#" class="menuItem modal" data-modal="modalAddProduct">
                                    Add Product</a></li>
                            <li> <a href="#" class="menuItem modal" data-modal="modalRemoveProduct">
                                    Remove Product</a></li>
                            <li> <a href="#" class="menuItem">View All Products</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown menuItem" href="#" id="employee">Employee<span class="arrow">&#x25BC;</span></a>
                        <ul class="dropdown-nav" id="employee-dropdown" data-toggle="collapse">
                            <li> <a href="#" class="menuItem modal" data-modal="modalAddEmployee">
                                    Add Employee</a></li>
                            <li> <a href="#" class="menuItem modal" data-modal="modalRemoveEmployee"
                                    >Remove Employee</a></li>
                            <li> <a href="#" class="menuItem">View All Employees</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown menuItem" id="transaction">
                            Transaction<span class="arrow">&#x25BC;</span></a>
                        <ul class="dropdown-nav" id="transaction-dropdown" data-toggle="collapse">
                            <li> <a href="#" class="menuItem modal" data-modal="modalPurchase">
                                    Purchase Order</a></li>
                            <li> <a href="#" class="menuItem modal" data-modal="modalSale">
                                    Sale Order</a></li>
                            <li> <a href="#" class="menuItem">View All Transactions</a></li>
                        </ul>   

                    </li>
                    <li><a href="#" class="dropdown menuItem" id='company'>
                            Affiliated Companies<span class="arrow">&#x25BC;</span></a>
                        <ul class="dropdown-nav" id="company-dropdown" data-toggle="collapse">
                            <li> <a href="#" class="menuItem modal" data-modal="modalAddCompany">
                                    Add Company</a></li>
                            <li> <a href="#" class="menuItem modal" data-modal="modalRemoveCompany">
                                    Remove Company</a></li>
                            <li> <a href="#" class="menuItem">View All Companies</a></li>
                        </ul>
                    </li>

                </ul>

            </nav>
        </section>

        <section>
            
        </section>
        <section id="modal-container">
            <form class="modal-window" id="modalAddProduct" method="POST" action="#">
                <h2 class="window-title">Add Product<span class="close-button">X</span></h2>
                <hr>
                <div  id="product-add-modal-form" class='mCustomScrollbar' data-mcs-theme='minimal-dark'>
                    <p><label>Product Id:</label><br>
                        <input type="text" id="add-product-code" name="add-product-code" value='' maxlength="10">
                    </p>
                    <p><label>Product Description:</label><br>
                        <input type="text" id="add-product-description" name="add-product-description" value='' maxlength="100">
                    </p>
                    <p><label>Brand:</label><br>
                        <input type="text" id="add-brand" name="add-brand" value='' maxlength="20">
                    </p>
                    <p><label>Sale Price:</label><br>
                        <input type="number" id="add-sale-price" name="add-sale-price" value='' maxlength="10">
                    </p>
                    <p><label>Purchase Price:</label><br>
                        <input type="number" id="add-purchase-price" name="add-purchase-price" value='' maxlength="10">
                    </p>
                    <p><label>Remark:</label><br>
                        <textarea rows="3" cols="21" id="add-remark" name="add-remark"></textarea>
                    </p>
                </div>
            </form>
            <form  class="modal-window" id="modalRemoveProduct" method="POST" action="#">
                <h2 class="window-title">Remove Product<span class="close-button">X</span></h2>
                <hr>
                <div id="product-remove-modal-form">
                    <p><label>Product Id:</label><br>
                        <input type="text" id="remove-product-code" name="remove-product-code" value='' maxlength="10">
                    </p>
                    <input  type="submit" id="remove-product-submit" name="remove-product-submit" value="Remove">

                </div>
            </form>
            <form class="modal-window" id="modalAddEmployee" method="POST" action="#">
                <h2 class="window-title">Add Employee<span class="close-button">X</span></h2>
                <hr>
                <div  id="employee-add-modal-form">
                    <p><label>Employee Id:</label><br>
                        <input type="text" id="add-employee-code" name="add-employee-code" value='' maxlength="10">
                    </p>
                    <p><label>Employee Name:</label><br>
                        <input type="text" id="add-employee-name" name="add-employee-name" value='' maxlength="100">
                    </p>
                    <p><label>NID:</label><br>
                        <input type="number" id="add-employee-nid" name="add-employee-nid" value='' maxlength="20">
                    </p>
                    <p><label>Salary:</label><br>
                        <input type="number" id="add-employee-salary" name="add-employee-salary" value='' maxlength="10">
                    </p>
                    <p><label>Post:</label><br>
                        <input type="text" id="add-employee-post" name="add-employee-post" value='' maxlength="10">
                    </p>                    
                    <p><label>Remark:</label><br>
                        <textarea rows="3" cols="21" id="add-employee-remark" name="add-employee-remark"></textarea>
                    </p>
                </div>
            </form>
            <form  class="modal-window" id="modalRemoveEmployee" method="POST" action="#">
                <h2 class="window-title">Remove Employee<span class="close-button">X</span></h2>
                <hr>
                <div id="employee-remove-modal-form">
                    <p><label>Employee Id:</label><br>
                        <input type="text" id="remove-employee-code" name="remove-employee-code" value='' maxlength="10">
                    </p>
                    <input  type="submit" id="remove-employee-submit" name="remove-employee-submit" value="Remove">

                </div>
            </form>

            <div class="modal-window" id="modalPurchase" >
                <h2 class="window-title">New Purchase Order<span class="close-button">X</span></h2>

                <hr>
                <table  id="purchase-table" class='transaction-table mCustomScrollbar' data-mcs-theme='minimal-dark'>
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Item Name</th>
                            <th>Item Code</th>
                            <th>Brand</th>
                            <th>Unit</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><input type="text" id="item-name" placeholder="Item Name" class="tableInput"></th>
                            <td></td>
                            <td></td>
                            <td><input type="text" id="unit" placeholder="Unit" class="tableInput"></td>
                            <td><input type="number" id="qty" placeholder="Quantity" class="tableInput"></td>
                            <td><input type="number" id="unit-price" placeholder="Unit Price"></td>
                            <td></td>                            
                        </tr>
                    </tbody>
                </table>
                <button id = "btn">Click</button>
            </div>

        </section>

        <script src="js/jquery.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script>
            $('#unit-price').on('keypress', function (e)
            {
                function validate()
                {
                    var flag = true;
                    $.each($('.tableInput'), function ()
                    {
                        if (!$(this).val())
                        {
                            $(this).focus();
                            $(this).css('outline-color', 'red');
                            flag = false;
                            return false;
                        } else
                        {
                            $(this).css('outline-color', 'blue');
                        }
                    });

                    return flag;
                }

                if (e.key === 'Enter' && validate())
                {
                    var $lastRow = $('#purchase-table').find('tr:last');
                    var rowCount = $('#purchase-table tbody tr').length;
                    var $unitPrice = $('#unit-price').val();
                    var $qty = $('#qty').val();

                    $lastRow.before('<tr><td>' + rowCount + '</td><td class="editable item-name" data-type="text" data-edit="false">' + $('#item-name').val() +
                            '</td><td class="item-code">' + '' + '</td><td class="brand">' + '' + '</td><td class="editable unit" data-type="text" data-edit="false">' + $('#unit').val() +
                            '</td><td class="editable qty" data-type="number" data-edit="false">' + $qty + '</td><td class="editable unit-price" data-type="number" data-edit="false">' + $unitPrice + '</td><td class="total-price">' + $qty * $unitPrice +
                            '</td></tr>');
                    $('#purchase-table input').val('');
                    $('#item-name').focus();

                    $('.editable').on('click', function () {

                        var cell = $(this);
                        var data = $(this).html();

                        if (cell.attr('data-edit') == 'false')
                        {
                            $(this).html('<input type="' + cell.attr('data-type') + '" value="' + data + '" id="cell-editor">');
                            $('#cell-editor').focus();
                            $('#cell-editor').on('keypress', function (e) {
                                if (e.key == 'Enter')
                                {
                                    $(this).focusout();
                                }
                            });
                            $('#cell-editor').on('focusout', function (e) {

                                if ($(this).val() === '')
                                {
                                    $(this).css('background-color', 'red');

                                    return;
                                }
                                $context = $(this).parent('td');
                                if ($context.hasClass('unit-price'))
                                {
                                    var $qty = $context.prev();
                                    $context.siblings('.total-price').html($qty.html() * $(this).val());
                                    console.log($qty.html(), $(this).val());
                                } else if ($context.hasClass('qty')) {
                                    var $unit_price = $context.next();
                                    $context.siblings('.total-price').html($unit_price.html() * $(this).val());
                                    console.log($unit_price.html(), $(this).val());
                                } else if ($context.attr('class') == 'item-name')
                                {
                                }
                                cell.html($(this).val());
                                cell.attr('data-edit', 'false');

                            });
                            cell.attr('data-edit', 'true');
                        }
                    });



                }


            });

        </script>


    </body>
</html>
