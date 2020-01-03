<?php

namespace ConfrariaWeb\Historic\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeHistoric extends GeneratorCommand
{
    /**
     * O nome e a assinatura do comando do console.
     *
     * @var string
     */
    protected $name = 'make:historic';

    /**
     * A descrição do comando do console.
     *
     * @var string
     */
    protected $description = 'Create a new historic class';

    /**
     * O tipo de classe sendo gerada.
     *
     * @var string
     */
    protected $type = 'Historic';

    /**
     * Substitui o nome da classe para o stub fornecido.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);
        return str_replace('GenericRepository', $this->argument('name'), $stub);
    }
    /**
     * Obtpem o arquivo stub para o gerador.
     *
     * @return string
     */
    protected function getStub()
    {
        return  __DIR__ . '/Stubs/make-historic.stub';
    }
    /**
     * Obtém o namespace padrão para a classe.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Historics';
    }

    /**
     * Obtém os argumentos do comando do console.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the repository.'],
        ];
    }
}
