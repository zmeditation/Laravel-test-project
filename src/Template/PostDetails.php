<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class PostDetails extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
            <h1 style="text-align: center">$context->title</h1>
            <div>
            <md-block>$context->content</md-block>
            </div>
            <div><b>Author: $context->author</b></div>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
