<?php
//src/AppBundle/Controller/Category
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;


class CategoryController extends Controller {
	
	/*
	 * Muestra un formulario de categoria que través del
		cual permita persistir la información enviada. El
		formulario tendrá dos botones (‘guardar’ y
		’guardar y continuar’) con el comportamiento
		esperado (ver doc .)
	 * 	URL /category/new
	 * 	Parámetros: request
	 * 
	 * */
	public function newCategoryAction(Request $request) {
		
		$category = new Category();
		
		// creamos el formulario.
		$form = $this->createFormBuilder($category, ['translation_domain' => 'AppBundle'])
			->add('name', 'text', ['label' => 'category.name'])
			->add('save', 'submit', array('label' => 'form.save'))
			->add('saveAndAdd', 'submit', array('label' => 'form.saveAndAdd'))
			->getForm();
		
		if($request->isMethod('POST')) {
			// se recogen los datos del formulario.
			$form->handlerequest($request);
				
			if($form->isValid()) {
				// Almacenar en la base de datos.
				// recogemos el manager
				$em = $this->getDoctrine()->getManager();
				// persistimos
				$em->persist($category);
				// alamacenamos en la base de datos.
				$em->flush();
				// Comprobamos que botón se pulsa de los do.
				$nextAction = $form->get('saveAndAdd')->isClicked()
				? 'newCategoryAction' 		// mostramos de nuevo el formulario
				: 'listActionCategory';	// mostramos la lista de categorias
				// Se redirige a una pagina, indicando que esta correcta la creación del usuario
				return $this->redirectToRoute($nextAction);
					
			}
		}
		return $this->render('category/newCategory.html.twig', array(
				'form' => $form->createView(),
		));
	}
	
	/*
	 * Crea una category pasada por parámetro.
	 * URL:/category/create/{name} 
	 * Requirements: alfanuméricos
	 * @param name
	 * 
	 */
	public function createAction($name) {
		// Creamos el objeto category
		$category = new Category();
		$category->setName($name); // asignamos su nombre

		// Alamcenamos en la base de datos
		$em = $this->getDoctrine()->getManager();
		$em->persist($category);
		$em->flush();
		
		return new Response('Categoría '.$category->getName().' '.' creada correctamente');
	}
	
	/*
	 * Borra la categoría pasada por parámetro(id).
	 * URL: /category/delete/{id}
	 *
	 */
	public function deleteAction($id) {
		// Creamos el objeto category
		$category = new Category();
		
		// Recogemos repositorio y buscamos por el id. 
		$em = $this->getDoctrine()->getManager();
		$category = $em->getRepository('AppBundle:Category')->find($id);
		// Si no se encuentra nos muestra mensaje.
		if (!$category) {
			throw $this->createNotFoundException(
					'No existe la categoría con el id '.$id
					);
		}
		// Se elimina la categoria y se actualiza la base de datos.
		$em->remove($category);
		$em->flush();
		
		return $this->render('category/deleteCategory.html.twig', array( 'category' => $category));
	}
	
	/*
	 * Lista todos las categorías existentes
	 * URL: /category/list
	 */
	public function listAction() {
		// Recogemos el repositorio
		$repository = $this->getDoctrine() ->getRepository('AppBundle:Category');
	
		// Recuperamos todos los productos.
		$categories = $repository->findAll();
		// Si no se encuentra nos muestra mensaje.
		if (!$categories) {
			throw $this->createNotFoundException(
					'No existen categorías'
					);
		}
		// Pasamos a la plantilla el aray products
		return $this->render('category/listActionCategory.html.twig', array( 'categories' => $categories));
	
	}
	
	/* Método para editar un producto.*/
	public function editAction($id, Request $request) {
	
		$category = new Category();
	
		// recogemos el producto
		$em = $this->getDoctrine()->getManager();
		// Recogemos el repositorio
		$category =$em->getRepository('AppBundle:Category')->find($id);
		// comprobamos que exista el producto.
		if(!$category) {
			throw $this->createNotFoundException(
					'No existe la category con el id '.$id
					);
		} else {
			// creamos el formulario.
			// creamos el formulario.
			$form = $this->createFormBuilder($category)
				->add('name', 'text')
				->add('save', 'submit', array('label' => 'SAVE'))
				->add('saveAndAdd', 'submit', array('label' => 'SAVE AND ADD'))
				->getForm();
							
					if($request->isMethod('POST')) {
						// se recogen los datos del formulario.
						$form->handlerequest($request);
							
						if($form->isValid()) {
							// Almacenar en la base de datos.
							// recogemos el manager
							$em = $this->getDoctrine()->getManager();
							// persistimos
							$em->persist($category);
							// alamacenamos en la base de datos.
							$em->flush();
							// Comprobamos que botón se pulsa de los do.
							$nextAction = $form->get('saveAndAdd')->isClicked()
							? 'newCategoryAction' 		// mostramos de nuevo el formulario
							: 'listActionCategory';	// mostramos la lista de categorias
							// Se redirige a una pagina, indicando que esta correcta la creación del usuario
							return $this->redirectToRoute($nextAction);
	
						}
					}
						
					return $this->render('category/newCategory.html.twig', array(
							'form' => $form->createView(),
					));
		}
	}
}