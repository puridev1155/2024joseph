<?php
namespace App\Markdown;

use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\NodeRendererInterface;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Util\HtmlFilter;

class CustomImageRenderer implements NodeRendererInterface
{
    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        if (!($node instanceof \League\CommonMark\Node\Inline\Image)) {
            throw new \InvalidArgumentException('Incompatible node type: ' . get_class($node));
        }

        $attrs = $node->data->get('attributes', []);
        $src = $node->getUrl();
        $alt = $node->getAlt();

        $html = '<img src="' . HtmlFilter::escape($src) . '" alt="' . HtmlFilter::escape($alt) . '">';

        return $html;
    }
}