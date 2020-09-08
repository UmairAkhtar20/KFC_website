<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Auto Calculation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container">
        <p><br/></p>
        <form name="cart">
            <table name="cart" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Item Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr name="line_items">
                        <td><img src="img/zinger.jpg" style="width:100px;height:100px"  ></td>
                        <td>zinger</td>
                        <td><input type="text" name="qty" value="1" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="price" value="500" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr name="line_items">
                        <td><img src="img/mighty zinger.jpg" style="width:100px;height:100px"  ></td>
                        <td>mighty zinger</td>
                        <td><input type="text" name="qty" value="1" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="price" value="900" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr name="line_items">
                        <td><img src="img/twister.jpg" style="width:100px;height:100px"  ></td>
                        <td>twister</td>
                        <td><input type="text" name="qty" value="1" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="price" value="300" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr name="line_items">
                        <td><img src="img/zinger stacker.jpg" style="width:100px;height:100px"  ></td>
                        <td>zinger stacker</td>
                        <td><input type="text" name="qty" value="1" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="price" value="700" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Subtotal</td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="sub_total" jAutoCalc="SUM({item_total})" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Tax</td>
                        <td>
                            <select name="tax" class="form-control">
                                <option value=".06">CT Tax</option>
                                <option value=".00">Tax Free</option>
                            </select>
                        </td>
                        <td><input type="text" name="tax_total" jAutoCalc="{sub_total} * {tax}" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Total</td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="grand_total" jAutoCalc="{sub_total} + {tax_total}" class="form-control form-control-sm"/></td>
                    </tr>
                    
                </tbody>
            </table>
        </form>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jautocalc.js"></script>
    <script src="js/script.js"></script>
</body>
</html>