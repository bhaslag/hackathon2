<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Playlist;
use AppBundle\Entity\Song;
use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{

    /**
     * @Route("/api/newsong/", name="api_newsong")
     */
    public function newSongAction(Request $request)
    {
        $post = json_decode('request', $request);
        $song = new Song();
        $em = $this->getDoctrine()->getManager();

        $url = $post['song']['url'];
        $title = $post['song']['title'];
        $artist = $post['song']['artist'];

        $song->setUrl($url);
        $song->setTitle($title);
        $song->setArtist($artist);

        $em->persist($song);
        $em->flush();
    }

    /**
     * @Route("/api/createplaylist/", name="api_createplaylist")
     */
    public function createPlaylistAction(Request $request)
    {
        $post = json_decode('request', $request);
        $playlist = new Playlist();
        $em = $this->getDoctrine()->getManager();

        $name = $post['playlist']['name'];

        $playlist->setName($name);

        $em->persist($playlist);
        $em->flush();
    }

    /**
     * @Route("/api/deleteplaylist/", name="api_deleteplaylist")
     */
    public function deletePlaylistAction(Request $request)
    {
        $post = json_decode('request', $request);
        $playlist= $post['playlist']['id'];
        $em = $this->getDoctrine()->getManager();

        $badplaylist = $em->getRepository('AppBundle:Playlist')->find($playlist);

        $em->remove($badplaylist);
        $em->flush();
    }

    /**
     * @Route("/api/addtoplaylist/", name="api_addtoplaylist")
     */
    public function addtoPlaylistAction(Request $request)
    {
        $post = json_decode('request', $request);
        $em = $this->getDoctrine()->getManager();

        $songID = $post['song']['id'];
        $song = $em->getRepository('AppBundle:Song')->findBy($songID);

        $playlistID = $post['playlist']['id'];
        $edplaylist = $em->getRepository('AppBundle:Playlist')->findBy($playlistID)->addSong($song);

        $em->persist($edplaylist);
        $em->flush();
    }

    /**
     * @Route("/api/deletefromplaylist/", name="api_deletefromplaylist")
     */
    public function deletefromPlaylistAction(Request $request)
    {
        $post = json_decode('request', $request);
        $song= $post['song']['id'];
        $em = $this->getDoctrine()->getManager();

        $badsong = $em->getRepository('AppBundle:Playlist')->find($song);

        $em->remove($badsong);
        $em->flush();
    }

    /**
     * @Route("/api/newtag/", name="api_newtag")
     */
    public function newTagsAction(Request $request)
    {
        $post = json_decode('request', $request);
        $tag = new Tag();
        $em = $this->getDoctrine()->getManager();

        $name = $post['tag']['name'];

        $tag->setName($name);

        $em->persist($tag);
        $em->flush();
    }

    /**
     * @Route("/api/addtag/", name="api_addtag")
     */
    public function addTagAction(Request $request)
    {
        $post = json_decode('request', $request);
        $em = $this->getDoctrine()->getManager();

        $song = $post['song']['name'];
        $tag = $post['tag']['name'];

        $edsong = $em->getRepository('AppBundle:Song')->findBy($song)->addTag($tag);

        $em->persist($edsong);
        $em->flush();
    }
}