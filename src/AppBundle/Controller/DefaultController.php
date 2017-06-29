<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/log", name="log")
     */
    public function infosAction(Request $request)
    {
        preg_match('/"email":"(.+)"}/', $request->getContent(), $matches);
        $email = $matches[1];

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneByEmail($email);

        $service = $this->get('lexik_jwt_authentication.handler.authentication_success');
        $response = $service->handleAuthenticationSuccess($user);
        $token = json_encode($response->getContent());

        return new Response(str_replace("\\",'', $token));
    }

    /**
     * @Route("/api/song/{id}", name="api_song")
     */
    public function songAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $song = $em->getRepository("AppBundle:Song")->find($id);

        $response = new Response($this->get('app.serializer')->serializeObject($song));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/songs/", name="api_songs")
     */
    public function songsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $songs = $em->getRepository("AppBundle:Song")->findAll();

        $response = new Response($this->get('app.serializer')->serializeObject($songs));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/playlist/{id}", name="api_playlist")
     */
    public function playlistAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em->getRepository("AppBundle:Playlist")->find($id);

        $response = new Response($this->get('app.serializer')->serializeObject($playlist));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    /**
     * @Route("/api/playlists/", name="api_playlists")
     */
    public function playlistsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $playlists = $em->getRepository("AppBundle:Playlist")->findAll();

        $response = new Response($this->get('app.serializer')->serializeObject($playlists));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/tag/{id}", name="api_tag")
     */
    public function tagAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $tag = $em->getRepository("AppBundle:Tag")->find($id);

        $response = new Response($this->get('app.serializer')->serializeObject($tag));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/tags/", name="api_tags")
     */
    public function tagsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository("AppBundle:Tag")->findAll();

        $response = new Response($this->get('app.serializer')->serializeObject($tags));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/users/", name="api_users")
     */
    public function usersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:User")->findAll();

        $response = new Response($this->get('app.serializer')->serializeObject($users));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/api/user/{id}", name="api_user")
     */
    public function userAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->find($id);

        $response = new Response($this->get('app.serializer')->serializeObject($user));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
