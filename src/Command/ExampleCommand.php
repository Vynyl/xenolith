<?php

namespace Vynyl\Xenolith\Commands;

class ExampleCommand extends BaseCommand
{

    protected function getTemplate()
    {
        return __DIR__ . '/../templates/example.twig';
    }

    public function handle()
    {
        echo $this->twig->render($this->getTemplate(), array('namespace' => 'Slartiblartfast'));
    }

}
