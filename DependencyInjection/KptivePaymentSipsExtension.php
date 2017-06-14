<?php

namespace Kptive\PaymentSipsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class KptivePaymentSipsExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        // $container->setParameter('kptive_payment_sips.config.merchant_id', $config['merchant_id']);
        // $container->setParameter('kptive_payment_sips.config.merchant_country', $config['merchant_country']);
        // $container->setParameter('kptive_payment_sips.config.pathfile', $config['pathfile']);
        // $container->setParameter('kptive_payment_sips.config.templatefile', $config['templatefile']);
        // $container->setParameter('kptive_payment_sips.config.default_language', $config['default_language']);
        // $container->setParameter('kptive_payment_sips.config.default_template_file', $config['default_template_file']);
        // $container->setParameter('kptive_payment_sips.config.currency_code', $config['currency_code']);
        // $container->setParameter('kptive_payment_sips.config.normal_return_url', $config['normal_return_url']);
        // $container->setParameter('kptive_payment_sips.config.cancel_return_url', $config['cancel_return_url']);
        // $container->setParameter('kptive_payment_sips.config.automatic_response_url', $config['automatic_response_url']);
        $container->setParameter('kptive_payment_sips.config', $config['config']);
        $container->setParameter('kptive_payment_sips.bin', $config['bin']);
    }
}
