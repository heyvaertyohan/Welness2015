<?php

namespace UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WellnessUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
