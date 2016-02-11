<?php

namespace WellnessCoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WellnessCoreBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
