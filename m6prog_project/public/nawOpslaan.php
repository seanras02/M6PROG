<?php
        $naam = '';
        $straat = '';
        $huisnummer = '';
        $postcode = '';
        $emailAdres = '';
        
        echo '<b>naam: </b>';
        if ( empty( $_POST['naam']) ) {
            echo '<b style="color:#f00;">Je moet wel je naam invullen</b>';
        } else {
            $naam = $_POST['naam'];
        }
        echo $naam;
        echo '<br>';

        echo '<b>straat: </b>';
        if ( empty( $_POST['straat']) ) {
            echo '<b style="color:#f00;">Je moet wel je straat invullen</b>';
        } else {
            $straat = $_POST['straat'];
        }
        echo $straat;
        echo '<br>';

        echo '<b>huisnummer: </b>';
        if ( empty( $_POST['huisnummer']) ) {
            echo '<b style="color:#f00;">Je moet wel je huisnummer invullen</b>';
        } else {
            $huisnummer = $_POST['huisnummer'];
        }
        echo $huisnummer;
        echo '<br>';

        echo '<b>postcode: </b>';
        if ( empty( $_POST['postcode']) ) {
            echo '<b style="color:#f00;">Je moet wel je postcode invullen</b>';
        } else {
            $postcode = $_POST['postcode'];
        }
        echo $postcode;
        echo '<br>';

        echo '<b>email Adres: </b>';
        if ( empty( $_POST['emailAdres']) ) {
            echo '<b style="color:#f00;">Je moet wel je email adres invullen</b>';
        } else {
            $emailAdres = $_POST['emailAdres'];
        }
        echo $emailAdres;
        echo '<br>';
?>