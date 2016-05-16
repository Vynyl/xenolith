<?php

namespace Vynyl\Xenolith\Command;

class MakeModelCommand extends BaseCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'vynyl:model:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example creation command.';

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        echo $this->twig->render($this->getTemplate(), array('namespace' => 'Slartiblartfast'));
    }

    protected function getTemplate()
    {
        return __DIR__ . '/../templates/model.twig';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    public function getOptions()
    {
        return [];
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }
}
