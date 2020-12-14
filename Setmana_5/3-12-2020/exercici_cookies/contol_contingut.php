<?php
    for($i = 0; $i < count($idiomes); $i++){ 
        if($idioma == $idiomes[$i]){ ?>
            <header class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav bd-navbar-nav flex-row">
                        <li class="nav-item"><a href="#" class="nav-link<?php 
                            if($pagina == "torrons"){
                                echo " disabled";
                            }
                        ?>"><?php echo $torrons[$i] ?></a></li>
                        <li class="nav-item"><a href="#" class="nav-link<?php 
                            if($pagina == "polvorons"){
                                echo " disabled";
                            }
                        ?>"><?php echo $polvorons[$i] ?></a></li>
                        <li class="nav-item"><a href="#" class="nav-link<?php 
                            if($pagina == "xocolatines"){
                                echo " disabled";
                            }
                        ?>"><?php echo $xocolatines[$i] ?></a></li>
                    </ul>
                    <ul class="navbar-nav flex-row ml-auto ml-flex">
                        <li class="nav-item"><a href="torrons.php?idioma=ca" class="nav-link<?php 
                            if($idioma == "ca"){
                                echo " disabled";
                            }
                        ?>">CA</a></li>
                        <li class="nav-item"><a href="torrons.php?idioma=es" class="nav-link<?php 
                            if($idioma == "es"){
                                echo " disabled";
                            }
                        ?>">ES</a></li>
                        <li class="nav-item"><a href="torrons.php?idioma=en" class="mr-3 nav-link<?php 
                            if($idioma == "en"){
                                echo " disabled";
                            }
                        ?>">EN</a></li>
                        <li class="nav-item"><a id="mida1" href="torrons.php?mida=0" class="nav-link<?php 
                            if($mida == 0){
                                echo " disabled";
                            }
                        ?>">A</a></li>
                        <li class="nav-item"><a id="mida2" href="torrons.php?mida=4" class="nav-link<?php 
                            if($mida == 4){
                                echo " disabled";
                            }
                        ?>">A</a></li>
                        <li class="nav-item"><a id="mida3" href="torrons.php?mida=8" class="nav-link<?php 
                            if($mida == 8){
                                echo " disabled";
                            }
                        ?>">A</a></li>
                    </ul>
                </div>
            </header>
    <?php
        } 
    } ?>