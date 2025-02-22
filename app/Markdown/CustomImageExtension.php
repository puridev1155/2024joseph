<?php
namespace App\Markdown;

use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\ExtensionInterface;

class CustomImageExtension implements ExtensionInterface
{
    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addRenderer('League\CommonMark\Node\Inline\Image', new CustomImageRenderer());
    }
}