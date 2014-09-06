<!--
Design by Bryant Smith
http://www.bryantsmith.com
http://www.aszx.net
email: template [-at-] bryantsmith [-dot-] com
Released under Creative Commons Attribution 2.5 Generic.  In other words, do with it what you please; but please leave the link if you'd be so kind :)

Name       : HD Monochrome
Description: One column, with top naviation.  All divs, validations: XHTML Strict 1.0 & CSS
Version    : 1.0
Released   : 20081009
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Huishouden</title>
    </head>
    <body>
        <div class="contentBox">
            <div class="innerBox">
                <h1>Huishoudelijk schema</h1><?php

                        $takenlijst = array(
                            "Afstoffen" => "Afstoffen",
                            "Afwassen" => "Afwassen",
                            "Autoschoonmaken" => "Autoschoonmaken",
                                        "Autowassen" => "Autowassen",
                            "Badkamerschoonmaken" => "Badkamerschoonmaken",
                            "Bankverschonen" => "Bankverschonen",
                            "Bedverschonen" => "Bedverschonen",
                            "Diepvriesschoonmaken" => "Diepvriesschoonmaken",
                            "Dweilen" => "Dweilen",
                                        "Gasfornuisschoonmaken" => "Gasfornuisschoonmaken",
                                        "Gordijnenstofzuigen" => "Gordijnenstofzuigen",
                                        "Kattenbakkenverschonen" => "Kattenbakkenverschonen",
                                        "Kattenborstelen" => "Kattenborstelen",
                                        "Keukenschoonmakenkastjes" => "Keukenschoonmakenkastjes",
                                        "Keukenschoonmakenmuren" => "Keukenschoonmakenmuren",
                                        "Keukenschoonmakenvloer" => "Keukenschoonmakenvloer",
                                        "Koelkastschoonmaken" => "Koelkastschoonmaken",
                                        "Magnetronschoonmaken" => "Magnetronschoonmaken",
                                        "Ovenschoonmaken" => "Ovenschoonmaken",
                                        "Plantenwateren" => "Plantenwateren",
                                        "Ramenschoonmakenbinnen" => "Ramenschoonmakenbinnen",
                                        "Ramenschoonmakenbuiten" => "Ramenschoonmakenbuiten",
                                        "Stoelenstofzuigen" => "Stoelenstofzuigen",
                                        "Stofzuigen" => "Stofzuigen",
                                        "Tandenpoetsenkatten" => "Tandenpoetsenkatten",
                                        "Vaatopruimen" => "Vaatopruimen",
                                        "Vuilnisbaklegen" => "Vuilnisbaklegen",
                                        "Wasophangen" => "Wasophangen",
                                        "Wasopruimen" => "Wasopruimen",
                                        "WCschoonmaken" => "WCschoonmaken"
                        );

                        $iTime = array(
                            "Afstoffen" => 28,
                            "Autoschoonmaken" => 50,
                                        "Afwassen" => 4,
                                        "Autowassen" => 51,
                                        "Badkamerschoonmaken" => 31,
                            "Bankverschonen" => 41,
                            "Bedverschonen" => 21,
                            "Diepvriesschoonmaken" => 93,
                            "Dweilen" => 35,
                                        "Gasfornuisschoonmaken" => 31,
                                        "Gordijnenstofzuigen" => 92,
                                        "Kattenbakkenverschonen" => 3,
                                        "Kattenborstelen" => 7,
                                        "Keukenschoonmakenkastjes" => 51,
                                        "Keukenschoonmakenmuren" => 51,
                                        "Keukenschoonmakenvloer" => 51,
                                        "Koelkastschoonmaken" => 62,
                                        "Magnetronschoonmaken" => 28,
                                        "Ovenschoonmaken" => 62,
                                        "Plantenwateren" => 16,
                                        "Ramenschoonmakenbinnen" => 60,
                                        "Ramenschoonmakenbuiten" => 90,
                                        "Stoelenstofzuigen" => 28,
                                        "Stofzuigen" => 9,
                                        "Tandenpoetsenkatten" => 7,
                                        "Vaatopruimen" => 4,
                                        "Vuilnisbaklegen" => 5,
                                        "Wasophangen" => 5,
                                        "Wasopruimen" => 5,
                                        "WCschoonmaken" => 14
                        );


                        $takenlijst2 = array(
                            "Avondetenopruimen" => "Avondetenopruimen",
                            "Avondetenkoken" => "Avondetenkoken",
                                "Bedopmaken" => "Bed opmaken",
                            "Boodschappendoen" => "Boodschappendoen",
                            "Financienbijwerken" => "Financienbijwerken",
                                "Opruimen" => "Opruimen",
                                "Spulnaarschuurbrengen" => "Spulnaarschuurbrengen",
                                "Strijken" => "Strijken",
                                "Winkelen" => "Winkelen"
                        );

                        $frequentie = array(
                           "Afstoffen" => "2W",
                           "Afwassen" => "2D",
                           "Autoschoonmaken" => "1M",
                            "Autowassen" => "1M",
                            "Badkamerschoonmaken" => "2W",
                            "Bankverschonen" => "1M",
                            "Bedverschonen" => "2W",
                                "Diepvriesschoonmaken" => "3M",
                            "Dweilen" => "3W",
                                "Gasfornuisschoonmaken" => "2W",
                                "Gordijnenstofzuigen" => "2M",
                                "Kattenbakkenverschonen" => "3D",
                                "Kattenborstelen" => "1W",
                                "Keukenschoonmakenkastjes" => "1M",
                                "Keukenschoonmakenmuren" => "1M",
                                "Keukenschoonmakenvloer" => "1M",
                                "Koelkastschoonmaken" => "2M",
                                "Magnetronschoonmaken" => "1W",
                                "Ovenschoonmaken" => "2M",
                                "Plantenwateren" => "1W",
                                "Ramenschoonmakenbinnen" => "2M",
                                "Ramenschoonmakenbuiten" => "3M",
                                "Stoelenstofzuigen" => "3W",
                                "Stofzuigen" => "1W",
                                "Tandenpoetsenkatten" => "1W",
                                "Vaatopruimen" => "3D",
                                "Vuilnisbaklegen" => "5D",
                                "Wasophangen" => "3D",
                                "Wasopruimen" => "3D",
                                "WCschoonmaken" => "1W",
                        );

                        $iGold = array(
                           "Afstoffen" => 10,
                           "Afwassen" => 15,
                           "Autoschoonmaken" => 30,
                            "Autowassen" => 20,
                            "Badkamerschoonmaken" => 30,
                            "Bankverschonen" => 30,
                            "Bedverschonen" => 20,
                                "Diepvriesschoonmaken" => 60,
                            "Dweilen" => 15,
                                "Gasfornuisschoonmaken" => 15,
                                "Gordijnenstofzuigen" => 15,
                                "Kattenbakkenverschonen" => 10,
                                "Kattenborstelen" => 5,
                                "Keukenschoonmakenkastjes" => 20,
                                "Keukenschoonmakenmuren" => 20,
                                "Keukenschoonmakenvloer" => 30,
                                "Koelkastschoonmaken" => 60,
                                "Magnetronschoonmaken" => 10,
                                "Ovenschoonmaken" => 30,
                                "Plantenwateren" => 5,
                                "Ramenschoonmakenbinnen" => 30,
                                "Ramenschoonmakenbuiten" => 30,
                                "Stoelenstofzuigen" => 10,
                                "Stofzuigen" => 15,
                                "Tandenpoetsenkatten" => 10,
                                "Vaatopruimen" => 5,
                                "Vuilnisbaklegen" => 5,
                                "Wasophangen" => 15,
                                "Wasopruimen" => 15,
                                "WCschoonmaken" => 15
                        );


                        // Create connection
                        //$con=mysqli_connect("localhost","root","","Huishouden");

                        // Check connection
                        /* if (mysqli_connect_errno()) {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        } */

                        // Set Posts
                        $PostDate =($_POST['Date']);
                        $PostTaak = ($_POST['Taak1']);
                        $PostTaak = ($_POST['Taak1']);
                        $PostTime =($_POST['Time']);
                        $PostInspanning =($_POST['Inspanning']);
                        $PostGold =($_POST['Gold']);

                        //Update Database
                        $today = date("Y-m-d");
                        $tNow = strtotime($today);

                        if (isset($_POST['setdelete'])) {
                                echo 'delete confirmed : ';
                                $Deletenum = $_POST['setdelete'];

                                $result = mysqli_query($con,"SELECT * FROM Huishouden.History WHERE History.Index=$Deletenum");
                                if (!$result) {
                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                        $message .= 'Whole query: ' . $query;
                                        die($message);
                                }
                                while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row[('Naam')];
                                        echo  "; ";
                                        echo $row[('Taak')];
                                        echo  "; ";
                                        echo $row[('Datum')];
                                }
                                $result = mysqli_query($con,"DELETE FROM Huishouden.History WHERE History.Index=$Deletenum");
                                if (!$result) {
                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                        $message .= 'Whole query: ' . $query;
                                        die($message);
                                }
                        }

                        foreach($takenlijst2 as $category) {
                                $category = htmlspecialchars($category);

                                if (isset($_POST[$category])) {
                                
                                        $result = mysqli_query($con,"SELECT * FROM Huishouden.History WHERE Naam='$_POST[$category]' AND Taak='$PostTaak' AND Datum ='$PostDate'");
                                        if (!$result) {
                                                $message  = 'Invalid query: ' . mysql_error() . "\n";
                                                $message .= 'Whole query: ' . $query;
                                                die($message);
                                        }
                                        $count =0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                $count++;
                                        }

                                        if ($count ==0) {
                                                echo "Taak ingevoegd!";
                                                echo $_POST[$category];
                                                echo ($_POST['Categorie']);
                                                echo $Postdate;

                                                if ($PostInspanning ==3) {
                                                        $PostGold = $PostTime*.75;
                                                } elseif($PostInspanning ==2)   {
                                                        $PostGold = $PostTime*1;
                                                } elseif($PostInspanning ==1)   {
                                                        $PostGold = $PostTime*1.25;
                                                }

                                                $result = mysqli_query($con,"INSERT INTO Huishouden.History VALUES ('KEY','$_POST[$category]','$PostDate','$PostTaak','$PostGold')");
                                                if (!$result) {
                                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                                        $message .= 'Whole query: ' . $query;
                                                        die($message);
                                                }       
                                        } else {
                                                echo "Dubbele taak gevonden. Niets ingevoegd";
                                        }
                                }
                        }

                        foreach($takenlijst as $category) {
                                $category = htmlspecialchars($category);

                                if (isset($_POST[$category])) {    
                                        $result = mysqli_query($con,"SELECT * FROM Huishouden.History WHERE Naam='$_POST[$category]' AND Taak='$category' AND Datum ='$PostDate'");
                                        if (!$result) {
                                                $message  = 'Invalid query: ' . mysql_error() . "\n";
                                                $message .= 'Whole query: ' . $query;
                                                die($message);
                                        }

                                        $count =0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                $count++;
                                        }

                                        if ($count ==0) {
                                                echo "Taak ingevoegd!";

                                                $tStartDatum = strtotime('05-07-2014');
                                                $result = mysqli_query($con,"SELECT MAX(DATUM) FROM Huishouden.History WHERE Taak='$category'");
                                                
                                                if (!$result) {
                                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                                        $message .= 'Whole query: ' . $query;
                                                        die($message);
                                                }
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                        if (strtotime($row['MAX(DATUM)']) > $tStartDatum) {
                                                                $tStartDatum = strtotime($row['MAX(DATUM)']);
                                                        }

                                                        $temp = $iTime[$category]-((strtotime($PostDate)-$tStartDatum)/(24*60*60));
                                                        $iGoldPost = floor($iGold[$category]*(($iTime[$category]-$temp)/($iTime[$category])*0.5+0.75));

                                                        echo $iTime[$category];
                                                        echo " 1<br />";
                                                        echo strtotime($PostDate);
                                                        echo " 2<br />";
                                                        echo $tStartDatum;
                                                        echo " 3<br />";
                                                }

                                                $result = mysqli_query($con,"INSERT INTO Huishouden.History VALUES ('KEY','$_POST[$category]','$PostDate','$category','$iGoldPost')");
                                                if (!$result) {
                                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                                        $message .= 'Whole query: ' . $query;
                                                        die($message);
                                                }       
                                        } else {
                                                echo "Dubbele Taak gevonden. Niets ingevoegd!";
                                        }
                                }
                        }

                        // Get gold values
                        $result = mysqli_query($con,"SELECT SUM(Gold) FROM Huishouden.History AS GOLD WHERE Naam = 'Done'");
                        if (!$result) {
                            $message  = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {    
                                $iGoldSander = $row['SUM(Gold)'];
                        }

                        $result = mysqli_query($con,"SELECT SUM(Gold) FROM Huishouden.History AS GOLD WHERE Naam = 'Sharon'");
                        if (!$result) {
                            $message  = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                                $iGoldSharon = $row['SUM(Gold)'];
                        }
                        $iTotalGold = $iGoldSharon+$iGoldSander;


                        //Draw table
                         echo "
                        <!-- <table> 
                         <tr><td><img src='IMG_1190.jpg' width=100px /></td><td><progress value=$iGoldSander max=$iTotalGold></progress></td><td>$iGoldSander<img src ='hrum_gold.png' width=50px /></td></tr>
                         <tr><td><img src='IMG_1197.jpg' width=100px /></td><td><progress value=$iGoldSharon max=$iTotalGold></progress></td><td>$iGoldSharon<img src ='hrum_gold.png' width=50px /></td></tr>
                        </table> -->
                        <table>
                                <tr>
                                        <td width=200px>Taak</td>
                                        <!--<td>Frequentie </td>-->
                                        <td width=250px>Voortgang</td>
                                        <td>Datum gepland</td>
                                        <!--<td>Gold</td> -->
                                        <td>Datum gedaan</td>
                                        <!--<td>Door</td>-->
                                </tr>
                        ";

                        // Draw tablelijst
                        foreach($takenlijst as $category) {
                                $category = htmlspecialchars($category);
                                $tStartDatum = strtotime('05-07-2014');
                                
                                $result = mysqli_query($con,"SELECT MAX(DATUM) FROM Huishouden.History WHERE Taak='$category'");
                                if (!$result) {
                                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                                        $message .= 'Whole query: ' . $query;
                                        die($message);
                                }

                                while ($row = mysqli_fetch_assoc($result)) {
                                        if (strtotime($row['MAX(DATUM)']) > $tStartDatum) {
                                                $tStartDatum = strtotime($row['MAX(DATUM)']);
                                        }
                                }
                                
                                //BEREKENING GOLD
                                $dPlannedDate = date('d-m-Y',($tStartDatum+($iTime[$category]*24*60*60)));
                                $temp = $iTime[$category]-(($tNow-$tStartDatum)/(24*60*60));
                                $iGoldNow = floor($iGold[$category]*(($iTime[$category]-$temp)/($iTime[$category])*0.5+0.75));
                                //BEREKENING GOLD
                                echo "
                                <tr>
                                        <td>";
                                echo $category;
                                echo "
                                        </td>
                                        <td border='1'1 width=200px>
                                                <!--<meter size=100px value='0.6'>60%</meter>-->
                                                <progress value=$temp max=$iTime[$category]></progress>
                                        </td>";

                                if (strtotime($dPlannedDate)<$tNow) {
                                        echo "
                                        <td bgcolor=#FF0000 > 
                                ";
                                //echo strtotime($dPlannedDate);
                                } elseif (strtotime($dPlannedDate)<$tNow+(1*24*60*60)) {
                                        echo "
                                        <td bgcolor=#FFCC00>
                                        ";
                                } elseif (strtotime($dPlannedDate)<$tNow+(2*24*60*60))  {
                                        echo "
                                        <td bgcolor=#FFFF00>
                                        ";
                                } else {
                                        echo "
                                        <td bgcolor=#FFFFFF>
                                        ";
                                }
                                echo $dPlannedDate;
                                echo "
                                        </td>
                                        <!--<td>$iGoldNow</td>-->
                                        <td>
                                                <form action = 'huishouden.php' method='post'>
                                                        <input type='hidden' name='Gold' value=$iGoldNow />
                                                        <input type='date' value='$today' name='Date'></td><td>
                                                        <input type='submit' value='Done' name='$category'>
                                                        <!--<input type='submit' value='Sharon' name='$category'> -->
                                                </form>
                                                </td>
                                        </tr>";
                        }

                        echo "
                        </table>
                        ";
                        echo "
                        <!--
                        <table>
                                <tr>
                                        <td>Taak</td>
                                        <td>Datum</td>
                                        <td>Tijd(minuten)</td>
                                        <td>Inspanning</td>
                                </tr>
                                <td>
                                <form action = 'huishouden.php' method='post'>
                                <select name='Taak1'>
                                <option value=''></option>
                        -->";
                        /*
                        foreach($takenlijst2 as $category) {$category = htmlspecialchars($category);

                        echo "<option value='$category' name='Categorie'>";
                        echo $category;
                        echo "</option>";

                        }
                        echo "
                        </select>

                        </td>
                        <td>

                        <form action = 'huishouden.php' method='post'>
                        <input type='date' value='$today' name='Date' >
                        </td>
                        <td>
                        <input type=number name='Time'/>
                        </td>
                        <td>

                        <select name='Inspanning'>
                        <option value='1'>Hoog</option>
                        <option value='2'>Middel</option>
                        <option value='3'>Laag</option>
                        </select>
                        </td>
                        <td>
                        <input type='submit' value='Done' name='$category'>
                        <!--<input type='submit' value='Sharon' name='$category'>-->
                        </form>

                        </td>

                        </tr>
                        </table>

                        "; 

                        */
                        $result = mysqli_query($con,"SELECT * FROM Huishouden.History ORDER BY DATUM DESC");
                        if (!$result) {
                            $message  = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        } else {
                                /*print_r($result);*/
                        }
                        echo "
                        <table width:600px>
                                <tr>
                                        <td>Datum</td>
                                        <td>Taak</td>
                                        <!--<td>Naam</td>
                                        <td>Gold</td>-->
                                        <td></td>
                                </tr>
                        ";

                        while ($row = mysqli_fetch_assoc($result)) {
                                $PostIndex = $row['Index'];
                                echo "
                                <form action = 'huishouden.php' method='post'>
                                        <input type='hidden' value =$PostIndex name='setdelete' />
                                        <tr>
                                                <td>"; 
                                        echo $row['Datum'];
                                        echo '
                                                </td>
                                                <td>';
                                        echo $row['Taak'];
                                        echo '
                                                </td>
                                                <td>';
                                //   echo $row['Naam'];
                                //      echo '</td><td>';
                                //      echo $row['Gold'];
                                //      echo '</td><td>';
                                        echo "
                                                        <input type='submit' value='Delete' name='Delete'>";
                                        echo "
                                                </td>
                                        </tr>
                                </form> 
                        ";
                        }

                        echo '</table>';
                        ?>
            </div>
            <h4>
            <a href="http://www.aszx.net">web development</a> by 
            <a href="http://www.bryantsmith.com">bryant smith</a></h4>
        </div>
    </body>
</html>
