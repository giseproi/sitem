<?
	$this->acceso_db=new db_admin;
	$this->enlace=$this->acceso_db->conectar_db();
	$this->cadena_select="SELECT max(id_pais) from pais";
	$this->acceso_db->registro_db($this->cadena_select,0);
	$conteo=$this->acceso_db->obtener_conteo_db();
		if ($conteo==0)
		{ 
			$maximo = 0; // se asigna el número cero, caso contrario..
		} 
		else
		{
			$maximo=$this->acceso_db->obtener_registro_db();
			$maximo=$maximo[0][0];
			$maximo++;
		}
echo "<br><br><br><br>";
?> 
<div align="center">
  <p>&nbsp;</p>
  <p><strong><font color="#0033CC" size="4" face="Arial, Helvetica, sans-serif">Pa&iacute;s 
    </font></strong></p>
  <p>&nbsp; </p>
</div>
<form name="form1" method="post" action="002.php">
  <div align="center"> 
    <table width="580" border="0" cellspacing="4" cellpadding="0">
      <tr> 
        <td width="260"><div align="right"><strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif">C&oacute;digo 
            del pa&iacute;s</font></strong></div></td>
        <td width="320"><strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="id_pais" value=" <? echo $maximo; ?> " readonly="readonly">
          </font></strong></td>
      </tr>
      <tr> 
        <td><div align="right"><strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif">Nombre 
            del Pa&iacute;s</font></strong></div></td>
        <td><strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif"> 
          <input type="text" name="nombre_pais">
          </font></strong></td>
      </tr>
      <tr> 
        <td colspan="2" align="center"> <p> <strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif"> 
            <input type="submit" name="002" value="Enviar">
            </font></strong></p>
          </td>
      </tr>
    </table>
  </div>
</form>
<div align="center"> <strong><font color="#000033" size="2" face="Arial, Helvetica, sans-serif"> 
  <?
echo "<br><br><br><br><br><br><br><br>";
?>
  </font></strong></div>
