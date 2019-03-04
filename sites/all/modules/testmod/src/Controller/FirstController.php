<?php
/**
* @file
* Contains \Drupal\testmod\Controller\FirstController.
*/
    
namespace Drupal\testmod\Controller;
    
use Drupal\Core\Controller\ControllerBase;
    
class FirstController extends ControllerBase 
{
    public function content() 
    {
        return array(
            '#type' => 'markup',
            '#markup' => t('Hello world'),
        );
    }
}