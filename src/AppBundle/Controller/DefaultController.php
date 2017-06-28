<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/api/song/{id}", name="api_song")
     */
    public function songAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $song = $em->getRepository("AppBundle:Song")->find($id);

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($song)));
    }

    /**
     * @Route("/api/songs/", name="api_songs")
     */
    public function songsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $songs = $em->getRepository("AppBundle:Song")->findAll();

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($songs)));
    }

    /**
     * @Route("/api/playlist/{id}", name="api_playlist")
     */
    public function playlistAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em->getRepository("AppBundle:Playlist")->find($id);

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($playlist)));
    }

    /**
     * @Route("/api/playlists/", name="api_playlists")
     */
    public function playlistsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $playlists = $em->getRepository("AppBundle:Playlist")->findAll();

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($playlists)));
    }

    /**
     * @Route("/api/tag/{id}", name="api_tag")
     */
    public function tagAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $tag = $em->getRepository("AppBundle:Tag")->find($id);

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($tag)));
    }

    /**
     * @Route("/api/tags/", name="api_tags")
     */
    public function tagsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository("AppBundle:Tag")->findAll();

        return new JsonResponse(array('data' => $this->get('app.serializer')->serializeObject($tags)));
    }
}
