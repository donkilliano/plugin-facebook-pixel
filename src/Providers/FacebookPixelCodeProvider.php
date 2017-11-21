<?php

namespace FacebookPixel\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class FacebookPixelCodeProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('FacebookPixel::FacebookPixelCode', [
            'pixelId' => $configRepository->get('FacebookPixel.pixelId')
        ]);
    }
}
