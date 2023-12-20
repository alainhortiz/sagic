<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NomencladorAsignatura;
use AppBundle\Entity\NomencladorCargo;
use AppBundle\Entity\NomencladorCategoriaCientifica;
use AppBundle\Entity\NomencladorCategoriaDocente;
use AppBundle\Entity\NomencladorCentro;
use AppBundle\Entity\NomencladorCiudadania;
use AppBundle\Entity\NomencladorConsejoPopular;
use AppBundle\Entity\NomencladorCurso;
use AppBundle\Entity\NomencladorDepartamento;
use AppBundle\Entity\NomencladorEspecialidad;
use AppBundle\Entity\NomencladorFacultad;
use AppBundle\Entity\NomencladorGradoCientifico;
use AppBundle\Entity\NomencladorIdioma;
use AppBundle\Entity\NomencladorMaestria;
use AppBundle\Entity\NomencladorMilitancia;
use AppBundle\Entity\NomencladorMotivoNoEvaluacionProfesoral;
use AppBundle\Entity\NomencladorProcedenciaSocial;
use AppBundle\Entity\NomencladorProfesion;
use AppBundle\Entity\NomencladorProvincia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NomencladorController extends Controller
{
    /**
     * @Route("/listarNomencladores/{entidad}", name="listarNomencladores")
     * @param $entidad
     * @return Response|null
     */
    public function listarNomencladoresAction($entidad)
    {
        $em = $this->getDoctrine()->getManager();
        $nomencladores  = $em->getRepository('AppBundle:' .  $entidad)->findBy(array(),array('id' => 'ASC'));
        $nombreNomneclador = $this->obtenerNombreNomenclador($entidad);

        return $this->render('nomenclador/Generales/index.html.twig', [
            'nomencladores' => $nomencladores,
            'nombreNomneclador' => $nombreNomneclador,
            'nombreEntidad' => $entidad
        ]);
    }

    /**
     * @Route("/insertNomenclador", name="insertNomenclador")
     */
    public function insertNomencladorAction()
    {
        $peticion = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();

        $nombre = $peticion->request->get('nombre');

        $nomenclador = $this->instanciarNomenclador($peticion->request->get('entidad'));
        $resp = $em->getRepository('AppBundle:NomencladorEspecialidad')->agregarNomenclador($nombre, $nomenclador);

        if(is_string($resp)) {
            return new Response($resp);
        }

        //se crea la traza
        $dataTraza = array(
            'modulo' => $peticion->request->get('entidad'),
            'accion' => 'Insertar',
            'descripcion' => 'Se insertó una nuevo nomenclador con el nombre: '.$data['nombre']
        );
        $traza = $em->getRepository('AppBundle:Traza')->guardarTraza($dataTraza);

        if (is_string($traza)) {
            return new Response($traza);
        }

        return new Response('ok');
    }

    /**
     * @Route("/updateNomenclador", name="updateNomenclador")
     */
    public function updateNomencladorAction()
    {
        $peticion = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();

        $data = array(
            'id' => $peticion->request->get('id'),
            'entidad' => $peticion->request->get('entidad'),
            'nombre' => $peticion->request->get('nombre')
        );

        $resp = $em->getRepository('AppBundle:NomencladorEspecialidad')->modificarNomenclador($data);


        if(is_string($resp)) {
            return new Response($resp);
        }

        //se crea la traza
        $dataTraza = array(
            'modulo' => $peticion->request->get('entidad'),
            'accion' => 'Modificar',
            'descripcion' => 'Se modificó el nomenclador con el nombre: '.$data['nombre']
        );
        $traza = $em->getRepository('AppBundle:Traza')->guardarTraza($dataTraza);

        if (is_string($traza)) {
            return new Response($traza);
        }

        return new Response('ok');
    }

    /**
     * @Route("/deleteNomenclador", name="deleteNomenclador")
     */
    public function deleteNomencladorAction()
    {
        $peticion = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();

        $data = array(
            'id' => $peticion->request->get('id'),
            'entidad' => $peticion->request->get('entidad')
        );

        $resp  = $em->getRepository('AppBundle:NomencladorEspecialidad')->eliminarNomenclador($data);

        if(is_string($resp)) {
            return new Response($resp);
        }

        //se crea la traza
        $dataTraza = array(
            'modulo' => $peticion->request->get('entidad'),
            'accion' => 'Eliminar',
            'descripcion' => 'Se eliminó el nomenclador con el nombre: '.$resp->getNombre()
        );
        $traza = $em->getRepository('AppBundle:Traza')->guardarTraza($dataTraza);

        if (is_string($traza)) {
            return new Response($traza);
        }

        return new Response('ok');
    }

    private function obtenerNombreNomenclador($entidad){
        $result ='';
        switch ($entidad) {
            case 'NomencladorFacultad':
                $result = 'Facultades';
                break;
            case 'NomencladorCentro':
                $result = 'Centros';
                break;
            case 'NomencladorDepartamento':
                $result = 'Departamentos';
                break;
            case 'NomencladorProcedenciaSocial':
                $result = 'Procedencia Social';
                break;
            case 'NomencladorProvincia':
                $result = 'Provincias';
                break;
            case 'NomencladorConsejoPopular':
                $result = 'Consejos Populares';
                break;
            case 'NomencladorCiudadania':
                $result = 'Ciudadanías';
                break;
            case 'NomencladorProfesion':
                $result = 'Profesiones';
                break;
            case 'NomencladorEspecialidad':
                $result = 'Especialidades';
                break;
            case 'NomencladorAsignatura':
                $result = 'Asignaturas';
                break;
            case 'NomencladorCategoriaCientifica':
                $result = 'Categorias Científicas';
                break;
            case 'NomencladorCategoriaDocente':
                $result = 'Categorías Docentes';
                break;
            case 'NomencladorGradoCientifico':
                $result = 'Grados Científicos';
                break;
            case 'NomencladorCurso':
                $result = 'Cursos';
                break;
            case 'NomencladorMaestria':
                $result = 'Maestrías';
                break;
            case 'NomencladorIdioma':
                $result = 'Idiomas';
                break;
            case 'NomencladorMilitancia':
                $result = 'Militancia';
                break;
            case 'NomencladorCargo':
                $result = 'Cargos';
                break;
            case 'NomencladorMotivoNoEvaluacionProfesoral':
                $result = 'Motivospor lo que no se evaluó el profesor';
                break;
        }
        return $result;
    }

    private function instanciarNomenclador($entidad){
        $nomenclador = '';
        switch ($entidad) {
            case 'NomencladorFacultad':
                $nomenclador = new NomencladorFacultad();
                break;
            case 'NomencladorCentro':
                $nomenclador = new NomencladorCentro();
                break;
            case 'NomencladorDepartamento':
                $nomenclador = new NomencladorDepartamento();
                break;
            case 'NomencladorProcedenciaSocial':
                $nomenclador = new NomencladorProcedenciaSocial();
                break;
            case 'NomencladorProvincia':
                $nomenclador = new NomencladorProvincia();
                break;
            case 'NomencladorConsejoPopular':
                $nomenclador = new NomencladorConsejoPopular();
                break;
            case 'NomencladorCiudadania':
                $nomenclador = new NomencladorCiudadania();
                break;
            case 'NomencladorProfesion':
                $nomenclador = new NomencladorProfesion();
                break;
            case 'NomencladorEspecialidad':
                $nomenclador = new NomencladorEspecialidad();
                break;
            case 'NomencladorAsignatura':
                $nomenclador = new NomencladorAsignatura();
                break;
            case 'NomencladorCategoriaCientifica':
                $nomenclador = new NomencladorCategoriaCientifica();
                break;
            case 'NomencladorCategoriaDocente':
                $nomenclador = new NomencladorCategoriaDocente();
                break;
            case 'NomencladorGradoCientifico':
                $nomenclador = new NomencladorGradoCientifico();
                break;
            case 'NomencladorCurso':
                $nomenclador = new NomencladorCurso();
                break;
            case 'NomencladorMaestria':
                $nomenclador = new NomencladorMaestria();
                break;
            case 'NomencladorIdioma':
                $nomenclador = new NomencladorIdioma();
                break;
            case 'NomencladorMilitancia':
                $nomenclador = new NomencladorMilitancia();
                break;
            case 'NomencladorCargo':
                $nomenclador = new NomencladorCargo();
                break;
            case 'NomencladorMotivoNoEvaluacionProfesoral':
                $nomenclador = new NomencladorMotivoNoEvaluacionProfesoral();
                break;
        }
        return $nomenclador;
    }

}
