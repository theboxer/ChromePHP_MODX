<?php
/**
 * Resolve creating db tables
 *
 * THIS RESOLVER IS AUTOMATICALY GENERATED, NO CHANGES WILL APPLY
 *
 * @package chromephp
 * @subpackage build
 */

if ($object->xpdo) {
    /** @var modX $modx */
    $modx =& $object->xpdo;

    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modelPath = $modx->getOption('chromephp.core_path');

            if (empty($modelPath)) {
                $modelPath = '[[++core_path]]components/chromephp/model/';
            }

            if ($modx instanceof modX) {
                $modx->addExtensionPackage('chromephp', $modelPath, array(
                    'serviceName' => 'chromephp',
                    'serviceClass' => 'ChromePHP_MODX'
                ));
            }

            break;
        case xPDOTransport::ACTION_UNINSTALL:
            if ($modx instanceof modX) {
                $modx->removeExtensionPackage('chromephp');
            }

            break;
    }
}
return true;