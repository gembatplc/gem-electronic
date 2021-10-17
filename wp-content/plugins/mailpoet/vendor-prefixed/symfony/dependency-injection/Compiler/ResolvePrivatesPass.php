<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Compiler; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\ContainerBuilder; class ResolvePrivatesPass implements CompilerPassInterface { public function process(ContainerBuilder $container) { foreach ($container->getDefinitions() as $id => $definition) { if ($definition->isPrivate()) { $definition->setPublic(\false); $definition->setPrivate(\true); } } foreach ($container->getAliases() as $id => $alias) { if ($alias->isPrivate()) { $alias->setPublic(\false); $alias->setPrivate(\true); } } } } 