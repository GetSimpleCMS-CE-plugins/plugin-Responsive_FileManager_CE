<?php

$i18n = [
	// GS settings page impementations
	'FM_Main_Title' => 'Responsive FileManager CE',
	'FM_Menu_Title' => 'RFM-CE',
	'FM_PLUGIN_DESC' => 'RFM-CE for GetSimple CE. Replaces the standard file browser with Responsive FileManager Plugin. Plugin can upload files to the server, create thumbnails, photo editing tools and much more.',
	'FILE_UPLOAD' => 'File <b><i>config/config.php</i></b> modified successfully. <b>Upload_dir</b> parameter set according to your site\'s URL:<br />',
	'FM_INTEGR_SECC' => 'RFM-CE integration was successful. Now you can use it to CKEditor window.',
	'FM_INTEGR_CANC' => 'RFM-CE integration canceled. From now will be used GS standard file browser.',
	'FM_THUMB_ERR' => 'Unable to create a CKEditor plugin Thumb. Check CKEditor directory structure and access rights.',
	'FM_LANG_PARAM' => 'Your settings have been saved successfully.',
	'FM_SET_EXPAND' => 'Expand',
	'FM_SET_COLAPS' => 'Collapse',
	'FM_SET_INTEGR' => 'RFM-CE, ckEditor integration',
	'FM_SET_INTEGR_SECC' => 'RFM-CE integrated',
	'FM_SET_NM' => 'RFM-CE News Manager integration',
	'FM_SET_INTEGR_SECC_NM' => 'RFM-CE integrated in News Manager',
	'FM_SET_NOINTEGR_NM' => 'RFM-CE not integrated in News Manager',
	'FM_INTEGR_SECC_NM' => 'RFM-CE integration to the News Manager was successful. Now you can use it to News Manager window.',
	'FM_INTEGR_CANC_NM' => 'RFM-CE integration to the News Manager canceled. From now will be used GS standard file browser.',
	'FM_THUMB_ERR_NM' => 'Unable to change News Manager plugin. Check News Manager directory structure and access rights.',
	'FM_BTN_RESTORE' => 'Recall',
	'FM_BTN_SAVE' => 'Save',
	'FM_BTN_INTEGR' => 'Integrate',
	'FM_SET_WIDTH' => 'RFM-CE window width (px or %)',
	'FM_SET_HEIGHT' => 'RFM-CE window height (px or %)',
	'FM_SET_NOINTEGR' => 'RFM-CE not integrated',
	'OPEN_FM' => 'Open Filemanager',
	'FM_SET_TOOLBAR' => 'Set CKEditor toolbar to <b><i>advanced + Thumb</i></b> button',
	'FM_SET_JQUERY' => 'Loaded Jquery on frontend pages (required for PrettyPhoto and FancyBox)',
	'FM_SET_UPLOAD_LIMIT' => 'File maximum upload size (in Megabytes)',
	'FM_SET_NOJS' => 'Do not use Javascript on my site frontend pages',
	'FM_SET_LIGHTCSS' => 'Add LightBoxCSS image gallery stylesheet on frontend pages',
	'CKEDIT_THUMB_INS' => 'Insert thumbnail',
	'FM_SET_THUMB' => 'Thumbnails creation settings',
	'FM_THUMB_PREFIX' => 'Name to prepend on filename when creating a thumbnail',
	'FM_THUMB_SUFFIX' => 'Name to append on filename when creating a thumbnail',
	'FM_THUMB_SUFFIX_DESC' => 'Value should be between apostrophes. Multiple parameters must be separated by commas. If the prefix or suffix will not be used enter \'\' (two apostrophes). For example:<br>\'thumb.\', \'\'&nbsp;&nbsp;&nbsp;&nbsp;(for prepend) <br>\'_thumb\', \'.thumbnail\'&nbsp;&nbsp;&nbsp;&nbsp;(for append)',
	'FM_THUMB_WIDTH' => 'Thumbnail width (in px)',
	'FM_THUMB_HEIGHT' => 'Thumbnail height (in px)',
	'FM_THUMB_WIDTH_DESC' => 'Enter a numeric value only. Multiple parameters must be separated by commas. For example:<br>250, \'\'<br>200, 300',
	'FM_THUMB_OPTION' => 'Thumbnail creation options (for resize and crop)',
	'FM_EXAMPLE' => 'Example',
	'FM_EXMPL1' => 'Will create one thumbnail file with this settings: Width - 250px; Height - auto; Aspect ratio - by original image (no crop). The file name will look like this: <b>thumb.myphoto.jpg</b>',
	'FM_EXMPL2' => 'Will create two thumbnail files for the same image with this settings -> For the first file: Width - 250px; Height - 200px; Aspect ratio - crop (resize with crop); For the second file: Width - auto; Height - 300px; Aspect ratio - by image height (resize only). The file names will look like this: <b>myphoto_thumb.jpg</b> (for first file) and <b>myphoto.thumbnail.jpg</b> (for second file)',
	'FM_THUMB_SET_ERR' => 'Do not fill out all the required fields. Thumbnail setting changes are canceled.',
	'FM_THUMB_DEFAULT' => 'Reset to default',
	'FM_THUMB_DEFA_DESC' => 'Use Default Settings: Width - 122px; Height - 91px; Aspect ratio - crop',
	'FM_THUMB_FAIL' => 'Thumbnails directory creation failed. Check your server or GS folders structure permissions settings.<br>You can manually copy this folder from catalog: <b><i>plugins/responsivefilemanager/copy/thumb</i></b> to the this path: <b><i>admin/template/js/ckeditor/plugins</i></b>.',
	'FM_CKED_TOOL' => 'Enter the desired CKEditor Toolbars elements between brackets, eg. [\'Bold\', \'Italic\', \'Underline\'],\'/\',[\'Styles\',\'Format\']',
	'FM_USER_ADMIN' => 'Custom CKEditor Toolbars elements for user with Admin permissions',
	'FM_USER_PLAIN' => 'Custom CKEditor Toolbars elements for Plain user',
	'FM_EDITOR_TOOL' => 'Custom CKEditor Toolbars elements',
	'FM_EDITOR_OPT' => 'CKEditor <b>extraPlugins</b> activation',
	'FM_CKED_OPT' => 'Enter the desired CKEditor extraPlugins names by separating them with commas, eg. codesnippet,youtube',
	'FM_USE_HLP' => 'You can use the integration of RFM-CE in your projects (plugins or themes). Below are 2 ways to call RFM. Copy chosen way code to the right place in your project.',
	'FM_USE_HLP1' => 'In the RFM-CE URL Address you can use the following GET variables and their values:<br><b>type:</b> the type of filemanager (1:images files 2:all files 3:video files)<br><b>field_id:</b> ID value of the input field to which the selection is forwarded (&lt;input type="text" id="your_id" /&gt;)<br><b>fldr:</b> the folder where i enter (the root folder remains the same) default=""<br><b>sort_by:</b> the element to sorting (values: name,size,extension,date) default=""<br><b>descending:</b> descending or ascending (values=1 or 0) default="0"<br><b>lang:</b> the language code (ex: &lang=fr_FR) default="en_EN"',
	'FM_HLP_1' => 'RFM-CE in Pop-up FancyBox window',
	'FM_HLP_2' => 'RFM-CE in IFRAME section',
	'FM_HLP_PVZ1' => '&lt;a href="&lt;?php echo $SITEURL; ?&gt;plugins/responsivefilemanager/dialog.php?type=0&lang=en&field_id=fieldID&akey=bce94f94426497ba5e669a705c186f12" class="rfm-button" type="button"&gt;Open RFM&lt;/a&gt;',
	'FM_SET_CF' => 'RFM-CE Custom Fields integration',
	'FM_SET_INTEGR_SECC_CF' => 'RFM-CE integrated in Custom Fields',
	'FM_SET_NOINTEGR_CF' => 'RFM-CE not integrated in Custom Fields',
	'FM_INTEGR_SECC_CF' => 'RFM-CE integration to the Custom Fields was successful. Now you can use it with Custom Fields.',
	'FM_INTEGR_CANC_CF' => 'RFM-CE integration to the Custom Fields canceled. From now will be used GS standard file browser.',
	'FM_SET_HIDDEN' => 'Hide RFM Settings Area from Plain Users (not ADMIN users).',
];

return [

    'Select' => 'Seleccionar',
    'Deselect_All' => 'Deseleccionar todos',
    'Select_All' => 'Seleccionar todos',
    'Erase' => 'Eliminar',
    'Open' => 'Abrir',
    'Confirm_del' => '¿Seguro que deseas eliminar este archivo?',
    'All' => 'Todos',
    'Files' => 'Archivos',
    'Images' => 'Imágenes',
    'Archives' => 'Ficheros',
    'Error_Upload' => 'El archivo que intenta subir excede el máximo permitido.',
    'Error_extension' => 'La extensión del archivo no está permitida.',
    'Upload_file' => 'Subir',
    'Filters' => 'Filtros',
    'Videos' => 'Vídeos',
    'Music' => 'Música',
    'New_Folder' => 'Nueva carpeta',
    'Folder_Created' => 'La carpeta ha sido creada correctamente.',
    'Existing_Folder' => 'Carpeta existente',
    'Confirm_Folder_del' => '¿Seguro que deseas eliminar la carpeta y todos los elementos que contiene?',
    'Return_Files_List' => 'Regresar a la lista de archivos',
    'Preview' => 'Vista previa',
    'Download' => 'Descargar',
    'Insert_Folder_Name' => 'Nombre de la carpeta:',
    'Root' => 'raíz',
    'Rename' => 'Renombrar',
    'Back' => 'Atrás',
    'View' => 'Vista',
    'View_list' => 'Vista de lista',
    'View_columns_list' => 'Vista de columnas',
    'View_boxes' => 'Vista de miniaturas',
    'Toolbar' => 'Barra de herramientas',
    'Actions' => 'Acciones',
    'Rename_existing_file' => 'El archivo ya existe',
    'Rename_existing_folder' => 'La carpeta ya existe',
    'Empty_name' => 'El nombre se encuentra vacío',
    'Text_filter' => 'filtro de texto',
    'Swipe_help' => 'Deslize el nombre del archivo/carpeta para mostrar las opciones',
    'Upload_base' => 'Subida de archivos SIMPLE',
    'Upload_base_help' => "Arrastrar y soltar archivos(Drag & Drop Navegadores modernos) o haz click en el botón superior para Añadir los archivos y click en Empezar subida. Cuando la subida se haya completado, haz click en el botón 'Regresar a la lista de archivos'",
    'Upload_add_files' => 'Añadir archivos',
    'Upload_start' => 'Empezar subida',
    'Upload_error_messages' => [
        1 => 'El archivo subido excede la directiva upload_max_filesize en php.ini',
        2 => 'El archivo subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML',
        3 => 'El archivo subido solo fue subido parcialmente',
        4 => 'No se ha subido ninún archivo',
        6 => 'No se encuentra la carpeta temporal',
        7 => 'Falló la escritura del archivo en el disco',
        8 => 'Una extensión de PHP detuvo la subida del archivo',
        'post_max_size' => 'El archivo subido excede la directiva upload_max_filesize en php.ini',
        'max_file_size' => 'El archivo es demasiado grande',
        'min_file_size' => 'El archivo es demasiado pequeño',
        'accept_file_types' => 'Tipo de archivo (Filetype) no permitido',
        'max_number_of_files' => 'Número máximo de archivos excedido',
        'max_width' => 'La imagen excede el ancho máximo',
        'min_width' => 'La imagen requiere un ancho mínimo',
        'max_height' => 'La imagen excede el alto máximo',
        'min_height' => 'La imagen requiere un alto mínimo',
        'abort' => 'Subida de archivo cancelada',
        'image_resize' => 'Error al redimensionar la imagen'
    ],
    'Upload_url' => 'Desde url',
    'Type_dir' => 'Carpeta',
    'Type' => 'Tipo',
    'Dimension' => 'Dimensiones',
    'Size' => 'Peso',
    'Date' => 'Fecha',
    'Filename' => 'Nombre',
    'Operations' => 'Operaciones',
    'Date_type' => 'y-m-d',
    'OK' => 'Aceptar',
    'Cancel' => 'Cancelar',
    'Sorting' => 'Ordenar',
    'Show_url' => 'Mostrar URL',
    'Extract' => 'Extraer aquí',
    'File_info' => 'Información',
    'Edit_image' => 'Editar imagen',
    'Duplicate' => 'Duplicar',
    'Folders' => 'Carpetas',
    'Copy' => 'Copiar',
    'Cut' => 'Cortar',
    'Paste' => 'Pegar',
    'CB' => 'Portapapeles', // clipboard
    'Paste_Here' => 'Pegar en esta carpeta',
    'Paste_Confirm' => '¿Está seguro de pegar el contenido en esta carpeta? Esta acción sobreescribirá los archivos y carpetas existentes.',
    'Paste_Failed' => 'Error al pegar los archivos',
    'Clear_Clipboard' => 'Limpiar el portapapeles',
    'Clear_Clipboard_Confirm' => '¿Está seguro que desea limpiar el portapapeles?',
    'Files_ON_Clipboard' => 'Existen archivos en el portapapeles',
    'Copy_Cut_Size_Limit' => 'Los archivos/carpetas seleccionados son demasiado grandes para %s. Límite: %d MB/operación', // %s = cut or copy
    'Copy_Cut_Count_Limit' => 'Ha seleccionado demasiados archivos/carpetas para %s. Límite: %d archivos/operación', // %s = cut or copy
    'Copy_Cut_Not_Allowed' => 'No está permitido de %s archivos.', // %s(1) = cut or copy, %s(2) = files or folders
    'Image_Editor_No_Save' => 'No fue posible guardar la imagen',
    'Image_Editor_Exit' => "Salida",
    'Image_Editor_Save' => "Salvar",
    'Zip_No_Extract' => 'No fue posible extraer los archivos. Es posible que el archivo esté corrupto.',
    'Zip_Invalid' => 'Esta extensión no es soportada. Extensiones válidas: zip, gz, tar.',
    'Dir_No_Write' => 'El directorio que ha seleccionado no tiene permisos de escritura.',
    'Function_Disabled' => 'La función %s ha sido deshabilitada en el servidor.', // %s = cut or copy
    'File_Permission' => 'Permisos de archivos',
    'File_Permission_Not_Allowed' => 'Cambiar %s permisos no está permitido.', // %s = files or folders
    'File_Permission_Recursive' => 'Aplicar recursivamente?',
    'File_Permission_Wrong_Mode' => "El modo de permiso suministrado es incorrecto.",
    'User' => 'Usuario',
    'Group' => 'Grupo',
    'Yes' => 'Si',
    'No' => 'No',
    'Lang_Not_Found' => 'No se ha podido encontrar el idioma.',
    'Lang_Change' => 'Cambiar idioma',
    'File_Not_Found' => 'No se puede encontrar el archivo.',
    'File_Open_Edit_Not_Allowed' => 'No estás autorizado a %s este archivo.', // %s = open or edit
    'Edit' => 'Editar',
    'Edit_File' => "Editar contenido del archivo",
    'File_Save_OK' => "Archivo guardado satisfactoriamente.",
    'File_Save_Error' => "Ocurrió un error guardando el archivo.",
    'New_File' => 'Nuevo archivo',
    'No_Extension' => 'Debes añadir una extensión al archivo.',
    'Valid_Extensions' => 'Extensiones válidas: %s', // %s = txt,log etc.
    'Upload_message' => "Arrastra archivos aquí para subir",

    'SERVER ERROR' => "ERROR DEL SERVIDOR",
    'forbidden' => "Prohibido",
    'wrong path' => "Ruta incorrecta",
    'wrong name' => "Nombre incorrecto",
    'wrong extension' => "Extensión incorrecta",
    'wrong option' => "Opción incorrecta",
    'wrong data' => "Datos incorrectos",
    'wrong action' => "Acción incorrecta",
    'wrong sub-action' => "Sub-acción incorrecta",
    'no action passed' => "No se ha recibido una acción",
    'no path' => "Sin ruta",
    'no file' => "Sin archivo",
    'view type number missing' => "Falta el número de tipo de vista",
    'Not enough Memory' => "No hay memória suficiente",
    'max_size_reached' => "La carpeta de imágenes ha excedido el tamaño máximo de %d MB.", //%d = max overall size
    'B' => "B",
    'KB' => "KB",
    'MB' => "MB",
    'GB' => "GB",
    'TB' => "TB",
    'total size' => "Tamaño total",
];
