<?php

// src/AppBundle/DataFixtures/ORM/LoadCategoryData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoryData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface {
	/**
	 * 
	 * @var ContainerInterface
	 */
	private $container;
	
	public function setContainer(ContainerInterface $container = null) {
		
		$this->container = $container;
		
	}
	
	public function load(ObjectManager $manager) {
		// Añadimos manualmente categorias a la base de datos.
		$category1 = new Category();
		$category1 -> setName('Carnes');
		$category2 = new Category();
		$category2 -> setName('Pescados');
		$category3 = new Category();
		$category3 -> setName('Ultracongelados');
		$category4 = new Category();
		$category4 -> setName('Limpieza');
		
		$manager->persist($category1);
		$manager->persist($category2);
		$manager->persist($category3);
		$manager->persist($category4);
		$manager->flush();
		
		// Recogemos la ubicación del proyecto symfony
		$symfony_app_base_dir = $this->container->getParameter('kernel.root_dir');

		// Añadimos mediante fichero .csv nuevos registros a la base de datos.
		
		// abrimos el fichero y lo recorremos en modo lectura
		$fd = fopen($symfony_app_base_dir.'/Resources/data/categories.csv', "r");
		if($fd) {
			while (($data = fgetcsv($fd)) !== false) {
				// Creamos el objeto
				$category = new Category();
				// Recogemos el objeto del fichero
				$category -> setName($data[0]);
				
				$manager->persist($category);
				// alamacenamos en la base de datos.
				$manager->flush();
				
				// referenciamos la categoria.
				$this->addReference($category->getName(), $category);
			}
			fclose($fd);	// se cierra el fichero
		}
		
	}
	
	//Orden de carga de ficheros.
	public function getOrder() {
	
		return 1;
	}
}