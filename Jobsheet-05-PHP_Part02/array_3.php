<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_file/style.css">
</head>
<body>
    <h2>multidimensional array</h2>
    <table>
        <tr>
            <th>judul film</th>
            <th>tahun</th>
            <th>rating</th>
        </tr>

        <?php
            $movie = array(
                array("avangers : infinity war", 2018, 8.7),
                array("the avangers", 2012, 8.1),
                array("guardians of the galaxy", 2014, 8.1),
                array("iron man", 2008, 7.9)
            );
            echo "<tr>";
                echo "<td>" . $movie[0][0] . "</td>";
                echo "<td>" . $movie[0][1] . "</td>";
                echo "<td>" . $movie[0][2] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $movie[1][0] . "</td>";
                echo "<td>" . $movie[1][1] . "</td>";
                echo "<td>" . $movie[1][2] . "</td>";
            echo "</tr>";
                echo "<td>" . $movie[2][0] . "</td>";
                echo "<td>" . $movie[2][1] . "</td>";
                echo "<td>" . $movie[2][2] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $movie[3][0] . "</td>";
                echo "<td>" . $movie[3][1] . "</td>";
                echo "<td>" . $movie[3][2] . "</td>";
            echo "</tr>";
        ?>

    </table>
</body>
</html>