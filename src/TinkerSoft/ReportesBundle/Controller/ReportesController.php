<?php

namespace TinkerSoft\ReportesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use TinkerSoft\FuncionesSitioBundle\Entity\Coleccion;

require('fpdf181/fpdf.php');

class PDF extends \FPDF{
    
    // Tabla coloreada
    function FancyTable($header, $data, $tamaño_columna)
    {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(70,130,180);
        $this->SetTextColor(255);
        $this->SetDrawColor(0,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // Cabecera
        $cantidad_columnas = count($header);
        $w = array();
        if (count($tamaño_columna) > 0){
            $w = $tamaño_columna;
        }else{
        
            for($i = 0; $i < $cantidad_columnas; $i++){
                array_push($w,(180/$cantidad_columnas));//Tamaño columna
            }
        }
        
        for($i=0;$i<count($header);$i++){
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        }
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = false;
        foreach($data as $row)
        {
            for($i = 0; $i < count($row);$i++){
                $this->Cell($w[$i],6,$row[$i],'LR',0,'L',$fill);
            }
            $this->Ln();
            $fill = !$fill;
        }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }
}

class ReportesController extends Controller
{
    
    private function generarReporteAction($titulo,$arregloColumnas,$arregloFilas,$tamaño_columna){
        
        for($i = 0; $i < count($arregloColumnas); $i++){
            $arregloColumnas[$i] = utf8_decode($arregloColumnas[$i]);
        }
        
        for($i = 0; $i < count($arregloFilas); $i++){
            
            for($j = 0; $j < count($arregloFilas[$i]); $j++){
                $arregloFilas[$i][$j] = utf8_decode($arregloFilas[$i][$j]);
            }
            
        }
        
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,1,utf8_decode($titulo));
        $fecha_generado = date("d/m/Y");
        $hora_generado = date("G:i:s");
        $pdf->Cell(150,1, $fecha_generado . " " . $hora_generado ,0,0,0);
        $pdf->Ln(6);
        $pdf->FancyTable($arregloColumnas,$arregloFilas,$tamaño_columna);
        $pdf->Ln(6);
        $pdf->Cell(190,0,utf8_decode("QMP - TinkerSoft"),0,0,0);
        $pdf->Output("D","Reporte-" . str_replace(' ', '', $titulo) . "-" . str_replace(' ', '',  date("Y-m-d") . "-" . $hora_generado) . ".pdf", true);
        
    }
    
    public function indexAction()
    {
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
    
    public function generarReportePeliculasVistasAction(Request $request){
        $columnas = array('IDPelicula','Nombre película','Veces vista');
        $tamaño_columna = array(25,130,25);
        $em = $this->getDoctrine()->getManager();
        $vistas = $this->get('app.funciones_controler')->getPeliculasVistasContadasAuditor($em);
        
        $data = array();
        for($i = 0; $i < count($vistas) ; $i++){
            $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]['idPelicula']);
            $fila = array($vistas[$i]['idPelicula'],$movie['title'],$vistas[$i]['cantidad']);
            array_push($data,$fila);
        }
        
        $this->generarReporteAction("Películas vistas",$columnas,$data, $tamaño_columna);
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
    
    public function generarReportePeliculasVistasUsuariosAction(Request $request){
        $columnas = array('IDPelicula','Nombre película','Fecha vista','@nickname');
        $tamaño_columna = array(20,90,40,30);
        $em = $this->getDoctrine()->getManager();
        $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
        $data = array();
        for($i = 0; $i < count($vistas) ; $i++){
            $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]['idPelicula']);
            $fila = array($vistas[$i]['idPelicula'],$movie['title'],$vistas[$i]['fechaAdicionPelicula']->format("Y-m-d G:i:s"),$vistas[$i]['nickname']);
            array_push($data,$fila);
        }
        
        $this->generarReporteAction("Películas vistas por usuarios",$columnas,$data,$tamaño_columna);
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
    
    public function generarReportePeliculasVistasUsuariosGenerosUltimoMesAction(Request $request){
         
        $columnas = array('@nickname','Género visto');
        $em = $this->getDoctrine()->getManager();
        $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
        /* Vistas último mes */
            $peliculasVistasUltimoMes = array();
            for($i = 0; $i < count($vistas); $i++){
                
                $diff = time() - strtotime($vistas[$i]['fechaAdicionPelicula']->format("Y-m-d")) ; 
               
                if  ($diff/(60) < 43200){
                    
                    array_push($peliculasVistasUltimoMes,$vistas[$i]);
                    
                } 
            }
        
        $generos = array();
        for($i = 0; $i < count($peliculasVistasUltimoMes) ; $i++){
            $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $peliculasVistasUltimoMes[$i]['idPelicula']);
            
            
            
            for($j = 0; $j < count($movie['genres']); $j++){
                if(!in_array(array($vistas[$i]['nickname'], $movie['genres'][$j]->name), $generos)){
                    array_push($generos, array($peliculasVistasUltimoMes[$i]['nickname'], $movie['genres'][$j]->name));
                }
            }
        }
        
        $this->generarReporteAction("Géneros vistos por los usuarios en el último mes",$columnas,$generos,array());
        
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
    
    public function generarReportePeliculasVistasUsuariosGenerosAction(Request $request){
         
        $columnas = array('@nickname','Género visto');
        $em = $this->getDoctrine()->getManager();
        $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
        $generos = array();
        for($i = 0; $i < count($vistas) ; $i++){
            $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $vistas[$i]['idPelicula']);
            
            for($j = 0; $j < count($movie['genres']); $j++){
                if(!in_array(array($vistas[$i]['nickname'], $movie['genres'][$j]->name), $generos)){
                    array_push($generos, array($vistas[$i]['nickname'], $movie['genres'][$j]->name));
                }
            }
        }
        
        $this->generarReporteAction("Géneros vistos por los usuarios",$columnas,$generos,array());
        
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
    
    public function generarReportePeliculasVistasUsuariosUltimoMesAction(Request $request){
        $columnas = array('IDPelicula','Nombre película','Fecha vista','@nickname');
        $tamaño_columna = array(20,90,40,30);
        $em = $this->getDoctrine()->getManager();
        $vistas = $this->get('app.funciones_controler')->getPeliculasVistaUsuariossAuditor($em);
        
        /* Vistas último mes */
            $peliculasVistasUltimoMes = array();
            for($i = 0; $i < count($vistas); $i++){
                
                $diff = time() - strtotime($vistas[$i]['fechaAdicionPelicula']->format("Y-m-d")) ; 
               
                if  ($diff/(60) < 43200){
                    
                    array_push($peliculasVistasUltimoMes,$vistas[$i]);
                    
                } 
            }
        
        $data = array();
        for($i = 0; $i < count($peliculasVistasUltimoMes) ; $i++){
            $movie = $this->get('app.api_controller')->obtenerPeliculaRipeadaAction($request, $peliculasVistasUltimoMes[$i]['idPelicula']);
            $fila = array($peliculasVistasUltimoMes[$i]['idPelicula'],$movie['title'],$peliculasVistasUltimoMes[$i]['fechaAdicionPelicula']->format("Y-m-d G:i:s"),$peliculasVistasUltimoMes[$i]['nickname']);
            array_push($data,$fila);
        }
        
        $this->generarReporteAction("Películas vistas por usuario en el último mes",$columnas,$data,$tamaño_columna);
        return $this->render('TinkerSoftReportesBundle:Default:index.html.twig');
    }
 
}
