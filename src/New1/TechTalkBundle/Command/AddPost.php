<?php

namespace Alipay\ReportBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\File\Exception;
use New1\TechTalkBundle\Entity\Comment,
    New1\TechTalkBundle\Entity\Post,
    New1\TechTalkBundle\Entity\Tag;

/**
 * Description of ReadSettlementFileCommand
 *
 * @author sahan
 */
class AddPost extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('add_post')
                ->setDescription('Adding a post')

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $post= new Post();
        $post->setTitle("Tect Talk");
        $post->setContent("done by sahan");
        $comment=new Comment();
        $comment->setPost($post);
        $comment->setComment("nice");
        $tag=new Tag();
        $tag->setName("sa");
    }

}

