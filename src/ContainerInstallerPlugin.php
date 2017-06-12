<?php

namespace JohannesSchobel\ApiatoContainerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ContainerInstallerPlugin implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ContainerInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}

?>