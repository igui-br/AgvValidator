<?php

namespace AgvBootstrap;

return array(
    'view_helpers' => array(
        'invokables' => array(
            'cnpjMask' => 'AgvValidator\View\Helper\Cnpj',
            'cpfMask' => 'AgvValidator\View\Helper\Cpf',
            'cepMask' => 'AgvValidator\View\Helper\Cep',
            'telefoneMask' => 'AgvValidator\View\Helper\Telefone'
        ),
    ),
);
