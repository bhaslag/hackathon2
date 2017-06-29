<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 28/06/17
 * Time: 20:10
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{

    /**
     * @Route("/api/post/", name="api_post")
     */
    public function postAction(Request $request)
    {
        $post = json_decode('request', $request);

        $em = $this->getDoctrine()->getManager();
//        $em->persist($data);
        return $this;
    }
}