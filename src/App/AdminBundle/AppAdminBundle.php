<?php

namespace App\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppAdminBundle extends Bundle
{
   public function getParent()
    {
        return 'FOSUserBundle';
    }
}
