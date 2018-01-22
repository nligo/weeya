<?php

namespace App\Controller\Home;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function index()
    {
        $this->logger->critical("test");
        return $this->render('admin/index.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

}
