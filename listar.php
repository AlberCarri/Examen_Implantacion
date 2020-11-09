<?php
session_start();
include 'head.php';

if(isset($_REQUEST['listar']))
{
  $tipo_incidencia = $_REQUEST['tipo'];

  echo "Tipo de incidencia: ".$tipo_incidencia;

  echo '<br>';

  echo '<table>
  <tr>
  <th>Num. Incidencia</th>
  <th>Tipo</th>
  <th>Fecha</th>
  <th>Lugar</th>
  <th>Ip</th>
  <th>Descripción</th>
  </tr>';


//Comsigo imprimir las diferentes incidencias que coinciden con las almancendas
//pero a la hora de emprimir las recorre tres veces
  foreach($_SESSION['incidente'] as $clave=>$valor)
  {
    foreach($_SESSION['incidente'] as $valor=>$val)
    {
      if($val[1]==$tipo_incidencia)
      {
      echo '<tr>';
        echo '<td>'.$valor.'</td>';
        echo '<td>'.$val[0].'</td>';
        echo '<td>'.$val[1].'</td>';
        echo '<td>'.$val[2].'</td>';
        echo '<td>'.$val[3].'</td>';
        echo '<td>'.$val[4].'</td>';
      echo '</tr>';
      }
    }
  }

  /*foreach($_SESSION['incidente'] as $clave=>$valor)
  {
    if($valor[2]==$tipo)
    {
      echo '<tr>';
        echo '<td>'.$valor[0].'</td>';
        echo '<td>'.$val[1].'</td>';
    echo '</tr>';

    }
  }*/

  echo '</table>';
}
                                             
 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
                 <div align="left">
                    <select name="tipo">
                     <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                    </select>
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
 include 'pie.php';

