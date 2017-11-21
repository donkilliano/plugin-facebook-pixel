<?php

namespace accengage\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class accengageCodeProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('accengage::accengageCode', [
            'pixelId' => $configRepository->get('accengage.pixelId')
        ]);
    }
}
