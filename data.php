<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
            button {
                padding: 10px;
                background: #333;
                border-radius: 10px;
            }
            button a{
                text-decoration: none;
                color: #fff;
            }
            .back-btn {
                float: inline-end;
                margin-top: -60px;
            }
        </style>
    </head>
    <body>

    <div class="form-data-heading">
        <div class="heading">
            <h1>A Data Table</h1>
        </div>
        <div class="back-btn">
            <button><a class="back" href="index.php"/>Back Form Table</button>
        </div>
    </div>

    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
        <tr>
            <td> <?php echo $name?></td>
            <td> <?php echo $email?></td>
            <td> <?php echo $phone?></td>
            <td> <?php echo $password?></td>
        </tr>

    </table>

    </body>
    </html>




<?php