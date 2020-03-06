<?php

  namespace App\Controller;

  use App\Entity\Post;
  use App\Entity\Tag;
  use App\Form\PostFormType;
  use App\Form\TagType;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;
  use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
  use Doctrine\ORM\EntityManagerInterface;
  use Symfony\Component\HttpFoundation\File\UploadedFile;
  use App\Service\UploaderHelper;
  use Symfony\Component\Form\Extension\Core\Type\FileType;
  use Symfony\Bridge\Doctrine\Form\Type\EntityType;



  class PostController extends AbstractController {
    /**
     * @Route("/", name="post_list")
     * @Method({"GET"})
     */
    public function index() {

      $posts= $this->getDoctrine()->getRepository(Post::class)->findAll();


      return $this->render('posts/index.html.twig', array('posts' => $posts));

    }

    /**
     * @Route("/post/new", name="new_post")
     */
    public function new(EntityManagerInterface $em, Request $request, UploaderHelper $uploaderHelper)
    {
      $form = $this->createForm(PostFormType::class);

      $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

          /** @var Post $post */
          $post = $form->getData();

          $tagName = $form['newtag']->getdata();
          if ($tagName){
            $tag = new Tag;
            $tag->setName($tagName);
            $tag->addPost($post);
            $post->addTag($tag);
          }
          
          /** @var UploadedFile $uploadedFile */
          $uploadedFile = $form['imageFile']->getdata();

          if ($uploadedFile){
            $newFilename = $uploaderHelper->uploadPostImage($uploadedFile, $post->getImageFilename());
            $post->setImageFilename($newFilename);
          }
   
          $em->persist($post);
          $em->flush();

          return $this->redirectToRoute('post_list');
        }

      return $this->render('posts/new.html.twig', [
          'PostForm' => $form->createView(),
      ]);
    }




    /**
     * @Route("/post/update/{id}", name="update_post")
     * Method({"GET", "POST"})
     */
    public function update(Request $request, $id, UploaderHelper $uploaderHelper) {
      $post = new post();
      $post = $this->getDoctrine()->getRepository(post::class)->find($id);

      $form = $this->createFormBuilder($post)
        ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('body', TextareaType::class, array('attr' => array('class' => 'form-control')))
        ->add('imageFile', FileType::class, ['required' => false, 'mapped' => false])
        ->add('date', DateTimeType::class, array('data' => new \DateTime()))
        ->add('tags', EntityType::class, ['class' => Tag::class, 'multiple' => true, 'expanded' => true])
        ->add('newtag', null, ['required' => false, 'mapped' => false, 'label' => 'Add new tag: '])
        ->add('save', SubmitType::class, array('label' => 'Update', 'attr' => array('class' => 'btn btn-green mt-3')))
        ->getForm();
        
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()) {
        
        $tagName = $form['newtag']->getdata();
        if ($tagName){
          $tag = new Tag;
          $tag->setName($tagName);
          $tag->addPost($post);
          $post->addTag($tag);
        }

         /** @var UploadedFile $uploadedFile */
         $uploadedFile = $form['imageFile']->getdata();

         if ($uploadedFile){
            $newFilename = $uploaderHelper->uploadPostImage($uploadedFile, $post->getImageFilename());
            $post->setImageFilename($newFilename);
          }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->redirectToRoute('post_list');
      }

      return $this->render('posts/update.html.twig', array(
        'form' => $form->createView()
      ));
    }

     /**
     * @Route("/post/delete/{id}")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
      $post = $this->getDoctrine()->getRepository(post::class)->find($id);

      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($post);
      $entityManager->flush();

      $response = new Response();
      $response->send();
    }

    /**
     * @Route("/post/relevant/{tag}", name="relevant_post")
     */
    public function relevant($tag) {

      $tagged = $this->getDoctrine()->getRepository(tag::class)->find($tag);
      $posts= $this->getDoctrine()->getRepository(post::class)->findAll();
      $taggedPosts = $tagged->getPosts();
      
      return $this->render('posts/tag.html.twig', array('posts' => $taggedPosts));
    }

    /**
     * @Route("/post/{id}", name="post_post")
     */
    public function show($id){
      $post = $this->getDoctrine()->getRepository(post::class)->find($id);

      return $this->render('posts/post.html.twig', array('post' => $post));
    }


}
