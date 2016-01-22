<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Person;

class PersonController extends Controller {
	
	/*
	 * 	nombre: newPersonAction = newAction
	 * 	URL: /person/new
	 *  parametors: request
	 *  
	 *  descripcion:
	 * 	Siguiendo las reglas de validación descritas
	 *	en la tabla anterior, muestra un formulario
	 *	para la entrada de datos de una nueva
	 *	persona.
	 *  
	 * */
	public function newAction(Request $request) {
	
		$person = new Person();
		//$defaultData = array('message' => 'Type your message here');
		// creamos el formulario.
		$form = $this->createFormBuilder($person, ['translation_domain' => 'AppBundle'])
		->add('name', 'text', ['label' => 'person.name'])
		->add('age', 'integer', ['label' => 'person.age'], array(
				'required' => false
				
			))
		->add('birthDate', 'date', array(
				'label' => 'person.birthDate',
				'years' => range(1900,2015),
				'widget' => 'single_text',
				'format' => 'dd-MM-yyy'|'dd/MM/yyyy'|'dd.MM.yyyy'| 'dd MM yyyy',
			))
		->add('height', 'integer', ['label' => 'person.height'], array('required' => false))
		->add('email', 'text', ['label' => 'person.email'])
		->add('phone', 'integer', ['label' => 'person.phone'])
		->add('gender', 'choice', array(
				'label' => 'person.gender',
				'choices' => array('m' => 'form.gender.m', 'f' => 'form.gender.f'),				
			))
		->add('descends', 'integer', ['label' => 'person.descends'], array('required' => false))
		->add('vehicle', 'checkbox', array(
				'label' => 'person.vehicle',
				'required' => false,
				
			))
		->add('preferredLanguage', 'choice', array(
				'label' => 'person.preferredLanguage',
				'choices' => array(
						    'aa' => 'Afar', 'ab' => 'Abkhaz',    'ae' => 'Avestan',    'af' => 'Afrikaans',    'ak' => 'Akan',    'am' => 'Amharic',    'an' => 'Aragonese',    'ar' => 'Arabic',    'as' => 'Assamese',    'av' => 'Avaric',    'ay' => 'Aymara',    'az' => 'Azerbaijani',    'ba' => 'Bashkir',    'be' => 'Belarusian',    'bg' => 'Bulgarian',    'bh' => 'Bihari',    'bi' => 'Bislama',    'bm' => 'Bambara',  'bax' => 'Bamun', 'bjn' => 'Najar',  'bn' => 'Bengali',    'bo' => 'Tibetan Standard, Tibetan, Central',    'br' => 'Breton',    'bs' => 'Bosnian',    'ca' => 'Catalan; Valencian',    'ce' => 'Chechen',    'ch' => 'Chamorro',    'co' => 'Corsican',    'cr' => 'Cree',    'cs' => 'Czech',    'cu' =>  'Church Slavic','cv' => 'Chuvash',    'cy' => 'Welsh',    'da' => 'Danish',    'de' => 'German',    'dv' => 'Divehi; Dhivehi; Maldivian;',    'dz' => 'Dzongkha',    'ee' => 'Ewe',    'el' => 'Greek, Modern',    'en' => 'English',    'eo' => 'Esperanto',    'es' => 'Spanish; Castilian',    'et' => 'Estonian',    'eu' => 'Basque',    'fa' => 'Persian',    'ff' => 'Fula; Fulah; Pulaar; Pular',    'fi' => 'Finnish',    'fj' => 'Fijian',    'fo' => 'Faroese',    'fr' => 'French',    'fy' => 'Western Frisian',    'ga' => 'Irish',    'gd' => 'Scottish Gaelic; Gaelic',    'gl' => 'Galician',    'gn' => 'GuaranÃ­',    'gu' => 'Gujarati',    'gv' => 'Manx',    'ha' => 'Hausa',    'he' => 'Hebrew (modern)',    'hi' => 'Hindi',    'ho' => 'Hiri Motu',    'hr' => 'Croatian',    'ht' => 'Haitian; Haitian Creole',    'hu' => 'Hungarian',    'hy' => 'Armenian',    'hz' => 'Herero',    'ia' => 'Interlingua',    'id' => 'Indonesian',    'ie' => 'Interlingue',    'ig' => 'Igbo',    'ii' => 'Nuosu',    'ik' => 'Inupiaq',    'io' => 'Ido',    'is' => 'Icelandic',    'it' => 'Italian',    'iu' => 'Inuktitut',    'ja' => 'Japanese (ja)',    'jv' => 'Javanese (jv)',    'ka' => 'Georgian',    'kg' => 'Kongo',    'ki' => 'Kikuyu, Gikuyu',    'kj' => 'Kwanyama, Kuanyama',    'kk' => 'Kazakh',    'kl' => 'Kalaallisut, Greenlandic',    'km' => 'Khmer',    'kn' => 'Kannada',    'ko' => 'Korean',    'kr' => 'Kanuri',    'ks' => 'Kashmiri',    'ku' => 'Kurdish',    'kv' => 'Komi',    'kw' => 'Cornish',    'ky' => 'Kirghiz, Kyrgyz',    'la' => 'Latin',    'lb' => 'Luxembourgish, Letzeburgesch',    'lg' => 'Luganda',    'li' => 'Limburgish, Limburgan, Limburger',    'ln' => 'Lingala',    'lo' => 'Lao',    'lt' => 'Lithuanian',    'lu' => 'Luba-Katanga',    'lv' => 'Latvian',    'mg' => 'Malagasy',    'mh' => 'Marshallese',    'mi' => 'Maori',    'mk' => 'Macedonian',    'ml' => 'Malayalam',    'mn' => 'Mongolian',    'mr' => 'Marathi (Mara?hi)',    'ms' => 'Malay',    'mt' => 'Maltese',    'my' => 'Burmese',    'na' => 'Nauru',    'nb' => 'Norwegian BokmÃ¥l',    'nd' => 'North Ndebele',    'ne' => 'Nepali',    'ng' => 'Ndonga',    'nl' => 'Dutch',    'nn' => 'Norwegian Nynorsk',    'no' => 'Norwegian',    'nr' => 'South Ndebele',    'nv' => 'Navajo, Navaho',    'ny' => 'Chichewa; Chewa; Nyanja',    'oc' => 'Occitan',    'oj' => 'Ojibwe, Ojibwa',    'om' => 'Oromo',    'or' => 'Oriya',    'os' => 'Ossetian, Ossetic',    'pa' => 'Panjabi, Punjabi',    'pi' => 'Pali',    'pl' => 'Polish',    'ps' => 'Pashto, Pushto',    'pt' => 'Portuguese',    'qu' => 'Quechua',    'rm' => 'Romansh',    'rn' => 'Kirundi',    'ro' => 'Romanian, Moldavian, Moldovan',    'ru' => 'Russian',    'rw' => 'Kinyarwanda',    'sa' => 'Sanskrit (Sa?sk?ta)',    'sc' => 'Sardinian',    'sd' => 'Sindhi',    'se' => 'Northern Sami',    'sg' => 'Sango',    'si' => 'Sinhala, Sinhalese',    'sk' => 'Slovak',    'sl' => 'Slovene',    'sm' => 'Samoan',    'sn' => 'Shona',    'so' => 'Somali',    'sq' => 'Albanian',    'sr' => 'Serbian',    'ss' => 'Swati',    'st' => 'Southern Sotho',    'su' => 'Sundanese',    'sv' => 'Swedish',    'sw' => 'Swahili',    'ta' => 'Tamil',    'te' => 'Telugu',    'tg' => 'Tajik',    'th' => 'Thai',    'ti' => 'Tigrinya',    'tk' => 'Turkmen',    'tl' => 'Tagalog',    'tn' => 'Tswana',    'to' => 'Tonga (Tonga Islands)',    'tr' => 'Turkish',    'ts' => 'Tsonga',    'tt' => 'Tatar',    'tw' => 'Twi',    'ty' => 'Tahitian',    'ug' => 'Uighur, Uyghur',    'uk' => 'Ukrainian',    'ur' => 'Urdu',    'uz' => 'Uzbek',    've' => 'Venda',    'vi' => 'Vietnamese',    'vo' => 'VolapÃ¼k',    'wa' => 'Walloon',    'wo' => 'Wolof',    'xh' => 'Xhosa',    'yi' => 'Yiddish',    'yo' => 'Yoruba',    'za' => 'Zhuang, Chuang',    'zh' => 'Chinese',    'zu' => 'Zulu',),
							'required' => false,			
				
				))		
		->add('englishLevel', 'choice', array(
				'label' => 'person.englishLevel',
				'choices' => array(
						'1' => 'A1', '2' => 'A2', '3' => 'B1', '4' => 'B2', '5' => 'C1', '6' => 'C2'),				
						'required' => false,				
						'multiple' => false,				
						'expanded' => true,			
				
				))		
		->add('personalWebSite', 'text', ['label' => 'person.personalWebSite'], array('required' => false))		
		->add('cardNumber', 'text',  ['label' => 'person.cardNumber'], array('required' => false))		
		->add('IBAN', 'text',  ['label' => 'person.iban'], array('required' => false))			
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
				$em->persist($person);				
				// alamacenamos en la base de datos.				
				$em->flush();				
				// Comprobamos que botón se pulsa de los dos.				
				$nextAction = $form->get('saveAndAdd')->isClicked()				
					? 'newPersonAction' 	// mostramos de nuevo el formulario				
					: 'listPersonAction';	// mostramos la lista de personas				
				return $this->redirectToRoute($nextAction);											
			}		
		}		
		
		return $this->render('person/newPerson.html.twig', array(		
			'form' => $form->createView(),
		));
	}
	
	/*
	 * 	nombre: listPersonAction = listAction
	 * 	URL: /person/list
	 * 
	 * 	descripción:
	 * 	Listado reducido de las personas existentes
	 *	con opción de mostrar detalles y eliminar.
	 * 	URL: /person/list
	 * 	nombre: 
	 * 
	 * */
	public function listAction() {
		
		// Recogemos el repositorio
		$repository = $this->getDoctrine() ->getRepository('AppBundle:Person');
		
		// Recuperamos todos los productos.
		$person = $repository->findAll();
		// Pasamos a la plantilla el aray products
		return $this->render('person/listPersonAction.html.twig', array( 'person' => $person));
	}
	
	/*
	 * nombre: showPersonAction = showAction
	 * URL: /person/show/{id}
	 * parámetros: id
	 * 
	 * descripción:
	 * Muestra información detallada de la persona.
	 * 
	 * */
	public function showAction($id) {
		// Se busca en el repositorio por id.
		$person = $this->getDoctrine()
		->getRepository('AppBundle:Person')
		->find($id);
		// Comprobamos que exista el producto.
		if (!$person) {
			throw $this->createNotFoundException(
					'No existe la persona con el id '.$id
					);
		}
		
		//Pasar product a una plantilla.
		return $this->render('person/showPerson.html.twig', array( 'person' => $person));
	}
	
	
	/*
	 * nombre: deletePersonAction = deleteAction
	 * parámetro: id
	 * URL: /person/delete/{id}
	 * 
	 * descripción:
	 * Elimina la persona
	 * */
	public function deleteAction($id) {
		// Creamos el objeto category
		$person = new Person();
		
		// Recogemos repositorio y buscamos por el id.
		$em = $this->getDoctrine()->getManager();
		$person = $em->getRepository('AppBundle:Person')->find($id);
		// Si no se encuentra nos muestra mensaje.
		if (!$person) {
			throw $this->createNotFoundException(
					'No existe la persona con el id '.$id
					);
		}
		// Se elimina la categoria y se actualiza la base de datos.
		$em->remove($person);
		$em->flush();
		
		return $this->render('person/deletePerson.html.twig', array( 'person' => $person));
	}
}