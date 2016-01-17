<?php

// src/AppBundle/DataFixtures/ORM/LoadProductData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadProductData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface {
	
	/**
	 * {@inheritDoc}
	 * @see \Doctrine\Common\DataFixtures\FixtureInterface::load()
	 */
	public function load(ObjectManager $manager) {
		
		// Recogemos la ubicación del proyecto symfony
		$symfony_app_base_dir = $this->container->getParameter('kernel.root_dir');
		
		// Añadimos mediante fichero .csv nuevos registros a la base de datos.
		
		// abrimos el fichero y lo recorremos en modo lectura
		$row = 0;
		
		$fd = fopen($symfony_app_base_dir.'/Resources/data/products.csv', "r");
		if($fd) {
			while (($data = fgetcsv($fd, 1000, ",")) !== false) {
				$row++;
				if ($row == 1)continue; 			
				// Creamos el objeto
				$product = new Product();
				// Recogemos el objeto del fichero
				$product -> setName($data[0]);
				$product -> setDescription($data[1]);
				$product -> setCategory($this->getReference($data[2]));
				$product -> setPrice($data[3]);
				
				$manager->persist($product);
				// alamacenamos en la base de datos.
				$manager->flush();
				
				$this->addReference($product->getName(), $product);
			}
			fclose($fd);	// se cierra el fichero
		}

	}

	/**
	 * {@inheritDoc}
	 * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
	 */
	public function getOrder() {
		
		return 2;

	}

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\DependencyInjection\ContainerAwareInterface::setContainer()
	 */
	public function setContainer(ContainerInterface $container = null) {
		
		$this->container = $container;

	}

}