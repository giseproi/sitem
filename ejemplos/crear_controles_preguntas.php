<?
for($this->contador=1;$this->contador!=$this->opciones;$this->contador++){
							
							if(strlen($_POST['id_pregunta']=1))
							{
								$this->id_pregunta='00'.$_POST['id_pregunta'];
								}else{
										if(strlen($_POST['id_pregunta']=2))
										{
											$this->id_pregunta='0'.$_POST['id_pregunta'];	
												}
									}
							if(strlen($this->contador=1))
							{
								$this->control='00'.$this->contador;
								}else{
										if(strlen($this->contador=2))
										{
											$this->control='0'.$this->contador;	
												}
									}
							
							$this->propiedad['nombre']=$this->id_pregunta.$this->control;
							$this->propiedad['maxtamanno']=50;
							$this->propiedad['etiqueta']="Opcion ".$this->contador.":";
							?>