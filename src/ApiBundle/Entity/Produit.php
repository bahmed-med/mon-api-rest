<?php
    namespace ApiBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Produits
     *
     * @ORM\Table("produits")
     * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\ProduitsRepository")
     */
    class Produits
    {
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var string
         *
         * @ORM\Column(name="nom", type="string", length=125)
         */
        private $nom;

        /**
         * @var string
         *
         * @ORM\Column(name="description", type="text")
         */
        private $description;

        /**
         * @var float
         *
         * @ORM\Column(name="prix", type="float")
         */
        private $prix;
        
        /**
         * @var boolean
         *
         * @ORM\Column(name="disponible", type="boolean")
         */
        private $disponible;

        

    }    