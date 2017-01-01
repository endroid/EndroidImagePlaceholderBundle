<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\Bundle\ImagePlaceholderBundle\Provider;

class BaconMockupProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getUrl($width, $height, array $options = [])
    {
        $url = 'http://baconmockup.com/'.$width.'/'.$height.'/';

        return $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'baconmockup';
    }
}
