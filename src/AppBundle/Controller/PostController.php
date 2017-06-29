<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Playlist;
use AppBundle\Entity\Song;
use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
        $em = $this->getDoctrine()->getManager();
//        $dataplaylist = json_decode($request->getContent(), true);

        $id = 7;
        $dplaylist = $em->getRepository(Playlist::class)->find($id);
        $playlistJson = $this->get('app.serializer')->serializeObject($dplaylist);
        $dataplaylist = json_decode($playlistJson, true);
var_dump($dataplaylist);
        $playlist = new Playlist();
        $playlist
            ->setName($dataplaylist['name'])
            ->setDatecreated(new \DateTime())
        ;

        $songs = $dataplaylist['songs'];

        var_dump($songs);

        foreach ($songs as $song)
        {
            $newsong = new Song();
            $em = $this->getDoctrine()->getManager();

            $newsong->setUrl($song['url'])
                    ->setTitle($song['title'])
                    ->setArtist($song['artist'])
                    ->setPlaylist($playlist)
                    ->setDatecreated(new \DateTime())
            ;

            $tags = $song['tags'];

            foreach($tags as $tag)
            {
                $em = $this->getDoctrine()->getManager();

                $tagbdd = $em->getRepository('AppBundle:Tag')->find($tag['id']);
                $newsong->addTag($tagbdd);
                $tagbdd->addSong($newsong);

            }

            $em->persist($newsong);
        }

        $em->persist($playlist);
        $em->flush();

        return new JsonResponse(json_encode('success'));
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