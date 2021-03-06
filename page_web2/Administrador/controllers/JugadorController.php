<?php

// include "./models/modelo_jugadores.php";
// include "views/JugadorView.php";

class JugadorController{

	private $jugadores;
	private	$view;
	

	public function __construct()
	{
		include "./models/modelo_jugadores.php";
		include "views/JugadorView.php";

		$this->jugadores=new Jugadores();
		$this->view = new JugadorView();
		
	}
	
	//nuevos

	public function actionMostrarJugador($nac){
		// $jugadores=new Jugadores();
		// $view = new JugadorView();
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);
		$arr_aux=array();
		//nuevo: $id_material por $nac
		
		// seteo nac en vista
		$this->view->set_nac_jugador($nac);
		if($nac=='Mundial'){
			//$jug tiene la descripcion completa para todos los id jugadores 
			//excepto los videos q estan en $arr_videos
			$arr_jug=$this->jugadores->load_jugadores('Mundial');
			
			//$arr_videos tiene todos los videos para cada id_jugador
		
		}else{
			$arr_jug=$this->jugadores->load_jugadores('Nacional');
			
			//$arr_videos tiene todos los videos para cada id_jugador
		}
		foreach ($arr_jug as $key => $arr) {
					$arr_aux=$this->jugadores->load_videos($arr['id_jugador']);
					$arr_videos[$arr['id_jugador']]=$arr_aux;
				}
		$this->view->set_jugadores($arr_jug);
		$this->view->set_videos($arr_videos);
		$this->view->render_modal();
	}	


    public function actionEditarJugador(){
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);

		$jug=$_POST['id_jug'];
		$j = explode("&", $jug);
	    //obtengo todos los datos de un id_jugador para cargar en el formulario.
       	$arr_jug=$this->jugadores->load_personal_information($j[0]);
       	$arr_videos=$this->jugadores->load_videos($j[0]);
       	$img=$this->jugadores->load_image($j[0]);
       	$img_grande=$this->jugadores->load_big_image($j[0]);
       	//seteo para la vista correspondiente
       	$this->view->set_nac_jugador($j[1]);
       	$this->view->set_personal_information($arr_jug);
		$this->view->set_videos($arr_videos);
		$this->view->set_image($img);
		$this->view->set_img_grande($img_grande);

        //muestra el tpl form semi vacio para edicion de id_jugador
        $this->view->render_form_jugador_semi_vacio();
        
    }

	public function actionEliminarJugador(){
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);

		$jug=$_POST['id_jug'];
		$j = explode("&", $jug);
	
       	$this->jugadores->eliminar_jugador_basico($j[0]);
       	$this->jugadores->eliminar_jugador_imagenes($j[0]);
       	$this->jugadores->eliminar_jugador_jugadores($j[0]);
       	$this->jugadores->eliminar_jugador_video($j[0]);
        
        $this->actionMostrarJugador($j[1]);
        
    }
	public function actionAgregarJugador(){
		
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);

		$nac=$_POST['nac'];
		
        //seteo nac en la vista correspondiente
        // seteo nacionaliadad en la vista correspondiente
        $this->view->set_nac_jugador($nac);
      
        $this->view->render_form_jugador_vacio();
	}	

	public function actionAgregarJugadorForm(){
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);

		// $mat=$_POST;
		$jug=$_POST;
        // id_mat 
        	$nac=$jug['nac'];

        	$nombre=$jug['nombre'];
        	// $tipo_jugador=$jug['tipo_jugador'];
        	$nacionalidad=$jug['nacionalidad'];
        	$fecha=$jug['fecha_nacimiento'];
        	$altura=$jug['altura'];
        	$peso=$jug['peso'];
        	$agarre=$jug['agarre'];
        	$equipamiento=$jug['equipamiento'];
        	$ranking=$jug['ranking'];
        	$inicios=$jug['inicios'];
        	$img_chica=$jug['ruta_chica'];
        	$img_grande=$jug['ruta_grande'];
        	$video1=$jug['ruta_video_1'];
        	$video2=$jug['ruta_video_2'];
        	$video3=$jug['ruta_video_3'];

        
        	$id=$this->jugadores->obtenerId();
        	$id_nuevo=$id+1;
        
        	$this->jugadores->agregar_jugador_basico($id_nuevo,$nac,$nacionalidad,$fecha,
        		$altura,$peso,$agarre,$equipamiento,$ranking,$inicios);
   			$this->jugadores->agregar_jugador_imagenes($id_nuevo,$img_chica,$img_grande);
   			// if (isset($video1)){
   			if ($video1 != ''){
	   			$this->jugadores->agregar_jugador_video($id_nuevo,$video1);
	   			$this->jugadores->agregar_jugador_video($id_nuevo,$video2);
	   			$this->jugadores->agregar_jugador_video($id_nuevo,$video3);
   			}

			$this->jugadores->agregar_jugador_jugadores($id_nuevo,$nombre);
        	$this->actionMostrarJugador($nac);
       
        }	

        public function actionActualizarJugador(){
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$this->view->set_usuario($usuario);

		// $mat=$_POST;
			$jug=$_POST;
        	$nac=$jug['nac'];
        	$id=$jug['id'];
        	// echo "$nac";
        	$nombre=$jug['nombre'];
        	// $tipo_jugador=$jug['tipo_jugador'];
        	$nacionalidad=$jug['nacionalidad'];
        	$fecha=$jug['fecha_nacimiento'];
        	$altura=$jug['altura'];
        	$peso=$jug['peso'];
        	$agarre=$jug['agarre'];
        	$equipamiento=$jug['equipamiento'];
        	$ranking=$jug['ranking'];
        	$inicios=$jug['inicios'];
        	$img_chica=$jug['ruta_chica'];
        	$img_grande=$jug['ruta_grande'];
        	

        	$this->jugadores->actualizar_jugador_basico($id,$nac,$nacionalidad,$fecha,
        	$altura,$peso,$agarre,$equipamiento,$ranking,$inicios);
   			$this->jugadores->actualizar_jugador_imagenes($id,$img_chica,$img_grande);
   			if (isset($video1)){
	   			$video1=$jug['ruta_video_0'];
	        	$video2=$jug['ruta_video_1'];
	        	$video3=$jug['ruta_video_2'];
	        	$id_video1=$jug['id_video_0'];
	        	$id_video2=$jug['id_video_1'];
	        	$id_video3=$jug['id_video_2'];
	   			$this->jugadores->actualizar_jugador_video($id_video1,$video1);
	   			$this->jugadores->actualizar_jugador_video($id_video2,$video2);
	   			$this->jugadores->actualizar_jugador_video($id_video3,$video3);
   			}
        	$this->actionMostrarJugador($nac);
	}

}

?>