<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query;
use Symfony\Component\HttpFoundation\Request;
use MyApp\UserBundle\Entity\Skill;
class ProfileController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connectedUser = $this->getUser();
        $connectedUserId = $connectedUser->getId();

        $skill = new Skill();
        $form = $this->createForm('MyApp\UserBundle\Form\SkillType', $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $skill->setUserid($connectedUser);
            $em->persist($skill);
            $em->flush($skill);

            return $this->redirectToRoute('myProfile', array());
        }
        //$user = $em->getRepository("MyAppUserBundle:User")->find($connectedUserId);
        $profile = $em->getRepository("MyAppUserBundle:Profile")->findOneBy(array('profileid' => $connectedUserId));

           $image = base64_encode(stream_get_contents($profile->getImage()));

        $skills = $em->getRepository("MyAppUserBundle:Skill")->findBy(array('userid' =>$connectedUserId ));


/*
        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                'MyAppUserBundle:Profile:index.html.twig',
                array(
                    "user" =>$connectedUser, 'profile' => $profile,'image' => $image
                ,"skills" =>$skills
                )
            ),
            'file.pdf'
        );

*/

        return $this->render('MyAppUserBundle:Profile:index.html.twig', array( 'form' => $form->createView(),"user" =>$connectedUser, 'profile' => $profile,'image' => $image
        ,"skills" =>$skills));
    }

    public function EditAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connectedUser = $this->getUser();
        $connectedUserId = $connectedUser->getId();
        $Profile = $em->getRepository("MyAppUserBundle:Profile")->findOneBy(array('profileid'=>$connectedUserId));
        $User = $em->getRepository("MyAppUserBundle:User")->findOneBy(array('id'=>$connectedUserId));

        if($request->getMethod() == "POST")
        {

            $currentjob = $request->get('currentjob');
            $adress = $request->get('address');
            $profield = $request->get('profield');
            $summary = $request->get('summary');

            $firstName = $request->get('firstName');
            $lastName = $request->get('lastName');
            $email = $request->get('email');
            $birthdate = $request->get('birthdate');
            $language = $request->get('language');
            $experiences = $request->get('experiences');
            $education = $request->get('education');
            $intersts = $request->get('intersts');

            $user = $this->getUser();
            try{

                $images= $_FILES["image"]["tmp_name"];
                if(!is_dir("D:/wamp64/www/Jobseekerz/web/template/image/".$user->getUsername())){
                    mkdir("D:/wamp64/www/Jobseekerz/web/template/image/".$user->getUsername());

                }else{
                    $files = glob("D:/wamp64/www/Jobseekerz/web/template/image/".$user->getUsername()."/*");
                    foreach($files as $file){
                        unlink($file);
                    }
                }
                move_uploaded_file($images,"D:/wamp64/www/Jobseekerz/web/template/image/".$user->getUsername()."/profile.jpg");

            }

        catch (IOExceptionInterface $e) {
            echo "An error occurred while creating your directory at ".$e->getPath();
        }
            $Profile->setCurrentjob($currentjob);
            $Profile->setProfessionalfield($profield);
            $Profile->setSummary($summary);
            $Profile->setAddress($adress);
            $Profile->setContactemail($email);
            $Profile->setExperience($experiences);
            $Profile->setEducation($education);
            $Profile->setInterests($intersts);
            $Profile->setLanguage($language);

            $User->setFirstname($firstName);
            $User->setLastname($lastName);
            $User->setEmail($email);
            $User->setBirthdate($birthdate);






            $em->persist($Profile);
            $em->persist($User);
            $em->flush();




   return $this->redirectToRoute('myProfile');

        }
        return $this->render('MyAppUserBundle:Profile:EditProfile.html.twig',array("profile" =>$Profile,"user" =>$User));
    }


   public function toPdfAction(){

      /* $em = $this->getDoctrine()->getManager();
       $user = $this->getUser();

       $profile = $em->getRepository("MyAppUserBundle:Profile")->findOneBy(array('profileid'=>$user->getId()));

       $skills= $em->getRepository("MyAppUserBundle:Skill")->findBy(array('userid'=>$user->getId()));







       $html = $this->renderView('MyAppUserBundle:Profile:pdf.html.twig', array(
           'user'  => $this->getUser(),'profile'=>$profile,'skills'=>$skills
       ));
       return new Response(
           $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
           200,
           array(
               'Content-Type'          => 'application/pdf',
               'Content-Disposition'   => 'attachment; filename="classement.pdf"'
           )
       );*/




       $imageGenerator = $this->get('knp_snappy.image');

       $filepath = 'imagehd.jpg';//or filename.png

       // Set dimensions of the output image
       $imageGenerator->setOption('width',100);
       $imageGenerator->setOption('height',300);

       // Take a screenshot of Our Code World website !
       $imageGenerator->generate('http://www.google.com', $filepath);

       return new Response("Image succesfully created in ".$filepath);
   }
}
