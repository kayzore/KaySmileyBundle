<?php

namespace Kay\SmileyBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SmileyController extends Controller
{
    public function getSmileyListJsonAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $smileyService = $this->container->get('kay_smiley.smiley');
            $data = $smileyService->getSmileyListJson();
            $response = new Response();
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($data);
            return $response;
        }
        $response = new Response();
        $response->setStatusCode(500);
        return $response;
    }
}
