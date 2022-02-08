<html>
    <head>
        <title>Book Information</title>
    </head>
    <body>
        <center>
            <h2><u>BOOK DETAILS</u></h2>
            <form name="form" method="POST">
                <table>
                    <tr>
                        <th>Accession Number : </th>
                        <td><input type="text" name="anum"></td>
                    </tr>
                    <tr>
                        <th>Title : </th>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th>Author : </th>
                        <td><input type="text" name="auth"></td>
                    </tr>
                    <tr>
                        <th>Edition : </th>
                        <td><input type="text" name="edi"></td>
                    </tr>
                    <tr>
                        <th>Publisher : </th>
                        <td><input type="text" name="pub"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                           <center> <input type="submit" name="sub"></center>
                        </td>
                    </tr>
                </table>

                <hr>
                <h3>Search for a book</h3>
                <center>Enter title of the book to be searched : <input type="text" name="srch"></center>
                <center> <input type="submit" value="Search" name="sub2"></center>
            </form>
        </center>

        <?php

        if(isset($_POST['sub'])){
            $num = $_POST['anum'];  
            $title = $_POST['title'];  
            $author = $_POST['auth'];  
            $edit = $_POST['edi'];
            $publi = $_POST['pub'];  
            $con=mysqli_connect("localhost","root","","student");

            $query="INSERT INTO book_table(accession_number,title,author,edition,publisher)VALUES('{$num}','{$title}','{$author}','{$edit}','{$publi}')";
            mysqli_query($con,$query);
        }
        ?>

        <table border="1" align="left">
        <tr>
        <th>Accession Number</th>
        <th>Title</th>
        <th>Authors</th>
        <th>Edition</th>
        <th>Publisher</th>
        </tr>

        <?php
        if(isset($_POST['sub2'])){
            $title1=$_POST["srch"];
            $conn=mysqli_connect("localhost","root","","student");
            $search="SELECT * FROM book_table WHERE title='{$title1}'";
            $details=mysqli_query($conn,$search);
            while($res=mysqli_fetch_assoc($details))
            {
                ?>
                <tr>
                    <td><?php echo $res['accession_number'];?></td>
                    <td><?php echo $res['title'];?></td>
                    <td><?php echo $res['author'];?></td>
                    <td><?php echo $res['edition'];?></td>
                    <td><?php echo $res['publisher'];?></td>
                </tr>
            <?php
            }
        }
        ?>

    </table>
    </body>
    </html>


                








