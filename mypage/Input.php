<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table>
        <form action="InsertPage.php" method="post">
          <tr>
            <td>
              <input type="text" name="id" placeholder="Id" required >
              </br>
              <input type="text" name="mfg" placeholder="Mfg" required >
              </br>
              <input type="text" name="mfg_date" placeholder="Mfg_Date" required >
              </br>
              <input type="text" name="product" placeholder="Product" required >
              </br>
              <input type="text" name="p_model" placeholder="P_model" required >
              </br>
              <input type="text" name="seller" placeholder="Seller" required >
              </br>
              <input type="text" name="customer" placeholder="Customer" required >
              </br>
              <input type="text" name="c_id" placeholder="C_id" required >
              </br>
              <input type="text" name="pan" placeholder="Pan" required >
              </br>
              <input type="text" name="p_date" placeholder="P_date" required >
              <input type="submit">
            </td>
          </tr>
        </form>
    </table>
    <?php
    include_once "Mydel.php";
    ?>
</body>
</html>