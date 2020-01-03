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
        'App\Events\ImportExecutedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ImportQueuedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ImportCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ImportUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ImportDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Contacts Types*/
        'App\Events\ContactTypeCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ContactTypeUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\ContactTypeDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Comments*/
        'App\Events\CommentCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\CommentUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\CommentDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Statuses*/
        'App\Events\StatusCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\StatusUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\StatusDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Tasks Types*/
        'App\Events\TaskTypeCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\TaskTypeUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\TaskTypesDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Tasks*/
        'App\Events\TaskCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\TaskUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\TaskDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\TaskCommentCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Steps*/
        'App\Events\StepCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\StepUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\StepDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        /*Users*/
        'App\Events\UserCreatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\UserUpdatedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ],
        'App\Events\UserDeletedEvent' => [
            'ConfrariaWeb\Historic\Listeners\HistoricListener',
        ]
    ]
];
