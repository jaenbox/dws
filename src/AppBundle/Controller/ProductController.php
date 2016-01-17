<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;


class ProductController extends Controller {
	
	/*
	 * 	Muestra un formulario de producto que través del
		cual permita persistir la información enviada. El
		formulario tendrá dos botones (‘guardar’ y
		’guardar y continuar’) con el comportamiento
		esperado (ver doc .)
	 *	URL /product/new
	 * 	Parámetros: request
	 * 
	 * 
	 * */
	
	public function newProductAction(Request $request) {
		
		$product = new Product();
		
		// creamos el formulario.
		$form = $this->createFormBuilder($product)
			->add('name', 'text')
			->add('description', 'text')
			->add('price', 'money')
			->add('category', 'entity', array(
										'class' => 'AppBundle:Category',
										'choice_label' => 'name'))
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
				$em->persist($product);
				// alamacenamos en la base de datos.
				$em->flush();
				// Comprobamos que botón se pulsa de los do.
				$nextAction = $form->get('saveAndAdd')->isClicked()
					? 'newProductAction' 	// mostramos de nuevo el formulario
					: 'listActionProduct';	// mostramos la lista de productos 
				// Se redirige a una pagina, indicando que esta correcta la creación del usuario
				return $this->redirectToRoute($nextAction);
			
			}
		}
		
		
		return $this->render('product/newProduct.html.twig', array(
				'form' => $form->createView(),
		));
	}
	
	public function createProductAction() {
		
	}
	/*
	 * Método para crear un objeto de la clase product estático.
	 * URL: /product/create
	 * Requirements: alfanumérico
	 */
	public function createStaticAction() {
	
		// Creamos el objeto category y seleccionamos categoria entre 0-10 mediante random
		$category = new Category();
		$category->setName(sprintf("Category%d",rand(0,10)));
		
		// Creamos el objeto producto con todos sus atributos.
		$product = new Product();
		$product->setName('Arroz');
		$product->setPrice('0.99');
		$product->setDescription('Paquete de 1kg de arroz');
		
		//relacionamos con categoría
		$product->setCategory($category);
		// recogemos el manager
		$em = $this->getDoctrine()->getManager();
		// persistimos
		$em->persist($category);
		$em->persist($product);
		// alamacenamos en la base de datos.
		$em->flush();
		
		return new Response('Objeto '.$product->getName().' y categoria id: '.$category->getId().' '.' creado correctamente.');
	}
	
	/*
	 *  Lista un producto cuyo identificador se pase por parámetro.
	 *  URL: /product/show/{id}
	 *  Requirements: id = numero
	 */
	public function showAction($id) {
		// Se busca en el repositorio por id.
		$product = $this->getDoctrine()
		->getRepository('AppBundle:Product')
		->find($id);
		// Comprobamos que exista el producto.
		if (!$product) {
			throw $this->createNotFoundException(
					'No existe el producto con el id '.$id
					);
		}
	
		//Pasar product a una plantilla.
		return $this->render('product/showProduct.html.twig', array( 'product' => $product));
	}
	
	/*
	 * Lista todos los productos existentes
	 * URL: /product/list
	 */
	public function listAction() {
		// Recogemos el repositorio
		$repository = $this->getDoctrine() ->getRepository('AppBundle:Product');
	
		// Recuperamos todos los productos.
		$products = $repository->findAll();
		// Pasamos a la plantilla el aray products
		return $this->render('product/listActionProduct.html.twig', array( 'products' => $products));
	
	}
	
	/*
	 * Crea y almacena un producto con los datos pasados por parámetro, la descripción será la misma que el nombre.
	 * URL: /product/create/{name}/{price}
	 */
	public function createParamAction($name, $price) {
		// Se crea el objeto con los parámetros que le pasamos.
		$product = new Product();
		$product->setName($name);
		$product->setPrice($price);
		$product->setDescription($name);
		
		// Se almacena en la base de datos.
		$em = $this->getDoctrine()->getManager();
		$em->persist($product);
		$em->flush();
	
		return new Response('Objeto '.$product->getName().' con id '.$product->getId().' '.' creado correctamente.');
	}
	
	/*
	 *  Lista los artículos de una categoría en concreto
	 *  URL: /product/list/category/{category}
	 *  Requirements: alfanumérico
	 */
	public function listByCategoryAction($category) {
		
		// Recogemos el repositorio con la categoria correspondiente.
		$category = $this->getDoctrine()
		->getRepository('AppBundle:Category')->findOneByName($category);
		
		// Comprobamos que exista la categoria seleccionada.
		if(!$category) {
			throw $this->createNotFoundException(
				'No existe esta categoría '.$category
					);
		}
		// Pasamos el resultado a la plantilla twig. correspondiente.
		return $this->render('category/listByCategoryAction.html.twig', array( 'category' => $category));
	}
	
	/*
	 *  Lista todos los productos clasificados por categoría.
	 *  URL: /product/list/category
	 */
	public function listAllByCategoryAction() {
	
		// Se recogen todas las categorias que estan asociadas a los productos.
		$em=$this->getDoctrine()->getManager();
		$repository = $em->getRepository('AppBundle:Category');
		$categories = $repository->findAll();
		// comprobamos que existaalguna categoria.
		if(!$categories) {
			throw $this->createNotFoundException(
					'No existe ninguna categoria'
					);
		}
		// Pasamos el array de categorias y productos a twig.
		return $this->render('category/listAllByCategoryAction.html.twig', array('categories' => $categories));
	}
	
	/*
	 * Elimina el producto indicado de la base de datos 
	 * URL: /product/delete
	 * requirements: id=numero
	 */
	public function deleteAction($id) {
		
		$em = $this->getDoctrine()->getManager();
		// Recogemos el repositorio
		$product =$em->getRepository('AppBundle:Product')->find($id);
		// comprobamos que exista el producto.
		if(!$product) {
			throw $this->createNotFoundException(
					'No existe el producto con el id '.$id
					);
		}
		// eliminamos el producto.
		$em->remove($product);
		$em->flush();
		
		return $this->render('product/deleteProduct.html.twig', array('product' => $product));
	}
	
	/* Método para editar un producto.*/
	public function editAction($id, Request $request) {
		
		$product = new Product();
		
		// recogemos el producto
		$em = $this->getDoctrine()->getManager();
		// Recogemos el repositorio
		$product =$em->getRepository('AppBundle:Product')->find($id);
		// comprobamos que exista el producto.
		if(!$product) {
			throw $this->createNotFoundException(
					'No existe el producto con el id '.$id
					);
		} else {
			// creamos el formulario.
			$form = $this->createFormBuilder($product)
			->add('name', 'text')
			->add('description', 'text')
			->add('price', 'money')
			->add('category', 'entity', array(
					'class' => 'AppBundle:Category',
					'choice_label' => 'name'))
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
					$em->persist($product);
					// alamacenamos en la base de datos.
					$em->flush();
					// Comprobamos que botón se pulsa de los do.
					$nextAction = $form->get('saveAndAdd')->isClicked()
					? 'newProductAction' 	// mostramos de nuevo el formulario
					: 'listActionProduct';	// mostramos la lista de productos
					// Se redirige a una pagina, indicando que esta correcta la creación del usuario
					return $this->redirectToRoute($nextAction);
						
				}
			}
			
			return $this->render('product/newProduct.html.twig', array(
					'form' => $form->createView(),
			));
		}		
	}
}