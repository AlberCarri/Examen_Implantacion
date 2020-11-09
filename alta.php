<?php
session_start();
include 'head.php';

if(isset($_REQUEST['enviar']))
{
      /*echo '<pre>';
      var_dump($_SESSION['incidente']);
      echo '</pre>';*/

      $_SESSION['incremental'] = $_SESSION['incremental'] + 1;

      $ip = $_SERVER['REMOTE_ADDR'];

      $fechaActual = date('d-m-Y H:i:s');

      $lugar = $_REQUEST['lugar'];

      $tipo = $_REQUEST['tipo'];

      $descripcion = $_REQUEST['descripcion'];

      if(isset($_REQUEST['urgente']))
      {
            $urgente="Si";
      }
      else
      {
            $urgente="No";
      }

      $_SESSION['incidente'][$_SESSION['incremental']]=array($urgente,$tipo,$fechaActual,$lugar,$ip,$descripcion);

      echo '<pre>';
      var_dump($_SESSION['incidente']);
      echo '</pre>';
}
                                             
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
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
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           