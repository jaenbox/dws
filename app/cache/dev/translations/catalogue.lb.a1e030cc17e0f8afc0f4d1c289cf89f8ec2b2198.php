<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dëse Wäert sollt falsch sinn.',
    'This value should be true.' => 'Dëse Wäert sollt wouer sinn.',
    'This value should be of type {{ type }}.' => 'Dëse Wäert sollt vum Typ {{ type }} sinn.',
    'This value should be blank.' => 'Dëse Wäert sollt eidel sinn.',
    'The value you selected is not a valid choice.' => 'Dëse Wäert sollt enger vun de Wielméiglechkeeten entspriechen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Et muss mindestens {{ limit }} Méiglechkeet ausgewielt ginn.|Et musse mindestens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Et dierf héchstens {{ limit }} Méiglechkeet ausgewielt ginn.|Et dierfen héchstens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'One or more of the given values is invalid.' => 'Een oder méi vun de Wäerter ass ongëlteg.',
    'The fields {{ fields }} were not expected.' => 'D\'Felder {{ fields }} goufen net erwaart.',
    'The fields {{ fields }} are missing.' => 'D\'Felder {{ fields }} feelen.',
    'This value is not a valid date.' => 'Dëse Wäert entsprécht kenger gëlteger Datumsangab.',
    'This value is not a valid datetime.' => 'Dëse Wäert entsprécht kenger gëlteger Datums- an Zäitangab.',
    'This value is not a valid email address.' => 'Dëse Wäert ass keng gëlteg Email-Adress.',
    'The file could not be found.' => 'De Fichier gouf net fonnt.',
    'The file is not readable.' => 'De Fichier ass net liesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De Fichier ass ze grouss ({{ size }} {{ suffix }}). Déi zougeloosse Maximalgréisst bedréit {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Den Typ vum Fichier ass ongëlteg ({{ type }}). Erlaabten Type sinn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dëse Wäert soll méi kleng oder gläich {{ limit }} sinn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Dës Zeecheketten ass ze laang. Se sollt héchstens {{ limit }} Zeechen hunn.',
    'This value should be {{ limit }} or more.' => 'Dëse Wäert sollt méi grouss oder gläich {{ limit }} sinn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Dës Zeecheketten ass ze kuerz. Se sollt mindestens {{ limit }} Zeechen hunn.',
    'This value should not be blank.' => 'Dëse Wäert sollt net eidel sinn.',
    'This value should not be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value should be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value is not valid.' => 'Dëse Wäert ass net gëlteg.',
    'This value is not a valid time.' => 'Dëse Wäert entsprécht kenger gëlteger Zäitangab.',
    'This value is not a valid URL.' => 'Dëse Wäert ass keng gëlteg URL.',
    'The two values should be equal.' => 'Béid Wäerter sollten identesch sinn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De fichier ass ze grouss. Déi maximal Gréisst dierf {{ limit }} {{ suffix }} net depasséieren.',
    'The file is too large.' => 'De Fichier ass ze grouss.',
    'The file could not be uploaded.' => 'De Fichier konnt net eropgeluede ginn.',
    'This value should be a valid number.' => 'Dëse Wäert sollt eng gëlteg Zuel sinn.',
    'This file is not a valid image.' => 'Dëse Fichier ass kee gëltegt Bild.',
    'This is not a valid IP address.' => 'Dëst ass keng gëlteg IP-Adress.',
    'This value is not a valid language.' => 'Dëse Wäert aentsprécht kenger gëlteger Sprooch.',
    'This value is not a valid locale.' => 'Dëse Wäert entsprécht kengem gëltege Gebittsschema.',
    'This value is not a valid country.' => 'Dëse Wäert entsprécht kengem gëltege Land.',
    'This value is already used.' => 'Dëse Wäert gëtt scho benotzt.',
    'The size of the image could not be detected.' => 'D\'Gréisst vum Bild konnt net detektéiert ginn.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'D\'Breet vum Bild ass ze grouss ({{ width }}px). Déi erlaabte maximal Breet ass {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'D\'Breet vum Bild ass ze kleng ({{ width }}px). Déi minimal Breet ass {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'D\'Héicht vum Bild ass ze grouss ({{ height }}px). Déi erlaabte maximal Héicht ass {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'D\'Héicht vum Bild ass ze kleng ({{ height }}px). Déi minimal Héicht ass {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dëse Wäert sollt dem aktuelle Benotzerpasswuert entspriechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dëse Wäert sollt exactly {{ limit }} Buschtaf hunn.|Dëse Wäert sollt exakt {{ limit }} Buschtawen hunn.',
    'The file was only partially uploaded.' => 'De Fichier gouf just deelweis eropgelueden.',
    'No file was uploaded.' => 'Et gouf kee Fichier eropgelueden.',
    'No temporary folder was configured in php.ini.' => 'Et gouf keen temporären Dossier an der php.ini konfiguréiert.',
    'Cannot write temporary file to disk.' => 'Den temporäre Fichier kann net gespäichert ginn.',
    'A PHP extension caused the upload to fail.' => 'Eng PHP-Erweiderung huet den Upload verhënnert.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dës Sammlung sollt {{ limit }} oder méi Elementer hunn.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dës Sammlung sollt {{ limit }} oder manner Elementer hunn.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dës Sammlung sollt exakt {{ limit }} Element hunn.|Dës Sammlung sollt exakt {{ limit }} Elementer hunn.',
    'Invalid card number.' => 'Ongëlteg Kaartennummer.',
    'Unsupported card type or invalid card number.' => 'Net ënnerstëtzte Kaartentyp oder ongëlteg Kaartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dëst ass keng gëlteg IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dëse Wäert ass keng gëlteg ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dëse Wäert ass keng gëlteg ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dëse Wäert ass weder eng gëlteg ISBN-10 nach eng gëlteg ISBN-13.',
    'This value is not a valid ISSN.' => 'Dëse Wäert ass keng gëlteg ISSN.',
    'This value is not a valid currency.' => 'Dëse Wäert ass keng gëlteg Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dëse Wäert sollt {{ compared_value }} sinn.',
    'This value should be greater than {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi {{ compared_value }} sinn.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi oder gläich {{ compared_value }} sinn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi {{ compared_value }} sinn.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi oder gläich {{ compared_value }} sinn.',
    'This value should not be equal to {{ compared_value }}.' => 'Dëse Wäert sollt net {{ compared_value }} sinn.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt net identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze grouss ({{ ratio }}). Den erlaabte Maximalwäert ass {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze kleng ({{ ratio }}). Den erwaarte Minimalwäert ass {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'D\'Bild ass quadratesch ({{ width }}x{{ height }}px). Quadratesch Biller sinn net erlaabt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'D\'Bild ass am Queeschformat ({{ width }}x{{ height }}px). Biller am Queeschformat sinn net erlaabt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'D\'Bild ass am Héichformat ({{ width }}x{{ height }}px). Biller am Héichformat sinn net erlaabt.',
    'An empty file is not allowed.' => 'En eidele Fichier ass net erlaabt.',
    'The host could not be resolved.' => 'Den Domain-Numm konnt net opgeléist ginn.',
    'This value does not match the expected {{ charset }} charset.' => 'Dëse Wäert entsprécht net dem erwaarten Zeechesaz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dëst ass kee gëltege "Business Identifier Code" (BIC).',
    'This form should not contain extra fields.' => 'Dës Feldergrupp sollt keng zousätzlech Felder enthalen.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'De geschécktene Fichier ass ze grouss. Versicht wann ech gelift ee méi klenge Fichier eropzelueden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Den CSRF-Token ass ongëlteg. Versicht wann ech gelift de Formulaire nach eng Kéier ze schécken.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bei der Authentifikatioun ass e Feeler opgetrueden.',
    'Authentication credentials could not be found.' => 'Et konnte keng Zouganksdate fonnt ginn.',
    'Authentication request could not be processed due to a system problem.' => 'D\'Ufro fir eng Authentifikatioun konnt wéinst engem Problem vum System net beaarbecht ginn.',
    'Invalid credentials.' => 'Ongëlteg Zouganksdaten.',
    'Cookie has already been used by someone else.' => 'De Cookie gouf scho vun engem anere benotzt.',
    'Not privileged to request the resource.' => 'Keng Rechter fir d\'Ressource unzefroen.',
    'Invalid CSRF token.' => 'Ongëltegen CSRF-Token.',
    'Digest nonce has expired.' => 'Den eemolege Schlëssel ass ofgelaf.',
    'No authentication provider found to support the authentication token.' => 'Et gouf keen Authentifizéierungs-Provider fonnt deen den Authentifizéierungs-Token ënnerstëtzt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keng Sëtzung disponibel. Entweder ass se ofgelaf oder Cookies sinn net aktivéiert.',
    'No token could be found.' => 'Et konnt keen Token fonnt ginn.',
    'Username could not be found.' => 'De Benotzernumm konnt net fonnt ginn.',
    'Account has expired.' => 'Den Account ass ofgelaf.',
    'Credentials have expired.' => 'D\'Zouganksdate sinn ofgelaf.',
    'Account is disabled.' => 'De Konto ass deaktivéiert.',
    'Account is locked.' => 'De Konto ass gespaart.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Grupp aktualiséieren',
    'group.show.name' => 'Gruppennumm',
    'group.new.submit' => 'Grupp creéieren',
    'group.flash.updated' => 'D\'Grupp gouf aktualiséiert',
    'group.flash.created' => 'D\'Grupp gouf creéiert',
    'group.flash.deleted' => 'D\'Grupp gouf geläscht',
    'security.login.username' => 'Benotzernumm',
    'security.login.password' => 'Passwuert',
    'security.login.remember_me' => 'U mech erënneren',
    'security.login.submit' => 'Umellen',
    'profile.show.username' => 'Benotzernumm',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benotzer aktualiséieren',
    'profile.flash.updated' => 'De Benotzerprofil gouf aktualiséiert',
    'change_password.submit' => 'Passwuert ännern',
    'change_password.flash.success' => 'D\'Passwuert gouf geännert',
    'registration.check_email' => 'Eng E-Mail gouf un %email% geschéckt. Se enthält e Link deen s Du uklicke muss, fir Däi Benotzerkonto ze bestätegen.',
    'registration.confirmed' => 'Gléckwonsch %username%, Däi Benutzerkonto ass elo bestätegt.',
    'registration.submit' => 'Registréieren',
    'registration.flash.user_created' => 'De Benotzer gouf erfollegräich creéiert',
    'registration.email.subject' => 'Wëllkomm %username%!',
    'registration.email.message' => 'Hallo %username%!

Fir Däi Benotzerkonto ze bestätegen, besich wann ech gelift d\'Säit %confirmationUrl%

Mat beschte Gréiss,
d\'Equipe.
',
    'resetting.password_already_requested' => 'Een neit Passwuert gouf an de vergaangene 24 Stunden fir dëse Benotzer schon emol ugefrot.',
    'resetting.check_email' => 'Eng E-Mail gouf un %email% geschéckt. Se enthält e Link, deen s Du uklicke muss, fir Däi Passwort zeréckzesetzen.',
    'resetting.request.invalid_username' => 'De Benotzer "%username%" existéiert net.',
    'resetting.request.username' => 'Benotzernumm',
    'resetting.request.submit' => 'Passwuert zerécksetzen',
    'resetting.reset.submit' => 'Passwuert ännern',
    'resetting.flash.success' => 'D\'Passwuert gouf erfollegräich zeréckgesat',
    'resetting.email.subject' => 'Wëllkomm %username%!',
    'resetting.email.message' => 'Hallo %username%!

Fir Däi Passwuert zeréckzesetzen, besich wann ech gelift d\'Säit %confirmationUrl%

Mat beschte Gréiss,
d\'Equipe.
',
    'layout.logout' => 'Ofmellen',
    'layout.login' => 'Umellen',
    'layout.register' => 'Registréieren',
    'layout.logged_in_as' => 'Ugemellt als %username%',
    'form.group_name' => 'Gruppennumm',
    'form.username' => 'Benotzernumm',
    'form.email' => 'E-Mail-Adress',
    'form.current_password' => 'Aktuellt Passwuert',
    'form.password' => 'Passwuert',
    'form.password_confirmation' => 'Bestätegung',
    'form.new_password' => 'Neit Passwuert',
    'form.new_password_confirmation' => 'Bestätegung',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'person.nombre' => 'Este campo no puede estar vacío',
    'person.date' => 'Introduce una fecha válida',
    'person.email' => 'El email \'{{ value }}\' no es un email válido',
    'person.url' => 'La url \'{{ value }}\'no es una url válida',
    'person.card' => 'El número de tarjeta introducido no es válido',
    'person.iban' => 'El IBAN introducido no es válido',
    'person.invalid' => 'Este no es un valor válido',
    'person.height.min' => 'La altura mínima es {{ limit }} cm',
    'person.height.max' => 'La altura máxima es {{ limit }} cm',
    'person.height.invalid' => 'El valor introducido no es válido',
    'person.age.min' => 'La edad mínima es {{ limit }} años',
    'person.age.max' => 'La edad máxima es {{ limit }} años',
    'person.age.invalid' => 'El valor introducido no es válido',
    'person.descends.min' => 'El número mínimo de descendientes es {{ limit }}',
    'person.descends.max' => 'El número máximo de descendientes es {{ limit }}',
    'person.descends.invalid' => 'El valor introducido no es válido',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario',
    'fos_user.username.short' => '[-Inf,Inf]El nombre de usuario es demasiado corto',
    'fos_user.username.long' => '[-Inf,Inf]El nombre de usuario es demasiado largo',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo',
    'fos_user.email.short' => '[-Inf,Inf]La dirección de correo es demasiado corta',
    'fos_user.email.long' => '[-Inf,Inf]La dirección de correo es demasiado larga',
    'fos_user.email.invalid' => 'La dirección de correo no es válida',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña',
    'fos_user.password.short' => '[-Inf,Inf]La contraseña es demasiado corta',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña',
    'fos_user.new_password.short' => '[-Inf,Inf]La nueva contraseña es demasiado corta',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre',
    'fos_user.group.short' => '[-Inf,Inf]El nombre es demasiado corto',
    'fos_user.group.long' => '[-Inf,Inf]El nombre es demasiado largo',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'AppBundle' => 
  array (
    'product.id' => 'id',
    'product.name' => 'Nombre',
    'product.description' => 'Descripción',
    'product.price' => 'Precio',
    'product.category' => 'Categoría',
    'product.edit' => 'Editar',
    'product.delete' => 'Eliminar',
    'product.new.title' => 'Nuevo producto',
    'product.new.header' => 'Nuevo producto',
    'product.show.title' => 'Detalles producto',
    'product.show.header' => 'Detalles producto',
    'product.list.title' => 'Listado de productos',
    'product.list.header' => 'Listado de productos',
    'menu.product' => 'Producto',
    'menu.category' => 'Categoría',
    'menu.person' => 'Persona',
    'menu.login' => 'Acceder',
    'menu.registre' => 'Registrarse',
    'form.save' => 'Guardar',
    'form.saveAndAdd' => 'Guardar y añadir',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado',
    'group.flash.created' => 'El grupo ha sido creado',
    'group.flash.deleted' => 'El grupo ha sido borrado',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.password_already_requested' => 'La contraseña para este usuario ya ha sido solicitada dentro de las 24 horas.',
    'resetting.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.',
    'resetting.request.invalid_username' => 'El usuario o dirección de correo "%username%" no existe.',
    'resetting.request.username' => 'Nombre de usuario',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
