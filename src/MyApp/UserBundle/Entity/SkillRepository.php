<?php


namespace MyApp\UserBundle\Entity;
use Doctrine\ORM\EntityRepository;
use MyApp\UserBundle\Controller\ProfileController;

class SkillRepository extends EntityRepository{


    public function findSkillByIDUser($id){
        $query=$this->getEntityManager()
            ->createQuery("SELECT s from MyAppUserBundle:Skill s WHERE s.userid like :id")
            ->setParameter('id',$id);
        return $query->getResult();
    }




}
