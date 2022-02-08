<html>
    <head>
    </head>
    <body>
        <form method="POST">
        <table>
            <tr>
                <td>Enter the meter Number:
                <input type="number" name="num1" value="" placeholder="Enter meter Number">
                </td>
            </tr>
            <tr>
                <td>Enter the number of units:
                <input type="number" name="unit" value="" placeholder="Enter units">
                </td>
            </tr>
            <tr>
                <td>Enter the Catogory:
                <select name="tariff">
                <option> Select </option>
                <option> Rural </option>
                <option> Residential </option>
                <option> Commercial </option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        $e=20;
        
        if($unit>0&&$unit<=50)
        {
            $price=(($unit*.25)+$e);
        }
        if($unit>50&&$unit<=100)
        {
            $price=(($unit*.50)+$e);
        }
        if($unit>100&&$unit<=150)
        {
            $price=(($unit*.75)+$e);
        }
        if($unit>150&&$unit<=250)
        {
            $price=(($unit*1.25)+$e);
        }
        if($unit>250&&$unit<=450)
        {
            $price=(($unit*1.75)+$e);
        }
        if($unit>450)
        {
            $price=(($unit*2.5)+$e);
        }
    echo "Meter number :".$num1;
    echo "<br>";
    echo "Units :".$unit;
    echo "<br>";
    echo "Charge :".$price;
    echo "<br>";
    }
    if($tariff=="Residential")
    {
        $e=27;
        
        if($unit>0&&$unit<=50)
        {
            $price=(($unit*.25)+$e);
        }
        if($unit>50&&$unit<=100)
        {
            $price=(($unit*.50)+$e);
        }
        if($unit>100&&$unit<=150)
        {
            $price=(($unit*.75)+$e);
        }
        if($unit>150&&$unit<=250)
        {
            $price=(($unit*1.25)+$e);
        }
        if($unit>250&&$unit<=450)
        {
            $price=(($unit*1.75)+$e);
        }
        if($unit>450)
        {
            $price=(($unit*2.5)+$e);
        }
    echo "Meter number :".$num1;
    echo "<br>";
    echo "Units :".$unit;
    echo "<br>";
    echo "Charge :".$price;
    echo "<br>";
    }
    if($tariff=="Commercial")
    {
        $e=35;        
        if($unit>0&&$unit<=50)
        {
            $price=(($unit*.25)+$e);
        }
        if($unit>50&&$unit<=100)
        {
            $price=(($unit*.50)+$e);
        }
        if($unit>100&&$unit<=150)
        {
            $price=(($unit*.75)+$e);
        }
        if($unit>150&&$unit<=250)
        {
            $price=(($unit*1.25)+$e);
        }
        if($unit>250&&$unit<=450)
        {
            $price=(($unit*1.75)+$e);
        }
        if($unit>450)
        {
            $price=(($unit*2.5)+$e);
        }
    echo "Meter number :".$num1;
    echo "<br>";
    echo "Units :".$unit;
    echo "<br>";
    echo "Charge :".$price;
    echo "<br>";
    }
}
?>    
