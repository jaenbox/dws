<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'validators' => 
  array (
    'This value should be false.' => 'هذه القيمة يجب أن تكون خاطئة.',
    'This value should be true.' => 'هذه القيمة يجب أن تكون حقيقية.',
    'This value should be of type {{ type }}.' => 'هذه القيمة يجب ان تكون من نوع {{ type }}.',
    'This value should be blank.' => 'هذه القيمة يجب ان تكون فارغة.',
    'The value you selected is not a valid choice.' => 'القيمة المختارة ليست خيارا صحيحا.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيارات على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.|يجب ان تختار {{ limit }} اختيار على الاقل.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيارات على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.|يجب ان تختار {{ limit }} اختيار على الاكثر.',
    'One or more of the given values is invalid.' => 'واحد أو أكثر من القيم المعطاه خاطئ.',
    'This field was not expected.' => 'لم يكن من المتوقع هذا المجال.',
    'This field is missing.' => 'هذا المجال مفقود.',
    'This value is not a valid date.' => 'هذه القيمة ليست تاريخا صالحا.',
    'This value is not a valid datetime.' => 'هذه القيمة ليست تاريخا و وقتا صالحا.',
    'This value is not a valid email address.' => 'هذه القيمة ليست عنوان بريد إلكتروني صحيح.',
    'The file could not be found.' => 'لا يمكن العثور على الملف.',
    'The file is not readable.' => 'الملف غير قابل للقراءة.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا ({{ size }} {{ suffix }}).اقصى مساحه مسموح بها ({{ limit }} {{ suffix }}).',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'نوع الملف غير صحيح ({{ type }}). الانواع المسموح بها هى {{ types }}.',
    'This value should be {{ limit }} or less.' => 'هذه القيمة يجب ان تكون {{ limit }} او اقل.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حروف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.|هذه القيمة طويلة جدا. يجب ان تكون {{ limit }} حرف او اقل.',
    'This value should be {{ limit }} or more.' => 'هذه القيمة يجب ان تكون {{ limit }} او اكثر.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حروف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.|هذه القيمة قصيرة جدا. يجب ان تكون {{ limit }} حرف او اكثر.',
    'This value should not be blank.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should not be null.' => 'هذه القيمة يجب الا تكون فارغة.',
    'This value should be null.' => 'هذه القيمة يجب ان تكون فارغة.',
    'This value is not valid.' => 'هذه القيمة غير صحيحة.',
    'This value is not a valid time.' => 'هذه القيمة ليست وقت صحيح.',
    'This value is not a valid URL.' => 'هذه القيمة ليست رابط الكترونى صحيح.',
    'The two values should be equal.' => 'القيمتان يجب ان تكونا متساويتان.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'الملف كبير جدا. اقصى مساحه مسموح بها {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'الملف كبير جدا.',
    'The file could not be uploaded.' => 'لم استطع استقبال الملف.',
    'This value should be a valid number.' => 'هذه القيمة يجب ان تكون رقم.',
    'This file is not a valid image.' => 'هذا الملف ليس صورة صحيحة.',
    'This is not a valid IP address.' => 'هذه القيمة ليست عنوان رقمى صحيح.',
    'This value is not a valid language.' => 'هذه القيمة ليست لغة صحيحة.',
    'This value is not a valid locale.' => 'هذه القيمة ليست موقع صحيح.',
    'This value is not a valid country.' => 'هذه القيمة ليست بلدا صالحا.',
    'This value is already used.' => 'هذه القيمة مستخدمة بالفعل.',
    'The size of the image could not be detected.' => 'لم استطع معرفة حجم الصورة.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'عرض الصورة كبير جدا ({{ width }}px). اقصى عرض مسموح به هو{{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'عرض الصورة صغير جدا ({{ width }}px). اقل عرض مسموح به هو{{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'طول الصورة كبير جدا ({{ height }}px). اقصى طول مسموح به هو{{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'طول الصورة صغير جدا ({{ height }}px). اقل طول مسموح به هو{{ min_height }}px.',
    'This value should be the user\'s current password.' => 'هذه القيمة يجب ان تكون كلمة سر المستخدم الحالية.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حروف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.|هذه القيمة يجب ان تحتوى على {{ limit }} حرف فقط.',
    'The file was only partially uploaded.' => 'تم استقبال جزء من الملف فقط.',
    'No file was uploaded.' => 'لم يتم ارسال اى ملف.',
    'No temporary folder was configured in php.ini.' => 'لم يتم تهيئة حافظة مؤقتة فى ملف php.ini.',
    'Cannot write temporary file to disk.' => 'لم استطع كتابة الملف المؤقت.',
    'A PHP extension caused the upload to fail.' => 'احد اضافات PHP تسببت فى فشل استقبال الملف.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اكثر.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر او اقل.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عناصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.|هذه المجموعة يجب ان تحتوى على {{ limit }} عنصر فقط.',
    'Invalid card number.' => 'رقم البطاقه غير صحيح.',
    'Unsupported card type or invalid card number.' => 'نوع البطاقه غير مدعوم او الرقم غير صحيح.',
    'This is not a valid International Bank Account Number (IBAN).' => 'الرقم IBAN (رقم الحساب المصرفي الدولي) الذي تم إدخاله غير صالح.',
    'This value is not a valid ISBN-10.' => 'هذه القيمة ليست ISBN-10 صالحة.',
    'This value is not a valid ISBN-13.' => 'هذه القيمة ليست ISBN-13 صالحة.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'هذه القيمة ليست ISBN-10 صالحة ولا ISBN-13 صالحة.',
    'This value is not a valid ISSN.' => 'هذه القيمة ليست ISSN صالحة.',
    'This value is not a valid currency.' => 'العُملة غير صحيحة.',
    'This value should be equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'القيمة يجب ان تكون اعلي من {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'القيمة يجب ان تكون مساوية او اعلي من {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان تطابق {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'القيمة يجب ان تكون اقل من {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'القيمة يجب ان تساوي او تقل عن {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'القيمة يجب ان لا تساوي {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'القيمة يجب ان لا تطابق {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'نسبة العرض على الارتفاع للصورة كبيرة جدا ({{ ratio }}). الحد الأقصى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'نسبة العرض على الارتفاع للصورة صغيرة جدا ({{ ratio }}). الحد الأدنى للنسبة المسموح به هو {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'الصورة مربعة ({{ width }}x{{ height }}px). الصور المربعة غير مسموح بها.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'الصورة في وضع أفقي ({{ width }}x{{ height }}px). الصور في وضع أفقي غير مسموح بها.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'الصورة في وضع عمودي ({{ width }}x{{ height }}px). الصور في وضع عمودي غير مسموح بها.',
    'An empty file is not allowed.' => 'ملف فارغ غير مسموح به.',
    'The host could not be resolved.' => 'يتعذر الإتصال بالنطاق.',
    'This value does not match the expected {{ charset }} charset.' => 'هذه القيمة غير متطابقة مع صيغة التحويل {{ charset }}.',
    'This form should not contain extra fields.' => 'هذا النموذج يجب الا يحتوى على اى حقول اضافية.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'مساحة الملف المرسل كبيرة. من فضلك حاول ارسال ملف اصغر.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'قيمة رمز الموقع غير صحيحة. من فضلك اعد ارسال النموذج.',
    'fos_user.username.already_used' => 'الإسم المختار مسجل مسبقا',
    'fos_user.username.blank' => 'يرجى تعيين إسم المستخدم',
    'fos_user.username.short' => '[-Inf,Inf] إسم المستخدم قصير جدا',
    'fos_user.username.long' => '[-Inf,Inf] إسم المستخدم طويل جدا',
    'fos_user.email.already_used' => 'البريد الإلكتروني مسجل مسبقا',
    'fos_user.email.blank' => 'يرجى تعين البريد الإلكتروني',
    'fos_user.email.short' => '[-Inf,Inf] البريد الإلكتروني قصير',
    'fos_user.email.long' => '[-Inf,Inf] البريد الإلكتروني طويل',
    'fos_user.email.invalid' => 'البريد الإلكتروني غير صحيح',
    'fos_user.password.blank' => 'يرجى تعيين كلمة المرور',
    'fos_user.password.short' => '[-Inf,Inf]كلمة المرور قصيرة',
    'fos_user.password.mismatch' => 'كلمة المرور المدخلة غير مطابقة للكلمة الأصلية',
    'fos_user.new_password.blank' => 'يرجى تعيين كلمة مرور جديدة',
    'fos_user.new_password.short' => '[-Inf,Inf] كلمة المرور الجديدة قصيرة',
    'fos_user.current_password.invalid' => 'كلمة المرور المدخلة غير صحيحة',
    'fos_user.group.blank' => 'يرجى تعيين إسم المجموعة',
    'fos_user.group.short' => '[-Inf,Inf] إسم المجموعة قصير جدا',
    'fos_user.group.long' => '[-Inf,Inf] إسم المجموعة طويل جدا',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'حدث خطأ اثناء الدخول.',
    'Authentication credentials could not be found.' => 'لم استطع العثور على معلومات الدخول.',
    'Authentication request could not be processed due to a system problem.' => 'لم يكتمل طلب الدخول نتيجه عطل فى النظام.',
    'Invalid credentials.' => 'معلومات الدخول خاطئة.',
    'Cookie has already been used by someone else.' => 'ملفات تعريف الارتباط(cookies) تم استخدامها من قبل شخص اخر.',
    'Not privileged to request the resource.' => 'ليست لديك الصلاحيات الكافية لهذا الطلب.',
    'Invalid CSRF token.' => 'رمز الموقع غير صحيح.',
    'Digest nonce has expired.' => 'انتهت صلاحية(digest nonce).',
    'No authentication provider found to support the authentication token.' => 'لا يوجد معرف للدخول يدعم الرمز المستخدم للدخول.',
    'No session available, it either timed out or cookies are not enabled.' => 'لا يوجد صلة بينك و بين الموقع اما انها انتهت او ان متصفحك لا يدعم خاصية ملفات تعريف الارتباط (cookies).',
    'No token could be found.' => 'لم استطع العثور على الرمز.',
    'Username could not be found.' => 'لم استطع العثور على اسم الدخول.',
    'Account has expired.' => 'انتهت صلاحية الحساب.',
    'Credentials have expired.' => 'انتهت صلاحية معلومات الدخول.',
    'Account is disabled.' => 'الحساب موقوف.',
    'Account is locked.' => 'الحساب مغلق.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'تحديث المجموعة',
    'group.show.name' => 'إسم المجموعة',
    'group.new.submit' => 'إنشاء مجموعة',
    'group.flash.updated' => 'تم تحديث المجموعة',
    'group.flash.created' => 'تم إنشاء المجموعة',
    'group.flash.deleted' => 'تم حـذف المجموعة',
    'security.login.username' => 'إسم المستخدم',
    'security.login.password' => 'كلمة المرور',
    'security.login.remember_me' => 'حفظ البيانات',
    'security.login.submit' => 'تسجيل دخول',
    'profile.show.username' => 'إسم المستخدم',
    'profile.show.email' => 'بريد إلكتروني',
    'profile.edit.submit' => 'تحديث',
    'profile.flash.updated' => 'تم تحديث الملف الشخصي',
    'change_password.submit' => 'تغيير كلمة المرور',
    'change_password.flash.success' => 'تم تغيير كلمة المرور',
    'registration.check_email' => 'لقد تم إرسال رسالة إلكترونية إلى %email% تحتوي على رابط يجب إتباعه لتفعيل حسابك الشخصي.',
    'registration.confirmed' => 'تهانينا %username%، لقد تم تفعيل حسابك.',
    'registration.back' => 'عودة إلى الصفحة الرئيسية',
    'registration.submit' => 'تسجيل',
    'registration.flash.user_created' => 'تم إنشاء حسابك بنجاح',
    'registration.email.subject' => '%username%! مرحبا',
    'registration.email.message' => 'مرحبا %username%!


 لتفعيل حسابك يرجى إتباع الرابط التالي %confirmationUrl%

شكرا،
فريق العمل.
',
    'resetting.password_already_requested' => 'لقد تم طلب كلمة المرور لهذا المستخدم خلال ال ٢٤ ساعة الماضية',
    'resetting.check_email' => 'لقد تم إرسال رسالة إلكترونية إلى %email%  يحتوي على رابط يجب إتباعه لإعادة تعيين كلمة المرور الخاصة بك.',
    'resetting.request.invalid_username' => 'إسم المستخدم او  البريد الالكتروني "%username%" غير موجود',
    'resetting.request.username' => 'إسم المستخدم او البريد الالكتروني',
    'resetting.request.submit' => 'إعادة ضبط كلمة المرور',
    'resetting.reset.submit' => 'تغيير كلمة المرور',
    'resetting.flash.success' => 'تم إعادة ضبط كلمة المرور بنجاح',
    'resetting.email.subject' => 'إعادة ضبط كلمة المرور',
    'resetting.email.message' => 'مرحبا %username%!

لإعادة ضبط كلمة المرور يرجى إتباع الرابط التالي %confirmationUrl%

شكرا،
فريق العمل.
',
    'layout.logout' => 'خروج',
    'layout.login' => 'دخول',
    'layout.register' => 'تسجيل',
    'layout.logged_in_as' => 'تم الدخول بإسم %username%',
    'form.group_name' => 'إسم المجموعة',
    'form.username' => 'إسم المستخدم',
    'form.email' => 'البريد الإلكتروني',
    'form.current_password' => 'كلمة المرور الحالية',
    'form.password' => 'كلمة المرور',
    'form.password_confirmation' => 'تأكيد',
    'form.new_password' => 'كلمة المرور الجديدة',
    'form.new_password_confirmation' => 'تأكيد كلمة المرور',
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
