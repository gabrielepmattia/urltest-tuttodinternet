<?php include "header.php" ?>

<?php
if ($_POST['indirizzi']) {
    ?>
    <table cellpadding="4px;" class="table table-striped">
        <thead>
            <tr>
                <th>Link</th>
                <th>Code</th>
                <th>Response</th>
                <th>Notes</th>
            </tr>
        </thead>

        <?php
        /* MULTIPLE URLs CHECKER - script by gabry3795 (c) 2014
        All rights reserved. gabry.gabry@hotmail.it */

        $time_pre = microtime(true); // Avvio il timer
        $nomerand = "urls-" . uniqid() . ".txt"; // Setto il nome unico del file temporaneo

        $fp = fopen($nomerand, "x+"); // Apro il file
        fwrite($fp, $_POST['indirizzi']); // Ci scrivo gli indirizzi dell'utende
        fclose($fp); // Chiudo il file

        $fp2 = fopen($nomerand, "r"); // Riapro lo stesso file in lettura

        if ($fp2) {
            $counter = 0;
            file_put_contents($req_old_link, $req_old + 1);
            while (($riga = fgets($fp2, 4096)) !== false) {
                if ($counter == ($max_urls_allow + 1)) {
                    break;
                }
                // Check blank line
                $riga = trim($riga);
                if ($riga == "") continue;
                $counter++;

                $headers = @get_headers($riga);
                if ($headers) { // Assicuro che si riescano ad ottenere gli header

                    $codice = substr($headers[0], 9, 3); // Isolo il codice stato
                    $color = NULL; // Setto la variabile del colore della riga
                    $notes = NULL; // Setto la variabile del colore delle note

                    // Controllo il codice errore e setto i colori
                    if ($codice < 299) {
                        $color = "1AD904";
                    };
                    if ($codice < 399 && $codice > 299) {
                        $color = "FF6600";
                    };
                    if ($codice >= 399) {
                        $color = "FF0000";
                    };
                    if ($codice == 301) {
                        $notes = "Redirect to: " . substr($headers[6], 10);
                    };
                    if ($codice == 404) {
                        $notes = "Dead link";
                    };

                    // Stampo la riga
                    echo '<tr style="background-color:#' . $color . ';">
                            <td class="link">' . $riga . '</td>
                            <td class="status">' . $codice . '</td>
                            <td class="response">' . substr($headers[0], 13) . '</td>
                            <td class="notes">' . $notes . '</td>
                          </tr>';

                } else { // Se il get_header restituisce errore (linea bianca o host inesistente)

                    $err = "Blank line!"; // Valore predefinito del campo
                    $color_blank = "CCC"; // Valore predefinito del colore
                    $notes_blank = NULL;  // Valore predefinito delle note
                    if (trim($riga) != "") {
                        $err = $riga;
                        $color_blank = "FF0000";
                        $notes_blank = "Hostname not found";
                    }; // controllo se effettivamente la riga del link è vuota e se non lo è setto il colore rosso e l'output della riga stessa

                    echo
                        '<tr style="background-color:#' . $color_blank . ';">
                            <td class="link">' . $err . '</td>
                            <td class="status">//</td>
                            <td class="response"></td>
                            <td class="notes">' . $notes_blank . '</td>
                          </tr>';
                }
            }
        } else {
            echo "Error access temporary memory area. Please contact the webmaster.";
        }

        $time_post = microtime(true);

        @fclose($fp2);
        @unlink($nomerand);
        ?>
    </table>
    <br/>
    <?php
    $exec_time = $time_post - $time_pre;
    echo $counter . ' urls analyzed in ' . round($exec_time, 4) . ' msec';
    $new_links_tested = $old_links_tested + $counter;
    file_put_contents($links_tested, $new_links_tested);
    ?>
    <br/>
    Thank you for using our tool, now visit our site <a href="http://www.tuttodinternet.com">tuttodinternet.com</a>! ;)

    <br/><br/><br/>


<?php } else {
    echo "You put no urls<br /><br />";
}
/* MULTIPLE URLs CHECKER - script by gabry3795 (c) 2014
All rights reserved. gabry.gabry@hotmail.it */
?>
    <a href="index.php">&laquo; Go back</a><br/><br/>

<?php include "footer.php" ?>