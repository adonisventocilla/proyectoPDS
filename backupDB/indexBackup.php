<?
	if(strcmp($login,"")!=0)
	{
		include_once('ControlBK.php');
		$OBJControlBK = new ControlBK;
		$OBJControlBK -> HacerBK($login);
	}
	else
	{
		include_once('../inc/FormMensaje.php');
		$OBJMSJ = new FormMensaje;
		$OBJMSJ -> RegresarInicio("Error: Se ha detectado un acceso no autorizado");		
	}
?>