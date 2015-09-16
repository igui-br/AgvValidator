<?php
namespace AgvValidator\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Description of Telefone
 *
 * @author Victor Guedes
 */
class Telefone extends AbstractHelper
{
    public function __invoke($telefone)
    {
        $telefone = preg_replace('/[^0-9]/', '', trim($telefone));

        if (strlen($telefone) == 10) {
            return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 4) . '-' . substr($telefone, 6);
        } elseif (strlen($telefone) == 11) {
            return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7);
        } else {
            // quantidade de numeros inválidos para telefone
            return null;
        }
    }
}
