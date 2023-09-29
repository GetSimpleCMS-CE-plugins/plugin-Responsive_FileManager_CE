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

    'Select' => 'Sélectionner',
    'Deselect_All' => 'Deselect All',
    'Select_All' => 'Select All',
    'Erase' => 'Effacer',
    'Open' => 'Ouvrir',
    'Confirm_del' => 'Êtes-vous sûr de vouloir effacer ce fichier ?',
    'All' => 'Tous',
    'Files' => 'Fichiers',
    'Images' => 'Images',
    'Archives' => 'Archives',
    'Error_Upload' => 'Votre fichier dépasse la taille maximum autorisée.',
    'Error_extension' => 'Extension de fichier non autorisée.',
    'Upload_file' => 'Envoyer un fichier',
    'Filters' => 'Filtrer',
    'Videos' => 'Vidéos',
    'Music' => 'Musique',
    'New_Folder' => 'Nouveau dossier',
    'Folder_Created' => 'Dossier correctement créé',
    'Existing_Folder' => 'Dossier existant',
    'Confirm_Folder_del' => 'Êtes-vous sûr de vouloir supprimer le dossier ainsi que tous ses éléments ?',
    'Return_Files_List' => 'Revenir à la liste des fichiers',
    'Preview' => 'Aperçu',
    'Download' => 'Télécharger',
    'Insert_Folder_Name' => 'Insérer le nom du dossier :',
    'Root' => 'Racine',
    'Rename' => 'Renommer',
    'Back' => 'Retour',
    'View' => 'Vue',
    'View_list' => 'Vue par liste',
    'View_columns_list' => 'Vue par listes de colonne',
    'View_boxes' => 'Vue par icônes',
    'Toolbar' => 'Barre d\'outils',
    'Actions' => 'Actions',
    'Rename_existing_file' => 'Ce fichier existe déjà',
    'Rename_existing_folder' => 'Ce dossier existe déjà',
    'Empty_name' => 'Le nom est vide',
    'Text_filter' => 'Texte de filtrage',
    'Swipe_help' => 'Glissez le nom du fichier/dossier pour afficher les options',
    'Upload_base' => 'Téléchargement classique',
    'Upload_base_help' => 'Glisser-Déposer des fichiers (navigateurs récents) ou cliquer sur le bontons en haut pour ajouter des fichiers. Cliquer sur "Envoyer les fichiers". Lorsque le chargement est complet, cliquer sur "Revenir à la liste des fichiers".',
    'Upload_add_files' => 'Ajouter des fichiers',
    'Upload_start' => 'Envoyer les fichiers',
    'Upload_error_messages' => [
        1 => 'La taille du fichier dépasse la limite fixée par le paramètre upload_max_filesize dans php.ini',
        2 => 'La taille du fichier dépasse la limite fixée par le paramètre MAX_FILE_SIZE du formulaire',
        3 => 'Le fichier n\'a pas été correctement téléchargé',
        4 => 'Aucun fichier n\'a pas été téléchargé',
        6 => 'Il manque le répertoire temporaire',
        7 => 'Impossible d\'écrire le fichier sur le disque',
        8 => 'Une extension PHP a bloqué le téléchargement',
        'post_max_size' => 'La taille du fichier dépasse la limite fixée par le paramètre post_max_size dans php.ini',
        'max_file_size' => 'La taille du fichier est trop importante',
        'min_file_size' => 'La taille du fichier est trop faible',
        'accept_file_types' => 'Ce type de fichier n\'est pas accepté',
        'max_number_of_files' => 'Le nombre de fichiers à télécharger est trop important',
        'max_width' => 'La largeur de l\'image est supérieure à la limite maximum autorisée',
        'min_width' => 'La largeur de l\'image est inférieure à la limite minimum autorisée',
        'max_height' => 'La hauteur de l\'image est supérieure à la limite maximum autorisée',
        'min_height' => 'La hauteur de l\'image est inférieure à la limite minimum autorisée',
        'abort' => 'Téléchargement des fichiers annulé',
        'image_resize' => 'Impossible de redimensionner l\'image'
    ],
    'Upload_url' => 'Depuis une URL',
    'Type_dir' => 'dir',
    'Type' => 'Type',
    'Dimension' => 'Dimension',
    'Size' => 'Taille',
    'Date' => 'Date',
    'Filename' => 'Nom',
    'Operations' => 'Opérations',
    'Date_type' => 'd/m/Y',
    'OK' => 'OK',
    'Cancel' => 'Annuler',
    'Sorting' => 'Trier',
    'Show_url' => 'Afficher l\'URL',
    'Extract' => 'Extraire ici',
    'File_info' => 'Information',
    'Edit_image' => 'Editer l\'image',
    'Duplicate' => 'Dupliquer',
    'Folders' => 'Dossiers',
    'Copy' => 'Copier',
    'Cut' => 'Couper',
    'Paste' => 'Coller',
    'CB' => 'PP', // Presse-papiers
    'Paste_Here' => 'Coller dans ce dossier',
    'Paste_Confirm' => 'Êtes-vous sûr de vouloir coller dans ce répertoire ? Cette action remplacera les fichiers/dossiers déjà existants.',
    'Paste_Failed' => 'Impossible de coller les fichier(s)',
    'Clear_Clipboard' => 'Vider le presse-papiers',
    'Clear_Clipboard_Confirm' => 'Êtes-vous sûr de vouloir vider le presse-papiers ?',
    'Files_ON_Clipboard' => 'Le presse-papiers contient des fichiers.',
    'Copy_Cut_Size_Limit' => 'Les fichiers/dossiers sélectionnés sont trop gros pour %1$s. Limite: %2$d MB/opération', // %1$s = cut or copy, %2$d = max size
    'Copy_Cut_Count_Limit' => 'Vous avez sélectionné trop de fichiers/dossier pour %1$s. Limite: %2$d fichiers/opération', // %1$s = cut or copy, %2$d = max count
    'Copy_Cut_Not_Allowed' => 'Vous n\'êtes pas autorisé à %1$s des %2$s.', // %12$s = cut or copy, %2$s = files or folders
    'Image_Editor_No_Save' => 'Impossible d\'enregistrer l\'image',
    'Image_Editor_Exit' => "Sortie",
    'Image_Editor_Save' => "Sauvegarder",
    'Zip_No_Extract' => 'Extraction impossible. Le fichier est peut-être corrompu.',
    'Zip_Invalid' => 'Cette extension n\'est pas supportée. Extensions valides: zip, gz, tar.',
    'Dir_No_Write' => 'Le répertoire que vous avez sélectionné n\'est pas accessible en écriture.',
    'Function_Disabled' => 'La fonction %s a été désactivée sur le serveur.', // %s = cut or copy
    'File_Permission' => 'Permission du fichier',
    'File_Permission_Not_Allowed' => 'Le changement de permission %s n\'est pas autorisé.', // %s = files or folders
    'File_Permission_Recursive' => 'Appliquez recursivement ?',
    'File_Permission_Wrong_Mode' => 'Les permissions saisies sont incorrectes.',
    'User' => 'Utilisateur',
    'Group' => 'Groupe',
    'Yes' => 'Oui',
    'No' => 'Non',
    'Lang_Not_Found' => 'Le fichier de langue est introuvable.',
    'Lang_Change' => 'Changer la langue',
    'File_Not_Found' => 'Le fichier est introuvable.',
    'File_Open_Edit_Not_Allowed' => 'Vous ne disposez pas des autorisations sur le fichier %s.', // %s = open or edit
    'Edit' => 'Editer',
    'Edit_File' => 'Editer le contenu du fichier',
    'File_Save_OK' => 'Fichier enregistré avec succès.',
    'File_Save_Error' => 'Une erreur s\'est produite lors de l\'enregistrement du fichier.',
    'New_File' => 'Nouveau fichier',
    'No_Extension' => 'Vous devez ajouter une extension au fichier.',
    'Valid_Extensions' => 'Extensions valides: %s', // %s = txt,log etc.
    'Upload_message' => 'Glissez les fichiers ici pour les ajouter',

    'SERVER ERROR' => "ERREUR SERVEUR",
    'forbidden' => "Interdit",
    'wrong path' => "Chemin invalide",
    'wrong name' => "Nom invalide",
    'wrong extension' => "Extension invalide",
    'wrong option' => "Option invalide",
    'wrong data' => "Données invalides",
    'wrong action' => "Action invalide",
    'wrong sub-action' => "Sous-action invalide",
    'no action passed' => "Aucune action demandée",
    'no path' => "Chemin manquant",
    'no file' => "Fichier manquant",
    'view type number missing' => "Type de vue manquant",
    'Not enough Memory' => "Mémoire insuffisante",
    'max_size_reached' => "Votre répertoire d'image a déjà atteind sa taille maximale de %d mo.", //%d = max overall size
    'B' => "o",
    'KB' => "Ko",
    'MB' => "Mo",
    'GB' => "Go",
    'TB' => "To",
    'total size' => "Taille totale",
];
