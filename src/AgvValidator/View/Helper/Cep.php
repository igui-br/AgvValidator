<?php
namespace AgvValidator\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Description of CEP
 *
 * @author Victor Guedes
 */
class Cep extends AbstractHelper
{

    public function __invoke($cep)
    {
        $cep = preg_replace('/[^0-9]/', '', trim($cep));
        if (strlen($cep) != 8) {
            // quantidade de numeros inválidos para cep
            return null;
        }

        return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
    }
}
