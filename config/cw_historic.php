<?php

return [
    /**
     * Aqui se pode ativar e desativar a gravação de historico
     */
    'actived' => true,

    /**
     * Aqui registramos todos os ouvintes para eventos
     */

    'listen' => [
        'App\Events\TaskUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ]
    ]
];
