<?php 
        $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_insep", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $insep1_ind=$row['proyectos'];
             $insep2_ind=$row['contratado'];
             $insep3_ind=$row['avanzado'];
             $insep4_ind=$row['visitas'];
         mysqli_close($connection);

         $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_fondovial", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $fondo1_ind=$row['proyectos'];
             $fondo2_ind=$row['contratado'];
             $fondo3_ind=$row['avanzado'];
             $fondo4_ind=$row['visitas'];
         mysqli_close($connection);

         $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_invest", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $invest1_ind=$row['proyectos'];
             $invest2_ind=$row['contratado']; $tmp = $row['contratado'];
             $invest3_ind=$row['avanzado'];
             $invest4_ind=$row['visitas'];
         mysqli_close($connection);

         
         $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_enp", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $enp1_ind=$row['proyectos'];
             $enp2_ind=$row['contratado'];
             $enp3_ind=$row['avanzado'];
             $enp4_ind=$row['visitas'];
         mysqli_close($connection);

     $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_idecoas", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $idecoas1_ind=$row['proyectos'];
             $idecoas2_ind=$row['contratado'];
             $idecoas3_ind=$row['avanzado'];
             $idecoas4_ind=$row['visitas'];
         mysqli_close($connection);

         $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_sesal", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $sesal1_ind=$row['proyectos'];
             $sesal2_ind=$row['contratado'];
             $sesal3_ind=$row['avanzado'];
             $sesal4_ind=$row['visitas'];
         mysqli_close($connection);

         $connection = mysqli_connect("localhost", "portal", "yBYDeLyIvcQiJg8x", "sisocs_seduc", "3306");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $seduc1_ind=$row['proyectos'];
             $seduc2_ind=$row['contratado'];
             $seduc3_ind=$row['avanzado'];
             $seduc4_ind=$row['visitas'];
         mysqli_close($connection);



         
         

         /*$connection = mysqli_connect("166.62.88.85", "rootsisocs", "KBtg%45Gv3", "bdsisocs", "33060");
             $result = mysqli_query($connection, "CALL sp_portal_indicadores()") or die("Query fail: " . mysqli_error());
             $row = mysqli_fetch_array($result);
             $coalianza1_ind=$row['proyectos'];
             $coalianza2_ind=$row['contratado'];
             $coalianza3_ind=$row['avanzado'];
             $coalianza4_ind=$row['visitas'];
         mysqli_close($connection);*/

         
         
         $tot1 = $insep1_ind + $fondo1_ind + $invest1_ind + $enp1_ind;
         $tot2 = $insep2_ind + $fondo2_ind + $invest2_ind + $enp2_ind;
         /*
         $tot3 = $insep3_ind + $fondo3_ind + $invest3_ind + $enp3_ind + $coalianza3_ind + $enee3_ind + $sapp3_ind + $hondutel3_ind + $idecoas3_ind;
         $tot4 = $insep4_ind + $fondo4_ind + $invest4_ind + $enp4_ind + $coalianza4_ind + $enee4_ind + $sapp4_ind + $hondutel4_ind + $idecoas4_ind;
         */


?>