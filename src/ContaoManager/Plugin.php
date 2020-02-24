<?php 

namespace berecont\ContaoBreakline\ContaoManager;

use berecont\ContaoBreakline\ContaoBreaklineBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoBreaklineBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }

}



