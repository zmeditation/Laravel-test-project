<?php

namespace silverorange\DevTest;

use silverorange\DevTest\Template\Template;
use silverorange\DevTest\Template\About;
use silverorange\DevTest\Template\NotFound;

class App
{
    public function run(): bool
    {
        $path = $_SERVER['REQUEST_URI'];

        // Serve static assets.
        if (preg_match('@^/(assets|images)(/|$)@', $path) === 1) {
            return false;
        }

        $context = $this->getContext($path);

        $template = $this->getTemplate($path);
        $content = $template->render($context);

        header('Content-Type: text/html');

        echo $content;

        return true;
    }

    protected function getContext(string $path): Context
    {
        $context = new Context();
        $context->setTitle('Not Found');

        // Do stuff like parse query params from $_GET here

        // Switch to set up different context data for different URLs.
        if (preg_match('@^/about/?$@', $path) === 1) {
            $context->setTitle('About');
        }

        return $context;
    }

    protected function getTemplate(string $path): Template
    {
        $template = new NotFound();

        // Switch to load different templates for different URLs.
        if (preg_match('@^/about/?$@', $path) === 1) {
            $template = new About();
        }

        return $template;
    }
}
