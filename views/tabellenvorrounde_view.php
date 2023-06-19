<?php
$title = "Spiele der Handball WM";
include "header.php";
?>
<h2><?php echo $title; ?></h2>
<h3>Gruppe A</h3>
<hr>

<?php
if (!empty($a)) {
    ?>
        <table>
            <tr>
                <th>Land</th>
                <th>SP.</th>
                <th>Siege</th>
                <!-- <th>Spieltag</th> -->
                <th>U</th>
                <th>N</th>
                <th>Tore</th>
                <th>Gegentore</th>
                <th>Diff.</th>
                <th>Punkte</th>
                
               
            </tr>
            <?php
    
            foreach ($a as $mannschaft) {
            ?>
                <tr>
                    <td><?php echo $mannschaft['mannschaft']; ?></td>
                    <td><?php echo $mannschaft['spiele']; ?></td>
                    <td><?php echo $mannschaft['siege']; ?></td>
                    <td><?php echo $mannschaft['unentschieden']; ?></td>
                    <td><?php echo $mannschaft['niederlagen']; ?></td>
                    <td><?php echo $mannschaft['tore_plus']; ?></td>
                    <td><?php echo $mannschaft['tore_minus']; ?></td>
                    <td><?php echo $mannschaft['differenz']; ?></td>
                    <td><?php echo $mannschaft['punkte']; ?></td>
                    
                </tr>
            <?php } ?>
        </table>
        
<h3>Gruppe B</h3>
<hr>
    
    
    <?php
    } else {
        // echo "Es sind noch keine Mannschaften vorhanden!";
    }

    if (!empty($b)) {
        ?>
            <table>
                <tr>
                    <th>Land</th>
                    <th>SP.</th>
                    <th>S</th>
                    <!-- <th>Spieltag</th> -->
                    <th>U</th>
                    <th>N</th>
                    <th>Tore</th>
                    <th>Gegentore</th>
                    <th>Diff.</th>
                    <th>Punkte</th>
                    
                   
                </tr>
                <?php
        
                foreach ($b as $mannschaft) {
                ?>
                    <tr>
                        <td><?php echo $mannschaft['mannschaft']; ?></td>
                        <td><?php echo $mannschaft['spiele']; ?></td>
                        <td><?php echo $mannschaft['siege']; ?></td>
                        <td><?php echo $mannschaft['unentschieden']; ?></td>
                        <td><?php echo $mannschaft['niederlagen']; ?></td>
                        <td><?php echo $mannschaft['tore_plus']; ?></td>
                        <td><?php echo $mannschaft['tore_minus']; ?></td>
                        <td><?php echo $mannschaft['differenz']; ?></td>
                        <td><?php echo $mannschaft['punkte']; ?></td>
                        
                    </tr>
                <?php } ?>
            </table>

            <h3>Gruppe C</h3>
            <hr>
        
        <?php
        } else {
            // echo "Es sind noch keine Mannschaften vorhanden!";
        }

        if (!empty($c)) {
            ?>
                <table>
                    <tr>
                        <th>Land</th>
                        <th>SP.</th>
                        <th>S</th>
                        <!-- <th>Spieltag</th> -->
                        <th>U</th>
                        <th>N</th>
                        <th>Tore</th>
                        <th>Gegentore</th>
                        <th>Diff.</th>
                        <th>Punkte</th>
                        
                       
                    </tr>
                    <?php
            
                    foreach ($c as $mannschaft) {
                    ?>
                        <tr>
                            <td><?php echo $mannschaft['mannschaft']; ?></td>
                            <td><?php echo $mannschaft['spiele']; ?></td>
                            <td><?php echo $mannschaft['siege']; ?></td>
                            <td><?php echo $mannschaft['unentschieden']; ?></td>
                            <td><?php echo $mannschaft['niederlagen']; ?></td>
                            <td><?php echo $mannschaft['tore_plus']; ?></td>
                            <td><?php echo $mannschaft['tore_minus']; ?></td>
                            <td><?php echo $mannschaft['differenz']; ?></td>
                            <td><?php echo $mannschaft['punkte']; ?></td>
                            
                        </tr>
                    <?php } ?>
                </table>

                <h3>Gruppe D</h3>
                <hr>
            
            <?php
            } else {
                // echo "Es sind noch keine Mannschaften vorhanden!";
            }

            if (!empty($d)) {
                ?>
                    <table>
                        <tr>
                            <th>Land</th>
                            <th>SP.</th>
                            <th>S</th>
                            <!-- <th>Spieltag</th> -->
                            <th>U</th>
                            <th>N</th>
                            <th>Tore</th>
                            <th>Gegentore</th>
                            <th>Diff.</th>
                            <th>Punkte</th>
                            
                           
                        </tr>
                        <?php
                
                        foreach ($d as $mannschaft) {
                        ?>
                            <tr>
                                <td><?php echo $mannschaft['mannschaft']; ?></td>
                                <td><?php echo $mannschaft['spiele']; ?></td>
                                <td><?php echo $mannschaft['siege']; ?></td>
                                <td><?php echo $mannschaft['unentschieden']; ?></td>
                                <td><?php echo $mannschaft['niederlagen']; ?></td>
                                <td><?php echo $mannschaft['tore_plus']; ?></td>
                                <td><?php echo $mannschaft['tore_minus']; ?></td>
                                <td><?php echo $mannschaft['differenz']; ?></td>
                                <td><?php echo $mannschaft['punkte']; ?></td>
                                
                            </tr>
                        <?php } ?>
                    </table>
                    <h3>Gruppe E</h3>
                    <hr>
                
                <?php
                } else {
                    // echo "Es sind noch keine Mannschaften vorhanden!";
                }

                if (!empty($e)) {
                    ?>
                        <table>
                            <tr>
                                <th>Land</th>
                                <th>SP.</th>
                                <th>S</th>
                                <!-- <th>Spieltag</th> -->
                                <th>U</th>
                                <th>N</th>
                                <th>Tore</th>
                                <th>Gegentore</th>
                                <th>Diff.</th>
                                <th>Punkte</th>
                                
                               
                            </tr>
                            <?php
                    
                            foreach ($e as $mannschaft) {
                            ?>
                                <tr>
                                    <td><?php echo $mannschaft['mannschaft']; ?></td>
                                    <td><?php echo $mannschaft['spiele']; ?></td>
                                    <td><?php echo $mannschaft['siege']; ?></td>
                                    <td><?php echo $mannschaft['unentschieden']; ?></td>
                                    <td><?php echo $mannschaft['niederlagen']; ?></td>
                                    <td><?php echo $mannschaft['tore_plus']; ?></td>
                                    <td><?php echo $mannschaft['tore_minus']; ?></td>
                                    <td><?php echo $mannschaft['differenz']; ?></td>
                                    <td><?php echo $mannschaft['punkte']; ?></td>
                                    
                                </tr>
                            <?php } ?>
                        </table>

                        <h3>Gruppe F</h3>
                        <hr>
                    
                    <?php
                    } else {
                        // echo "Es sind noch keine Mannschaften vorhanden!";
                    }

                if (!empty($f)) {
                    ?>
                        <table>
                            <tr>
                                <th>Land</th>
                                <th>SP.</th>
                                <th>S</th>
                                <!-- <th>Spieltag</th> -->
                                <th>U</th>
                                <th>N</th>
                                <th>Tore</th>
                                <th>Gegentore</th>
                                <th>Diff.</th>
                                <th>Punkte</th>
                                
                               
                            </tr>
                            <?php
                    
                            foreach ($f as $mannschaft) {
                            ?>
                                <tr>
                                    <td><?php echo $mannschaft['mannschaft']; ?></td>
                                    <td><?php echo $mannschaft['spiele']; ?></td>
                                    <td><?php echo $mannschaft['siege']; ?></td>
                                    <td><?php echo $mannschaft['unentschieden']; ?></td>
                                    <td><?php echo $mannschaft['niederlagen']; ?></td>
                                    <td><?php echo $mannschaft['tore_plus']; ?></td>
                                    <td><?php echo $mannschaft['tore_minus']; ?></td>
                                    <td><?php echo $mannschaft['differenz']; ?></td>
                                    <td><?php echo $mannschaft['punkte']; ?></td>
                                    
                                </tr>
                            <?php } ?>
                        </table>

                        <h3>Gruppe G</h3>
                        <hr>   
                    
                    <?php
                    } else {
                        // echo "Es sind noch keine Mannschaften vorhanden!";
                    }

                    if (!empty($g)) {
                        ?>
                            <table>
                                <tr>
                                    <th>Land</th>
                                    <th>SP.</th>
                                    <th>S</th>
                                    <!-- <th>Spieltag</th> -->
                                    <th>U</th>
                                    <th>N</th>
                                    <th>Tore</th>
                                    <th>Gegentore</th>
                                    <th>Diff.</th>
                                    <th>Punkte</th>
                                    
                                   
                                </tr>
                                <?php
                        
                                foreach ($g as $mannschaft) {
                                ?>
                                    <tr>
                                        <td><?php echo $mannschaft['mannschaft']; ?></td>
                                        <td><?php echo $mannschaft['spiele']; ?></td>
                                        <td><?php echo $mannschaft['siege']; ?></td>
                                        <td><?php echo $mannschaft['unentschieden']; ?></td>
                                        <td><?php echo $mannschaft['niederlagen']; ?></td>
                                        <td><?php echo $mannschaft['tore_plus']; ?></td>
                                        <td><?php echo $mannschaft['tore_minus']; ?></td>
                                        <td><?php echo $mannschaft['differenz']; ?></td>
                                        <td><?php echo $mannschaft['punkte']; ?></td>
                                        
                                    </tr>
                                <?php } ?>
                            </table>
                            <h3>Gruppe H</h3>
                            <hr>
                        
                        <?php
                        } else {
                            // echo "Es sind noch keine Mannschaften vorhanden!";
                        }

                        if (!empty($h)) {
                            ?>
                                <table>
                                    <tr>
                                        <th>Land</th>
                                        <th>SP.</th>
                                        <th>S</th>
                                        <!-- <th>Spieltag</th> -->
                                        <th>U</th>
                                        <th>N</th>
                                        <th>Tore</th>
                                        <th>Gegentore</th>
                                        <th>Diff.</th>
                                        <th>Punkte</th>
                                        
                                       
                                    </tr>
                                    <?php
                            
                                    foreach ($h as $mannschaft) {
                                    ?>
                                        <tr>
                                            <td><?php echo $mannschaft['mannschaft']; ?></td>
                                            <td><?php echo $mannschaft['spiele']; ?></td>
                                            <td><?php echo $mannschaft['siege']; ?></td>
                                            <td><?php echo $mannschaft['unentschieden']; ?></td>
                                            <td><?php echo $mannschaft['niederlagen']; ?></td>
                                            <td><?php echo $mannschaft['tore_plus']; ?></td>
                                            <td><?php echo $mannschaft['tore_minus']; ?></td>
                                            <td><?php echo $mannschaft['differenz']; ?></td>
                                            <td><?php echo $mannschaft['punkte']; ?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                </table>
                            
                            <?php
                            } else {
                                // echo "Es sind noch keine Mannschaften vorhanden!";
                            }

    include "footer.php";
    ?>



