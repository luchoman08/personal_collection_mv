<?php

namespace TinkerSoft\VistaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use TinkerSoft\FuncionesSitioBundle\Entity\Coleccion;
use TinkerSoft\ReportesBundle\Controller\ReportesController;

class DefaultController extends Controller
{
    public function indexAction(){
        
        return $this->render('VistaBundle:Default:da.html.twig');
    }
    
    public function iniciarIndexAction(Request $request){
        
        $tendencia = $this->get('app.api_controller')->obtenerPeliculasTendenciaAction($request);
        $mejoresValoradas = $this->get('app.api_controller')->obtenerMejoresValoradasAction($request);
        $estrenos = $this->get('app.api_controller')->obtenerEstrenosAction($request);
        $proximamente = $this->get('app.api_controller')->obtenerProximamenteAction($request);
        $ultimas = $this->get('app.api_controller')->obtenerUltimasAction($request);
        
        $randomTendencia = rand ( 0 , count($tendencia));
        $randomMejoresValoradas = rand (  0 ,  count($mejoresValoradas));
        $randomEstrenos = rand ( 0 , count($estrenos));
        $randomProximamente = rand (  0 ,  count($proximamente));
        $arrayBanners;
        
        $peliculaTendencia = array('titulo'=>$tendencia['results'][$randomTendencia]->title, 'fondo'=> $tendencia['results'][$randomTendencia]->backdrop_path);
        $peliculaMejoresValoradas = array('fondo'=> $mejoresValoradas['results'][$randomMejoresValoradas]->backdrop_path, 'titulo'=>$mejoresValoradas['results'][$randomMejoresValoradas]->title);
        $peliculaEstrenos = array('fondo'=>$estrenos['results'][$randomEstrenos]->backdrop_path, 'titulo'=>$estrenos['results'][$randomEstrenos]->title);
        $peliculaProximamente =array('fondo'=>$proximamente['results'][$randomProximamente]->backdrop_path, 'titulo'=>$proximamente['results'][$randomProximamente]->title);
        
        $backdrops=array($peliculaTendencia, $peliculaMejoresValoradas,$peliculaEstrenos,$peliculaProximamente);
        
        $numPeliculasDivisibleTres= count($tendencia['results']) - (count($tendencia['results']) % 4);
        
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        
        return $this->render('VistaBundle:Default:index.html.twig', array('tendencia' => $tendencia,'mejoresValoradas' => $mejoresValoradas,'estrenos' => $estrenos,'proximamente' => $proximamente, 'ultimas' => $ultimas, 'numPeliculasDivisibleTres'=>$numPeliculasDivisibleTres, 'backdrops'=>$backdrops,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname));
    }
    
    public function verResultadosBusquedaShowAction(Request $request, $consulta,$numero_pagina){
        
        $datos = $this->get('app.api_controller')->buscarShowAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta));
        
    }
    
    public function verResultadosBusquedaAction(Request $request, $consulta,$numero_pagina){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->buscarPeliculaAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'busqueda'));
        
    }
    
    public function verResultadosSimilaresAction(Request $request, $consulta,$numero_pagina){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->obtenerSimilaresPaginadasAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'similares'));
        
    }
    
    public function verResultadosGenerosAction(Request $request, $generos,$numero_pagina){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->descubrirGenerosPaginadasAction($generos,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $generos,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'generos'));
        
    }
    
    public function verPeliculaAction(Request $request, $id, $optional){
        
        $datos = $this->get('app.api_controller')->obtenerPeliculaAction($request, $id);
        $similares = $this->get('app.api_controller')->obtenerSimilaresAction($id);
        
        $votos = $this->get('app.api_controller')->obtenerDatosOMDbIDAction($datos['imdb_id']);
        
        $em = $this->getDoctrine()->getManager();
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
            $listaColecciones = array('listaColecciones'=>$this->get('app.funciones_controler')->getListasPersonalizadas($request, $em));
            $calificacionPelicula = array('calificacionUsuario'=>$this->get('app.funciones_controler')->retornarCalificacionAction($request->getSession()->get('id'), $id, $em));
            $boolVista=array('vista'=>$this->get('app.funciones_controler')->preguntarPorPeliculaVistaAction($request, $id, $em));
            $boolPorVer = array('porVer'=>$this->get('app.funciones_controler')->preguntarPorPeliculaPorVerAction($request, $id, $em));
            $datos = $datos + $listaColecciones;
            $datos = $datos + $calificacionPelicula;
            $datos = $datos + $boolVista;
            $datos = $datos + $boolPorVer;
        }
        
        $fondos = $datos->backdrops;
        $funcionesOcultas = 0;
        if ($optional == 1){
            $funcionesOcultas = 1;
        }
        
        
        return $this->render('VistaBundle:Default:mostrarPelicula.html.twig', array('usuarioLogueado'=>$usuarioLogueado, 'params' => $datos, 'similares' => $similares, 'nickname' => $nickname, 'fondos' => $fondos, 'votos_imdb' => $votos['imdbVotes'],'funcionesOcultas' => $funcionesOcultas));
    }
    
    public function verListaGenerosAction(Request $request){
        
        $usuarioLogueado=0;
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $origen = 0;
                $em = $this->getDoctrine()->getManager();
                $gustos = $em->getRepository('FuncionesSitioBundle:RegistroGustos')->
                findOneBy(array('idUsuario'=>$request->getSession()->get('id')));
                
                if($gustos){
                $q = $em->createQuery('delete from FuncionesSitioBundle:RegistroGustos r where r.idUsuario = '.$request->getSession()->get('id'));
                $numDeleted = $q->execute();
                $origen=1;
                }
            
            
            $datos = $this->get('app.api_controller')->listaGenerosAction("en");
            return $this->render('VistaBundle:Default:elegirGenero.html.twig', array('params' => $datos, 'origen'=>$origen));
        }else{
            return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
        }
        
    }
    
    public function mostrarLoginAction(Request $request){
         if($request->getSession()->get('id'))
         {
             return $this->redirectToRoute('vista_homepage');
         }
         else{
        return $this->render('VistaBundle:Default:login.html.twig');
         }
        
    }
    
    public function demoAction(){
        return $this->render('VistaBundle:Default:demo.html.twig');
    
    }
    
    public function mostrarListasAction(Request $request){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');   
            $em = $this->getDoctrine()->getManager();
            $listaColecciones = array('listaColecciones'=>$this->get('app.funciones_controler')->getListasPersonalizadas($request, $em));
            //echo $listaColecciones['listaColecciones'][0]->getNombre();
            
            return $this->render('VistaBundle:Default:listas.html.twig',array('usuarioLogueado'=>$usuarioLogueado,'nickname' => $nickname, 'listacolecciones' => $listaColecciones));
        }else{
            return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
        }
    }
    
    public function panelUsuarioAction(Request $request){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
           $usuarioLogueado=1;
           $nickname = $request->getSession()->get('nickname');   
           
           $em = $this->getDoctrine()->getManager();
           $usuario = $this->get('app.funciones_controler')->getusuario($request,$em,$request->getSession()->get('id'));
           $listaColecciones = array('listaColecciones'=>$this->get('app.funciones_controler')->getListasPersonalizadas($request, $em));
           $listaPeliculasColeccion = array();
           for($i=0; $i<sizeof($listaColecciones["listaColecciones"]); $i++){
               
               $peliculas=$this->get('app.funciones_controler')->listarPeliculasColeccion( $request, $em, $listaColecciones["listaColecciones"][$i]->getId());
               $peliculasTMDB=array();
               for($j=0; $j<sizeof($peliculas); $j++){
                   $pelicula = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $peliculas[$j]->getIdPelicula());
                  array_push($peliculasTMDB, $pelicula);
               }
               
               array_push($listaPeliculasColeccion, array('nombreColeccion'=> $listaColecciones["listaColecciones"][$i]->getNombre(),'idColeccion'=>  $listaColecciones["listaColecciones"][$i]->getId(), 'peliculas'=>$peliculasTMDB));  
               
           }
           $gustos = $em->getRepository('FuncionesSitioBundle:RegistroGustos')->findBy(array('idUsuario'=>$request->getSession()->get('id')));
           
           $generos = $this->get('app.api_controller')->listaGenerosAction("en");
           
           $gustosNombres = array();
           $gustosID  = array();
           for($i = 0 ; $i < count($gustos) ; $i++){
               for($j = 0 ; $j < count($generos['genres']) ; $j++){
                   if($gustos[$i]->getGeneroid() == $generos['genres'][$j]->id ){
                       array_push($gustosNombres,$generos['genres'][$j]->name );
                       array_push($gustosID,$generos['genres'][$j]->id );
                   }
               }
            }
            
            $argumentoGeneros = "";
            for($i=0; $i<count($gustosID); $i++){
                $argumentoGeneros = $argumentoGeneros . $gustosID[$i];
                if($i < (count($gustosID)-1) ){
                  $argumentoGeneros = $argumentoGeneros . "|";
                }
            }
            
           if ($gustos){
               $peliculasDescubiertas = $this->get('app.api_controller')->descubrirGenerosAction($gustosID);
           }
           
            $vistas = $this->get('app.funciones_controler')->getPeliculasVistasUsuario($request, $em);
            $pendientes = $this->get('app.funciones_controler')->getPeliculasPorVerUsuario($request, $em);
            $califcadas = $this->get('app.funciones_controler')->getPeliculasCalificadasUsuario($request, $em);
            
            $peliculasVistas = array();
            $peliculasPendientes = array();
            $peliculasCalificadas = array();
            $peliculasVistasUltimoMes = array();
            
            for ($i = 0; $i < count($vistas); $i++){
                $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]->getIdPelicula());
                
                $tamano_overview =  strlen($movie["overview"]);
                   
                   if($tamano_overview > 285){
                       $nueva_overview = "";
                       for($j = 0 ; $j < 285 ; $j++ ){
                           $nueva_overview = $nueva_overview . $movie["overview"][$j];
                       }
                       $movie["overview"] = $nueva_overview . "...";
                   }
                $fecha_Adicion = array('fecha_adicion' => $vistas[$i]->getFechaAdicion());
                array_push($movie , $fecha_Adicion);  
                array_push($peliculasVistas,$movie);
            }
            
            for ($i = 0; $i < count($pendientes); $i++){
                $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $pendientes[$i]->getIdPelicula());
                $tamano_overview =  strlen($movie["overview"]);
                   
                   if($tamano_overview > 285){
                       $nueva_overview = "";
                       for($j = 0 ; $j < 285 ; $j++ ){
                           $nueva_overview = $nueva_overview . $movie["overview"][$j];
                       }
                       $movie["overview"] = $nueva_overview . "...";
                   }
                $fecha_Adicion = array('fecha_adicion' => $pendientes[$i]->getFechaAdicion());
                array_push($movie , $fecha_Adicion);  
                array_push($peliculasPendientes,$movie);
            }
            
            /* Se asume que una pelicula debe estar en vista para poder estar en calificada */
            for ($i = 0; $i < count($califcadas); $i++){
                for($j = 0; $j<count($peliculasVistas); $j++ ){
                    if ($califcadas[$i]->getIdPelicula() == $peliculasVistas[$j]['id']){
                        $tmp = $peliculasVistas[$j];
                        $tmp = array_merge($tmp,array('valoracion' => $califcadas[$i]->getValoracion()));
                        array_push($peliculasCalificadas,$tmp);
                    }
                }
            }
            
            /* Vistas último mes */
            for($i = 0; $i < count($vistas); $i++){
                
                $diff = time() - strtotime($vistas[$i]->getFechaAdicion()->format("Y-m-d")) ;  
                
                if  ($diff/(60) < 43200){
                    
                    for($j = 0; $j < count($peliculasVistas); $j++){
                        if ($vistas[$i]->getIdPelicula() == $peliculasVistas[$j]['id']){
                            array_push($peliculasVistasUltimoMes,$peliculasVistas[$j]);
                        }
                    }
                    
                } 
            }
            
            $generosVistos = array();
           
            for($k = 0; $k < count($peliculasVistas); $k++){
                
                for($j = 0 ; $j < count($generos['genres']) ; $j++){
                    
                    for($m = 0; $m < count($peliculasVistas[$k]['genres']); $m++)
                        if($peliculasVistas[$k]['genres'][$m]->id == $generos['genres'][$j]->id ){
                            if (!(in_array($generos['genres'][$j]->name, $generosVistos))) {
                                array_push($generosVistos,$generos['genres'][$j]->name ); 
                            }
                        }
                }
            }
          
           return $this->render('VistaBundle:Default:panelUsuario.html.twig',array('usuarioLogueado'=>$usuarioLogueado,'nickname' => $nickname, 'usuario' => $usuario, 'listacolecciones' => $listaColecciones, 'peliculas_coleccion'=>$listaPeliculasColeccion ,'gustos' => $gustosNombres, 'descubiertas' => $peliculasDescubiertas, 'generos' => $argumentoGeneros, 'vistas' => $peliculasVistas, 'pendientes' => $peliculasPendientes, 'calificadas' => $peliculasCalificadas, 'ultimomes' => $peliculasVistasUltimoMes, 'generosvistos' => $generosVistos, 'rol' => $request->getSession()->get('rol')));
        }else{
            return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
        }
        
    }
    
    public function panelAuditorAction(Request $request){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
           $usuarioLogueado=1;
           $nickname = $request->getSession()->get('nickname');   
           if (!($request->getSession()->get('rol') == 1) ){
               return $this->render('VistaBundle:Default:login.html.twig', array('error'=>3));
           }
           
           $em = $this->getDoctrine()->getManager();
           $usuario = $this->get('app.funciones_controler')->getusuario($request,$em,$request->getSession()->get('id'));
           
           // Vistas
            $peliculasVistas = $this->get('app.funciones_controler')->getPeliculasVistasContadasAuditor($em);
            $peliculas_tmp = array();
            for($i = 0; $i < count($peliculasVistas); $i++){
                    $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $peliculasVistas[$i]['idPelicula']);
                    $fila = array($peliculasVistas[$i]['idPelicula'],$movie['title'],$peliculasVistas[$i]['cantidad'],$movie['genres']);
                    array_push($peliculas_tmp,$fila);
            }
            
           $peliculasVistas = $peliculas_tmp;
           // End vistas
           
           //Vistas x Usuario
           
           $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
            $data = array();
            for($i = 0; $i < count($vistas) ; $i++){
                
                $titulo;
                for($r = 0; $r < count($peliculasVistas); $r++ ){
                    if($vistas[$i]['idPelicula'] == $peliculasVistas[$r][0] ){
                        $titulo = $peliculasVistas[$r][1];
                    }
                }
                
                $fila = array($vistas[$i]['idPelicula'],$titulo,$vistas[$i]['fechaAdicionPelicula']->format("Y-m-d G:i:s"),$vistas[$i]['nickname']);
                array_push($data,$fila);
            }
           $peliculasvistasusuarios = $data;
           //End vistas x usuario
           
            //Vistas Ultimo mes
           
            $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
            $peliculasVistasUltimoMes = array();
                for($i = 0; $i < count($vistas); $i++){
                    $diff = time() - strtotime($vistas[$i]['fechaAdicionPelicula']->format("Y-m-d")) ; 
                    if  ($diff/(60) < 43200){
                        array_push($peliculasVistasUltimoMes,$vistas[$i]);
                    } 
                }
            
            $data = array();
            for($i = 0; $i < count($peliculasVistasUltimoMes) ; $i++){
                $titulo;
                for($r = 0; $r < count($peliculasVistas); $r++ ){
                    if($peliculasVistasUltimoMes[$i]['idPelicula'] == $peliculasVistas[$r][0] ){
                        $titulo = $peliculasVistas[$r][1];
                        break;
                    }
                }
                $fila = array($peliculasVistasUltimoMes[$i]['idPelicula'],$titulo,$peliculasVistasUltimoMes[$i]['fechaAdicionPelicula']->format("Y-m-d G:i:s"),$peliculasVistasUltimoMes[$i]['nickname']);
                array_push($data,$fila);
            }
           
           $peliculasVistasUltimoMes = $data;
           
           //End vistas ultimo mes
           
           
           //Generos vistos
           
           $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
            $generos = array();
            for($i = 0; $i < count($vistas) ; $i++){
                //$movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]['idPelicula']);
                $movie;
                for($r = 0; $r < count($peliculasVistas); $r++ ){
                    if($vistas[$i]['idPelicula'] == $peliculasVistas[$r][0] ){
                        $movie = $peliculasVistas[$r];
                    }
                }
              
                for($j = 0; $j < count($movie[3]); $j++){
                    if(!in_array(array($vistas[$i]['nickname'], $movie[3][$j]->name), $generos)){
                        array_push($generos, array($vistas[$i]['nickname'], $movie[3][$j]->name));
                    }
                }
            }
            
           //End generos vistos
           
           //Generos vistos ultimo mes
           
           $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
            $peliculasVistasUltimoMesGenero = array();
                for($i = 0; $i < count($vistas); $i++){
                    $diff = time() - strtotime($vistas[$i]['fechaAdicionPelicula']->format("Y-m-d")) ; 
                    if  ($diff/(60) < 43200){
                        array_push($peliculasVistasUltimoMesGenero,$vistas[$i]);
                    } 
                }
        
            $generosUltimoMes = array();
            for($i = 0; $i < count($peliculasVistasUltimoMesGenero) ; $i++){
                //$movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]['idPelicula']);
                $movie;
                for($r = 0; $r < count($peliculasVistas); $r++ ){
                    if($peliculasVistasUltimoMesGenero[$i]['idPelicula'] == $peliculasVistas[$r][0] ){
                        $movie = $peliculasVistas[$r];
                    }
                }
              
                for($j = 0; $j < count($movie[3]); $j++){
                    if(!in_array(array($peliculasVistasUltimoMesGenero[$i]['nickname'], $movie[3][$j]->name), $generosUltimoMes)){
                        array_push($generosUltimoMes, array($peliculasVistasUltimoMesGenero[$i]['nickname'], $movie[3][$j]->name));
                    }
                }
            }
           
           //End generos vistos ultimo mes
           
            return $this->render('VistaBundle:Default:auditor.html.twig',array('usuarioLogueado'=>$usuarioLogueado,'nickname' => $nickname, 'usuario' => $usuario, 'peliculasvistas' => $peliculasVistas, 'peliculasvistasusuarios' => $peliculasvistasusuarios, 'peliculasultimomes' => $peliculasVistasUltimoMes, 'generosvistos' => $generos, 'generosultimomes' => $generosUltimoMes ));
        }else{
            return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
        }
    }
    
    public function panelAdministradorAction(Request $request){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
           $usuarioLogueado=1;
           $nickname = $request->getSession()->get('nickname');   
           if (!($request->getSession()->get('rol') == 2) ){
               return $this->render('VistaBundle:Default:login.html.twig', array('error'=>3));
           }
           $em = $this->getDoctrine()->getManager();
           $usuario = $this->get('app.funciones_controler')->getusuario($request,$em,$request->getSession()->get('id'));
           
           $peliculasVistas = $this->get('app.funciones_controler')->getPeliculasVistasAuditor($em);
           
            /* Vistas último mes */
            $peliculasVistasUltimoMes = array();
            for($i = 0; $i < count($peliculasVistas); $i++){
                
                $diff = time() - strtotime($peliculasVistas[$i]['fechaAdicionPelicula']->format("Y-m-d")) ; 
               
                if  ($diff/(60) < 43200){
                    
                    array_push($peliculasVistasUltimoMes,$peliculasVistas[$i]);
                    
                } 
            }
       
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->findAll();

           
           
            return $this->render('VistaBundle:Default:administrador.html.twig',array('usuarioLogueado'=>$usuarioLogueado,'nickname' => $nickname, 'usuario' => $usuario, 'peliculasvistas' => $peliculasVistas, 'peliculasultimomes' => $peliculasVistasUltimoMes, 'usuarios' => $usuarios));
        }else{
            return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
        }
    }
    
    public function busquedaAvanzadaAction(Request $request){
        return $this->render('VistaBundle:Default:busquedaAvanzada.html.twig');
    }
    
    public function verResultadoPorGeneroAction(Request $request, $genero,$numero_pagina){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->descubrirGeneroPaginadasAction($genero,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $datos[0],'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'generos'));
        
    }
    
    public function verResultadoActorAction(Request $request, $actor,$numero_pagina){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->buscarPeliculaActorAction($actor,$numero_pagina);
        //print_r($datos);
        return $this->render('VistaBundle:Default:buscarActor.html.twig', array('params' => $datos, 'consulta' => $actor,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname));
        
    }
    
    public function verResultadoUnActorAction(Request $request, $actorid){
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->buscarPeliculaActorEspecificoAction($request,$actorid);
        
        $datos_sin_profile = array();
        for($i = 1; $i < count($datos) ; $i++){
            array_push($datos_sin_profile,$datos[$i]);
        }
        
        
        return $this->render('VistaBundle:Default:buscarUnActor.html.twig', array('params' => $datos_sin_profile,'perfil' => $datos[0], 'consulta' => $actorid,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname));
        
    }
    
    
    
}
