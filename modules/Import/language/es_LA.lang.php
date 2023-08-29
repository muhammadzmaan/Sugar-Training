<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Archivo de Importación Leído con Éxito',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'El registro importado está participando en un proceso y no se puede editar porque algunos campos están bloqueados para la edición por el proceso.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'se encontró un número de errores.  Vea la solapa de errores para las filas que no se importaron debido a un error',
    'LBL_UPDATE_SUCCESSFULLY' => 'Registros actualizados con éxito',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Registros creados con éxito',
    'LBL_STEP_4_TITLE' => 'Paso {0}: Importar Archivo',
    'LBL_STEP_5_TITLE' => 'Paso {0}: Ver Resultados de Importación',
    'LBL_CUSTOM_ENCLOSURE' => 'Archivos Calificados Por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de Importación publicado con el mismo nombre.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de Importación con el mismo nombre.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No se ha configurado la Importación para este tipo de módulo',
    'LBL_IMPORT_TYPE' => '¿Qué le gustaría hacer con los datos importados?',
    'LBL_IDM_IMPORT_TYPE_CREATE' => 'Create New Records',
    'LBL_IDM_IMPORT_TYPE_UPDATE' => 'Update Existing Records',
    'LBL_IMPORT_BUTTON' => 'Crear únicamente Registros nuevos',
    'LBL_UPDATE_BUTTON' => 'Crear nuevos registros y actualizar los registros existentes',
    'LBL_CREATE_BUTTON_HELP' => 'Utilice esta opción para crear nuevos registros. Nota: Las filas en el archivo de importación que contienen valores que coinciden con los IDs de los registros existentes no se importará si los valores se asignan en el campo de ID.',
    'LBL_UPDATE_BUTTON_HELP' => 'Utilice esta opción para actualizar los registros existentes. El dato en el archivo de importación será comparado con los registros existentes en base al ID del registro en el archivo de importación.',
    'LBL_NO_ID' => 'ID Requerido',
    'LBL_PRE_CHECK_SKIPPED' => 'Comprobaciones previas saltadas',
    'LBL_NOLOCALE_NEEDED' => 'No es necesaria ninguna conversión de localización',
    'LBL_FIELD_NAME' => 'Nombre de Campo',
    'LBL_VALUE' => 'Valor',
    'LBL_ROW_NUMBER' => 'Número de Fila',
    'LBL_NONE' => 'Ninguno',
    'LBL_REQUIRED_VALUE' => 'Falta un valor requerido',
    'LBL_ERROR_SYNC_USERS' => 'Valor no válido para sincronizar con el Cliente de Correo: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID ya existente en esta tabla',
    'LBL_SYNC_KEY_EXISTS_ALREADY' => 'SYNC_KEY ya existe en esta tabla',
    'LBL_ASSIGNED_USER' => 'Si el usuario no existe, utilizar el usuario actual',
    'LBL_SHOW_HIDDEN' => 'Mostrar campos que no son normalmente importables',
    'LBL_UPDATE_RECORDS' => 'Actualizar registros actuales en lugar de importarlos (No se puede Deshacer)',
    'LBL_TEST'=> 'Probar Importación (sin guardar ni cambiar datos)',
    'LBL_TRUNCATE_TABLE' => 'Tabla vacía antes de importación (borrar todos los registros)',
    'LBL_RELATED_ACCOUNTS' => 'No crear cuentas relacionadas',
    'LBL_NO_DATECHECK' => 'Saltar comprobación de fecha (más rápido pero fallará si la fecha es incorrecta)',
    'LBL_NO_WORKFLOW' => 'No ejecutar workflows durante la importación',
    'LBL_NO_EMAILS' => 'No envía notificaciones por correo electrónico durante esta importación',
    'LBL_NO_PRECHECK' => 'Modo de Formato Nativo',
    'LBL_STRICT_CHECKS' => 'Utilizar conjunto de reglas estricto (Comprobar también direcciones de correo electrónico y números de teléfono)',
    'LBL_ERROR_SELECTING_RECORD' => 'Error al seleccionar registro:',
    'LBL_ERROR_DELETING_RECORD' => 'Error al eliminar registro:',
    'LBL_NOT_SET_UP' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_ARE_YOU_SURE' => '¿Está seguro? Esto borrará todos los datos del módulo.',
    'LBL_NO_RECORD' => 'No existe ningún registro con este ID para actualizar',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_DEBUG_MODE' => 'Habilitar modo de depuración',
    'LBL_ERROR_INVALID_ID' => 'El ID proporcionado es demasiado largo para el campo (la longitud máxima es de 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de teléfono no válido',
    'LBL_ERROR_INVALID_NAME' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'Cadena demasiado larga para el campo',
    'LBL_ERROR_INVALID_DATETIME' => 'Fecha y hora no válida',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Fecha y hora no válida',
    'LBL_ERROR_INVALID_INT' => 'Valor entero no válido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico no válido',
    'LBL_ERROR_INVALID_TIME' => 'Hora no válida',
    'LBL_ERROR_INVALID_EMAIL'=>'Dirección de correo electrónico no válida',
    'LBL_ERROR_INVALID_BOOL'=>'Valor no válido (debería ser 1 o 0)',
    'LBL_ERROR_INVALID_DATE'=>'Cadena de fecha inválida',
    'LBL_ERROR_INVALID_USER'=>'Nombre o ID de usuario no válido',
    'LBL_ERROR_INVALID_TEAM' => 'Nombre o ID de equipo no válido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nombre o ID de cuenta no válido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional no válido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moneda no válido',
    'LBL_ERROR_INVALID_FLOAT' => 'Número en coma flotante no válido',
    'LBL_ERROR_NOT_IN_ENUM' => 'Valor no perteneciente a la lista desplegable. Los valores permitidos son:',
    'LBL_ERROR_ENUM_EMPTY' => 'El valor no está en la lista desplegable. La lista desplegable está vacía',
    'LBL_NOT_MULTIENUM' => 'No es una Enumeración Múltiple (MultiEnum)',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'La importación no se ha configurado para este tipo de módulo',
    'LBL_IMPORT_MODULE_NO_USERS' => 'AVISO: No ha definido usuarios en su sistema.  Si realiza la importación sin antes añadir usuarios, todos los registros pertenecerán al Administrador.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'No ha sido posible realizar la publicación. Ya hay otro mapa de Importación publicado con el mismo nombre.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'No ha sido posible quitar la publicación de un mapa cuyo propietario es otro usuario. Usted posee un mapa de Importación con el mismo nombre.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'El directorio',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' no existe o no puede editarse',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'El archivo no pudo subirse con éxito. Puede que la opción &#39;upload_max_filesize&#39; de su archivo php.ini esté establecida a un valor demasiado pequeño',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'El archivo es demasiado grande. Máx:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Cambie $sugar_config[&#39;upload_maxsize&#39;] en config.php',
    'LBL_MODULE_NAME' => 'Importar',
    'LBL_MODULE_NAME_SINGULAR' => 'Importar',
    'LBL_TRY_AGAIN' => 'Pruebe de nuevo',
    'LBL_START_OVER' => 'Comenzar de nuevo',
    'LBL_ERROR' => 'Error:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'El archivo de importación contiene {0} filas. El número óptimo de filas es {1}. Más filas puede retardar el proceso de importación. Haga clic en Aceptar para continuar importando. Haga clic en Cancelar para revisar y volver a cargar el archivo de importación.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'No puede importar un usuario administrador del sistema',
    'ERR_REPORT_LOOP' => 'El sistema ha detectado dependencias cíclicas en la jerarquía de informadores. Un usuario no puede responder a si mismo, y ninguno de sus superiores pueden responder a él.',
    'ERR_MULTIPLE' => 'Se han definido múltiples columnas con el mismo nombre de campo.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Faltan campos requeridos:',
    'ERR_MISSING_MAP_NAME' => 'Falta el nombre del mapeo personalizado',
    'ERR_USERS_IMPORT_DISABLED_TO_IDM_MODE' => 'La importación de usuarios está deshabilitada para el modo IDM.',
    'ERR_SELECT_FULL_NAME' => 'No puede seleccionar Nombre Completo cuando Nombre y Apellido están seleccionados.',
    'ERR_SELECT_FILE' => 'Seleccione el archivo a subir.',
    'LBL_SELECT_FILE' => 'Seleccione un archivo:',
    'LBL_CUSTOM' => 'Personalizado',
    'LBL_CUSTOM_CSV' => 'Archivo personalizado delimitado por comas',
    'LBL_CSV' => 'Un archivo en mi computadora',
    'LBL_EXTERNAL_SOURCE' => 'Una aplicación o servicio externo',
    'LBL_TAB' => 'Archivo delimitado por tabulaciones',
    'LBL_CUSTOM_DELIMITED' => 'Archivo con delimitador personalizado',
    'LBL_CUSTOM_DELIMITER' => 'Campos delimitados por:',
    'LBL_FILE_OPTIONS' => 'Opciones de archivo',
    'LBL_CUSTOM_TAB' => 'Archivo personalizado delimitado por tabuladores',
    'LBL_DONT_MAP' => '-- No asocie este campo --',
    'LBL_STEP_MODULE' => '¿En que módulo desea importar los datos?',
    'LBL_STEP_1_TITLE' => 'Paso 1: Seleccione el Origen de los Datos',
    'LBL_CONFIRM_TITLE' => 'Paso {0}: Confirmar las propiedades de importación del archivo',
    'LBL_CONFIRM_EXT_TITLE' => 'Paso {0}: Confirma propiedades de fuente externa',
    'LBL_WHAT_IS' => 'Mis datos están en:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Las asignaciones personalizadas para Microsoft Outlook se basan en el archivo de importación delimitado por comas (.csv). Si el archivo de importación está delimitado por tabuladores, las asignaciones no se aplicará como se esperaba.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Para utilizar la configuración de importación guardada, seleccione desde abajo:',
    'LBL_PUBLISH' => 'Publicar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_PUBLISHED_SOURCES' => 'Para utilizar la configuración de importación preestablecida, seleccione desde abajo:',
    'LBL_UNPUBLISH' => 'Quitar Publicación',
    'LBL_NEXT' => 'Siguiente >',
    'LBL_BACK' => '< Anterior',
    'LBL_STEP_2_TITLE' => 'Paso {0}: Cargar de Archivo de Importación',
    'LBL_HAS_HEADER' => 'Fila de encabezado:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notas:',
    'LBL_NOW_CHOOSE' => 'Ahora elija el archivo a importar:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 y 2000 pueden exportar datos en el formato <b>Valores Separados por Coma (CSV)</b>, que puede ser utilizado para importar datos en el sistema. Para exportar sus datos desde Outlook, siga los siguientes pasos:',
    'LBL_OUTLOOK_NUM_1' => 'Inicie <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Seleccione el menú <b>Archivo</b>, y entonces la opción de menú <b>Importar y Exportar ...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Seleccione <b>Exportar a un archivo</b> y haga clic en Siguiente',
    'LBL_OUTLOOK_NUM_4' => 'Seleccione <b>Valores Separados por Coma (Windows)</b> y haga clic en <b>Siguiente</b>.<br>  Nota: Es posible que se le solicite la instalación del componente de exportación',
    'LBL_OUTLOOK_NUM_5' => 'Seleccione la carpeta <b>Contactos</b> y haga clic en <b>Siguiente</b>. Puede seleccionar distintas carpetas de contactos si sus contactos están almacenados en distintas carpetas',
    'LBL_OUTLOOK_NUM_6' => 'Escoja un nombre de archivo y haga clic en <b>Siguiente</b>',
    'LBL_OUTLOOK_NUM_7' => 'Haga clic en <b>Finalizar</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com puede exportar datos en el formato <b>Valores Separados por Coma</b>, que puede ser utilizado para importar datos en el sistema. Para exportar sus datos desde Salesforce.com, siga los siguientes pasos:',
    'LBL_SF_NUM_1' => 'Abra su navegador, vaya a http://www.salesforce.com, e inicie su sesión con su dirección de correo y contraseña',
    'LBL_SF_NUM_2' => 'Haga clic en la pestaña <b>Informes</b> del menú superior',
    'LBL_SF_NUM_3' => '<b>Para exportar cuentas:</b> Haga clic en el enlace <b>Cuentas Activas</b><br><b>Para exportar contactos:</b> Haga clic en el enlace <b>Mailing List</b>',
    'LBL_SF_NUM_4' => 'En <b>Paso 1: Seleccione su tipo de informe</b>, seleccione <b>Informe Tabular</b> y haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_5' => 'En <b>Paso 2: Seleccione las columnas del informe</b>, seleccione las columnas que desee exportar y haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_6' => 'En <b>Paso 3: Seleccione la información a resumir</b>, simplemente haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_7' => 'En <b>Paso 4: Ordene las columnas del informe</b>, simplemente haga clic en <b>Siguiente</b>',
    'LBL_SF_NUM_8' => 'En <b>Paso 5: Seleccione los criterios del informe</b>, con <b>Fecha de Inicio</b>, seleccione una fecha suficientemente pasada como para incluir todas sus cuentas. También puede exportar un subconjunto de cuentas utilizando criterios más avanzados. Cuando haya terminado, haga clic en <b>Ejecutar Informe</b>',
    'LBL_SF_NUM_9' => 'Se generará un informe, y la página mostrará <b>Estado de la Generación del Informe: Completado.</b> Ahora haga clic en <b>Exportar a Excel</b>',
    'LBL_SF_NUM_10' => 'En <b>Exportar Informe:</b>, para el <b>Formato del Fichero de Exportación:</b>, seleccione <b>Delimitado por Comas .csv</b>. Haga clic en <b>Exportar</b>.',
    'LBL_SF_NUM_11' => 'Aparecerá un cuadro de diálogo para que guarde el archivo exportado en su computadora.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! puede exportar datos en el formato <b>Valores Separados por Comas</b>, que puede ser utilizado para importar datos en el sistema. Para exportar datos desde Act!, siga los siguientes pasos:',
    'LBL_ACT_NUM_1' => 'Inicie <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Seleccione el menú <b>Archivo</b>, la opción de menú <b>Intercambio de datos</b>, y a continuación la opción de menú <b>Exportar...</b>',
    'LBL_ACT_NUM_3' => 'Seleccione el tipo de archivo <b>Texto Delimitado</b>',
    'LBL_ACT_NUM_4' => 'Seleccione un nombre de archivo y una ubicación para los datos exportados y haga clic en <b>Siguiente</b>',
    'LBL_ACT_NUM_5' => 'Seleccione <b>Únicamente los registros de Contactos</b>',
    'LBL_ACT_NUM_6' => 'Haga clic en el botón <b>Opciones...</b>',
    'LBL_ACT_NUM_7' => 'Seleccione <b>Coma</b> como caracter separador de campos',
    'LBL_ACT_NUM_8' => 'Marque la casilla <b>Sí, exportar los nombres de los campos</b> y haga clic en <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Haga clic en <b>Siguiente</b>',
    'LBL_ACT_NUM_10' => 'Seleccione <b>Todos los Registros</b> y haga clic en <b>Finalizar</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Muchas aplicaciones le permiten exportar datos en el formato <b>Archivo de texto separado por comas (.csv)</b>, siguiendo estos pasos genéricos:',
    'LBL_CUSTOM_NUM_1' => 'Inicie la aplicación y abra el archivo de datos',
    'LBL_CUSTOM_NUM_2' => 'Seleccione la opción de menú <b>Guardar como...</b> o <b>Exportar...</b>',
    'LBL_CUSTOM_NUM_3' => 'Guarde el archivo en el formato <b>CSV</b> o <b>Valores Separados por Comas</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Muchas aplicaciones le permiten exportar datos en el formato <b>Archivo de texto separado por tabuladores (.tsv o .tab)</b>. Habitualmente, la mayoría de aplicaciones siguen estos pasos genéricos:',
    'LBL_TAB_NUM_1' => 'Inicie la aplicación y abra el archivo de datos',
    'LBL_TAB_NUM_2' => 'Seleccione la opción de menú <b>Guardar como...</b> o <b>Exportar...</b>',
    'LBL_TAB_NUM_3' => 'Guarde el archivo en el formato <b>TSV</b> o <b>Valores Separados por Tabuladores</b>',
    'LBL_STEP_3_TITLE' => 'Paso {0}: Confirme el Mapeo de Campos',
    'LBL_STEP_DUP_TITLE' => 'Paso {0}: Compruebe si hay posibles duplicados',
    'LBL_SELECT_FIELDS_TO_MAP' => 'En la siguente lista, seleccione los campos del archivo de importación que deban de ser importados en cada campo del sistema. Cuando termine, haga clic en <b>Siguiente</b>:',
    'LBL_DATABASE_FIELD' => 'Campo de módulo',
    'LBL_HEADER_ROW' => 'Fila de encabezado',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccione si la primera fila del archivo de importación es una fila de encabezado que contiene las etiquetas de campo.',
    'LBL_ROW' => 'Fila',
    'LBL_SAVE_AS_CUSTOM' => 'Guardar como Mapeo Personalizado:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Nombre de Mapeo Personalizado:',
    'LBL_CONTACTS_NOTE_1' => 'Debe asociar o Apellido o Nombre Completo.',
    'LBL_CONTACTS_NOTE_2' => 'Si asocia Nombre Completo, Nombre y Apellido serán ignorados.',
    'LBL_CONTACTS_NOTE_3' => 'Si asocia Nombre Completo, los datos en Nombre Completo se dividirán en Nombre y Apellido cuando se inserten en la base de datos.',
    'LBL_CONTACTS_NOTE_4' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos.',
    'LBL_ACCOUNTS_NOTE_1' => 'Los campos que contienen Calle Dirección 2 y Calle Dirección 3 se concatenarán en el campo Dirección Principal cuando se inserten en la base de datos.',
    'LBL_REQUIRED_NOTE' => 'Campos Requeridos:',
    'LBL_IMPORT_NOW' => 'Importar Ahora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'No puede abrirse el archivo de importación para lectura',
    'LBL_NOT_SAME_NUMBER' => 'No hay el mismo número de campos en cada línea de su archivo de importación',
    'LBL_NO_LINES' => 'No hubo líneas detectadas en el archivo de importación.  Por favor, asegúrese de que no existen líneas vacías en su archivo e inténtelo de nuevo.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'El archivo de importación no existe o ya ha sido procesado',
    'LBL_SUCCESS' => 'Éxito:',
	'LBL_FAILURE' => 'Fallo en la importación:',
    'LBL_SUCCESSFULLY' => 'Importado con éxito',
    'LBL_LAST_IMPORT_UNDONE' => 'Su última importación ha sido deshecha',
    'LBL_NO_IMPORT_TO_UNDO' => 'No hay importación que deshacer.',
    'LBL_FAIL' => 'Fallo:',
    'LBL_RECORDS_SKIPPED' => 'Registros omitidos por falta de alguno de los campos requeridos',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Registros omitidos porque sus ids o bien existían o tenían más de 36 caracteres',
    'LBL_RESULTS' => 'Resultados',
    'LBL_CREATED_TAB' => 'Registros creados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Errores',
    'LBL_IMPORT_MORE' => 'Importar Nuevamente',
    'LBL_FINISHED' => 'Finalizado',
    'LBL_UNDO_LAST_IMPORT' => 'Deshacer Importación',
    'LBL_LAST_IMPORTED'=>'Creado',
    'ERR_MULTIPLE_PARENTS' => 'Sólo puede definir un ID de Registro Principal',
    'LBL_DUPLICATES' => 'Se han Encontrado Duplicados',
    'LNK_DUPLICATE_LIST' => 'Descargar Lista de Duplicados',
    'LNK_ERROR_LIST' => 'Descargar Lista de Errores',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descargar registros que no han podido ser importados.',
    'LBL_UNIQUE_INDEX' => 'Elija el Índice para comparación de duplicados',
    'LBL_VERIFY_DUPS' => 'Para verificar coincidencia de datos del archivo de importación de los registros existentes, seleccione los campos para comprobar.',
    'LBL_INDEX_USED' => 'Campos a comprobar:',
    'LBL_INDEX_NOT_USED' => 'Campos Disponibles:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'El archivo no ha sido subido con éxito.  Compruebe los permisos de archivos en el directorio de caché de su instalación de Sugar.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Número de ID único',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nombre o ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de Teléfono',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'ID o Nombre de Equipo',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Cualquier Texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Fecha',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Fecha y Hora',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nombre de Usuario o ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; ó &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Dirección de Correo Electrónico',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (Sin Decimales)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (Decimales Permitidos)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (Decimales Permitidos)',
    'LBL_DATE_FORMAT' => 'Formato de Fecha:',
    'LBL_TIME_FORMAT' => 'Formato de Hora:',
    'LBL_TIMEZONE' => 'Zona horaria:',
    'LBL_ADD_ROW' => 'Agregar Campo',
    'LBL_REMOVE_ROW' => 'Quitar Campo',
    'LBL_DEFAULT_VALUE' => 'Valor Predeterminado',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Ver propiedades del archivo de importación',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar propiedades de archivo de importación',
    'LBL_SHOW_NOTES' => 'Ver notas',
    'LBL_HIDE_NOTES' => 'Ocultar notas',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Mostrar Columnas de Vista Previa',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Ocultar Columnas de Vista Previa',
    'LBL_SAVE_MAPPING_AS' => 'Para guardar los ajustes de importación, proporcione un nombre para la configuración guardada:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Comilla simple (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Comillas Dobles (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ninguno',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Otro:',
    'LBL_IMPORT_COMPLETE' => 'Importación Completada',
    'LBL_IMPORT_COMPLETED' => 'Importación completada',
    'LBL_IMPORT_ERROR' => 'Han Ocurrido Errores de Importación',
    'LBL_IMPORT_RECORDS' => 'Importando Registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'a',
    'LBL_CURRENCY' => 'Moneda:',
    'LBL_SYSTEM_SIG_DIGITS' => 'Sistema de Dígitos Significativos',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de miles',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nombre de Formato de Visualización',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Ejemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saludo, "f" Nombre, "l" Apellido</i>',
    'LBL_CHARSET' => 'Codificación de archivo:',
    'LBL_MY_SAVED_HELP' => 'Utilice esta opción para aplicar su configuración de importación preestablecida, incluyendo propiedades de importación, asignaciones y cualquier configuración de verificación de duplicados, a esta importación. <br><br>Haga clic en <b>eliminar</b> para eliminar una asignación para todos los usuarios.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Utilice esta opción para aplicar los ajustes predefinidos de importación, incluyendo las propiedades de importación, las asignaciones, y la configuración de control de duplicado, a la importación. <br> Haga clic en <b> Publicar </ b> para hacer disponible el mapeo al resto. <br> Haga clic en <b> No Publicar </ b> para desactivar el mapeo a otros usuarios. <br> Haga clic en <b> Eliminar </ b> para eliminar el mapeo para todos los usuarios.',
    'LBL_MY_PUBLISHED_HELP' => 'Utilice esta opción para aplicar la configuración de importación preestablecidos, incluyendo propiedades de importación, asignaciones y cualquier configuración de verificación de duplicación, a esta importación.',
    'LBL_ENCLOSURE_HELP' => '<p>El <b>caracter calificador</b> se utiliza para encerrar el contenido de un campo, incluyendo cualquier caracter que se utilicen como delimitadores.<br><br>Ejemplo: Si el caracter delimitador es una coma (,) y el calificador es una comilla doble ("),<br><b>"Cupertino, California"</b> se importará en un sólo campo de la aplicación y aparecerá como <b>Cupertino, California</b>.<br>Si no se establece ningún caracter calificador, o éste es un caracter distinto,<br><b>"Cupertino, California"</b> será importado en dos campos adyacentes como <b>"Cupertino</b> y <b>California"</b>.<br><br>Nota: El archivo de importación puede no contener caracteres calificadores.<br>El caracter calificador por defecto para archivos delimitados por coma o tabulador creados en Excel es la comilla doble.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Utilice esta opción para seleccionar y cargar un archivo de hoja de cálculo que contiene los datos que desea importar. Ejemplos: archivo .csv delimitado por comas o archivo de exportación de Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Seleccione esta opción si el caracter que separa los campos en el archivo de importación es un <b>TAB</b>, y la extensión del archivo es .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Seleccione esta opción si el caracter que separa los campos en el archivo de importación no es ni una coma ni un TAB, y escriba el carácter en el campo adyacente.',
    'LBL_DATABASE_FIELD_HELP' => 'Esta columna muestra todos los campos en el módulo. Seleccione un campo para asignar a los datos en las filas del archivo de importación.',
    'LBL_HEADER_ROW_HELP' => 'Esta columna muestra las etiquetas en la fila de encabezado del archivo de importación.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indique un valor a usar para el campo en el registro creado o actualizado si el campo en el archivo de importación no contiene datos.',
    'LBL_ROW_HELP' => 'Esta columna muestra los datos en la primera fila de no encabezado del archivo de importación. Si las etiquetas de fila de encabezado aparecen en esta columna, haga clic en atrás para especificar la fila de encabezado en las propiedades del archivo de importación.',
    'LBL_SAVE_MAPPING_HELP' => 'Introduzca un nombre para guardar la configuración de importación, incluyendo las asignaciones de campos y los índices utilizados para la comprobación de duplicados. La configuración de importación guardada puede ser utilizada para importaciones futuras.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Durante la carga de su archivo de importación, algunas propiedades de archivo pueden haber sido automáticamente detectadas. Vea y administre estas propiedades, según corresponda <br>. Nota: La configuración proporcionada aquí corresponde a esta importación <br>y no anulará su Configuración de usuario general.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Encuentre los registros existentes en el sistema que se consideren duplicados de los registros a ser importados al realizar una comprobación de duplicados para emparejar los datos.  Los campos arrastrados en la columna de "Verificar datos" se utilizará para la comprobación de duplicados.  Las filas en el archivo de importación que contengan datos coincidentes aparecerán en la página siguiente, y usted podrá seleccionar que filas importará',
    'LBL_IMPORT_STARTED' => 'Importación Iniciada:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Configuración de Archivos para la Importación',
    'LBL_IDM_RECORD_CANNOT_BE_CREATED' => 'Registro no agregado. Los usuarios nuevos se deben agregar en Configuración de SugarCloud',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registro no ha podido ser actualizado debido un problema de permisos',
    'LBL_DELETE_MAP_CONFIRMATION' => '¿Está seguro de que desea eliminar este conjunto guardado de la configuración de importación?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si los datos de importación de archivos se exportaron desde una de las siguientes fuentes, seleccionar desde cual de ellas.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccione la fuente para aplicar automáticamente las asignaciones personalizadas con el fin de simplificar el proceso de asignación (paso siguiente).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Utilice esta opción para importar datos directamente desde una aplicación externa o de servicios, como Gmail.',
    'LBL_EXAMPLE_FILE' => 'Descargar plantilla de importación de archivos',
    'LBL_CONFIRM_IMPORT' => 'Usted ha seleccionado actualizar los registros durante el proceso de importación. Las actualizaciones realizadas en los registros existentes no se pueden deshacer. Sin embargo, los registros creados durante el proceso de importación se pueden deshacer (eliminar), si lo desea. Haga clic en Cancelar para seleccionar crear nuevos registros únicamente, o haga clic en OK para continuar.',
    'LBL_IDM_CONFIRM_IMPORT' => 'Updates made to existing records during the import process cannot be undone. Click Cancel to create new records, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Advertencia: Usted ya ha seleccionado una asignación personalizada para esta importación, ¿desea continuar?',
    'LBL_EXTERNAL_FIELD' => 'Campo externo',
    'LBL_SAMPLE_URL_HELP' => 'Descargue el ejemplo de archivo de importación el cual contiene una fila de encabezado con los campos del módulo. El archivo puede ser utilizado como una plantilla para crear el archivo de importación que contiene los datos que desea importar.',
    'LBL_AUTO_DETECT_ERROR' => 'El delimitador de campo y de clasificación en el archivo de importación no pudo ser detectado. Por favor, verifique la configuración de las propiedades del archivo de importación.',
    'LBL_MIME_TYPE_ERROR_1' => 'El archivo seleccionado no parece contener una lista delimitada. Por favor, compruebe el tipo de archivo. Recomendamos archivos delimitados por comas (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para proceder con la importación del archivo seleccionado, haga clic en Aceptar. Para cargar un nuevo archivo, haga clic en Volver a Intentar',
    'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de campo especifica el caracter utilizado para separar las columnas de campos.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccione un archivo que contenga datos separados por un delimitador, ya sea por comas o por tabulaciones. Se recomienda archivos .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'No se puede conectar a la fuente externa, por favor intente más tarde.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'No se puede recuperar datos externos, por favor intente más tarde.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'El directorio caché de importaciones no tiene permisos de escritura',
    'LBL_ADD_FIELD_HELP' => 'Utilice esta opción para agregar un valor a un campo en todos los registros creados y/o actualizados. Seleccione el campo y luego escriba o seleccione un valor para ese campo en la columna Valor predeterminado.',
    'LBL_MISSING_HEADER_ROW' => 'No se ha encontrado encabezado de la fila',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => '¿Listo para empezar a importar? Seleccione el origen de los datos que desea importar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccione un archivo de su computadora que contenga los datos que desea importar, o descargue la plantilla para disponer de un ejemplo para la creación del archivo de importación.',
    'LBL_SELECT_IDM_CREATE_INSTRUCTION' => 'Para crear nuevos registros, acceda a <a href="{0}" target="_blank">Configuración de SugarCloud</a>.',
    'LBL_SELECT_IDM_UPLOAD_INSTRUCTION' => 'Para actualizar registros existentes, seleccione un archivo en su computadora que contenga los datos que desea importar.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Esta es la manera en que las primeras filas de los archivos de importación aparecen con las propiedades detectadas. Si se ha detectado la fila de encabezado, se muestra en la fila superior de la tabla. Ver las propiedades del archivo de importación para realizar cambios en las propiedades detectadas y para configurar propiedades adicionales. Al actualizar los valores se actualizarán los datos que aparecen en la tabla.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'La siguiente tabla contiene todos los campos del módulo que se pueden relacionar a los datos en el archivo de importación. Si el archivo contiene una fila de encabezado, las columnas en el archivo han sido asignadas a los campos de importación. Si los datos de importación contienen fechas, el año debe ser en formato AAAA. Compruebe las asignaciones para asegurarse de que son lo que usted espera, y haga los cambios necesarios. Para ayudarlo a comprobar las asignaciones, la fila 1 muestra los datos en el archivo. Asegúrese de asignar todos los campos obligatorios (señalados con un asterisco).',
    'LBL_IDM_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the editable fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. If the import data contain dates, the year must be in YYYY format. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_IDM_SELECT_MAPPING_FIELDS_INSTRUCTION' => '<a href="{0}" target="_blank">Fields</a> that are only editable in SugarIdentity via the SugarCloud Settings console will not be available to map.',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar la creación de registros duplicados, seleccione cuál de los campos asignados le gustaría utilizar para realizar una comprobación de duplicados mientras los datos se están importando. Los valores dentro de los registros existentes en los campos seleccionados se cotejarán con los datos en el archivo de importación. Si en los datos se encuentran coincidencias, las filas en el archivo de importación se mostrarán junto con los resultados de importación (página siguiente). A continuación podrá seleccionar cuál de estas filas continuar importando.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Registrarse',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Cerrar sesión',
    'LBL_DUP_HELP' => 'Aquí están las filas del archivo de importación que no han sido importadas, ya que contienen datos que coinciden con los valores de los registros existentes sobre la base de la comprobación de duplicados. Los datos que se ponen de relieve son los implicados. Para volver a importar estas filas, descargue la lista, realice los cambios y haga clic en <b> Importar de nuevo </ b>.',
    'LBL_DESELECT' => 'Anular la selección',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_OK' => 'Aceptar',
    'LBL_ERROR_HELP' => 'Aquí están las filas del archivo de importación que no fueron importadas debido a los errores. Para volver a importar estas filas, descargue la lista, realice los cambios y haga clic en <b> Importar de nuevo </ b>',
    'LBL_EXTERNAL_MAP_HELP' => 'La siguiente tabla contiene los campos de la fuente externa y los campos del módulo al que se asignan. Compruebe las asignaciones para asegurarse de que son lo que usted espera, y haga los cambios según sea necesario. Asegúrese de asignar todos los campos obligatorios (señalados con un asterisco).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Se intentarán importar contactos dentro de todos los grupos de contactos de Google.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Los Nombres de Usuarios de los nuevos usuarios por defecto serán Nombres Completos en Google Contacts. Los Nombres de Usuarios podrán ser modificados posteriormente.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Haga clic en <b>Importar ahora</ b> para comenzar la importación. Sólo se crearán registros para las entradas que incluyen los apellidos. Los registros no se crearán para los datos identificados como duplicados basados ​​en nombres y/o direcciones de correo electrónico que coincidan con registros existentes.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Esta columna muestra los campos de la fuente externa que contienen los datos que se utilizarán para crear nuevos registros.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indicar un valor de uso para el campo en el registro creado si el campo de la fuente externa no contiene datos.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para asignar los nuevos registros a un usuario que no sea usted mismo, utilice la columna Valor predeterminado para seleccionar un usuario diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para asignar los nuevos registros a otros equipo(s) por defecto, utilice la columna Valor predeterminado para seleccionar los diferentes equipos.',
    'LBL_SIGN_IN_HELP' => 'Para activar este servicio, por favor ingrese en la pestaña Cuentas externas dentro de su página de configuración.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Intentando gestionar direcciones de correo electrónico en un Bean que no es compatible.",
);