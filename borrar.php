<?php
session_start();
include 'head.php';

if(isset($_REQUEST['borrar']))
{
    //Recojo el numero de la incidencia
    $num_incidencia = $_REQUEST['num_incidencia'];

    //Debo de crear dos contadores, de esta manera, me permitirá conocer si la incidencia se ha borrado de manera correcta o no
    //Creo un contador previo a borrar la incidencia
    $cont_prev=count($_SESSION['incidente']);

    //Borro la incidencia
    unset($_SESSION['incidente'][$num_incidencia]);

    //Contador posterior a borrar la incidencia
    $cont_post=count($_SESSION['incidente']);

    //Comparo el valor de ambos, de tal manera que si coinciden la incidencia no se ha borrado
    if($cont_post==$cont_prev)
    {
        echo '<script>alert("La incidencia no se ha encontrado")</script>';
    }
    else
    {
        echo '<script>alert("La incidencia se ha borrado de manera correcta")</script>';
    }

    //Imprimo las incidencia que quedan, de esta manera se comprueba que se haya borrado de manera correcta
    echo '<pre>';
    var_dump($_SESSION['incidente']);
    echo '</pre>';
}
                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';