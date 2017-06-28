<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/api/song/{id}", name="api_song")
     */
    public function songAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Song")->find($id);
        $jsonContent = $serializer->serialize($data, 'json');
       return new JsonResponse(array('data' => $jsonContent));
    }

    /**
     * @Route("/api/songs/", name="api_songs")
     */
    public function songsAction(Request $request)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Song")->findAll();
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse(array('data' => $jsonContent));
    }

    /**
     * @Route("/api/playlist/{id}", name="api_playlist")
     */
    public function playlistAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Playlist")->find($id);
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse(array('data' => $jsonContent));
    }

    /**
     * @Route("/api/playlists/", name="api_playlists")
     */
    public function playlistsAction(Request $request)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Playlist")->findAll();
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse(array('data' => $jsonContent));
    }

    /**
     * @Route("/api/tag/{id}", name="api_tag")
     */
    public function tagAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Tag")->find($id);
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse(array('data' => $jsonContent));
    }

    /**
     * @Route("/api/tags/", name="api_tags")
     */
    public function tagsAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository("AppBundle:Tag")->findAll();
        $jsonContent = $serializer->serialize($data, 'json');
        return new JsonResponse(array('data' => $jsonContent));
    }

}
