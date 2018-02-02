<?php
   //class Publication {
      /* Member variables */
     /* var $url;
      var $title;
      var $citation_number;
      /* Member functions */
  /*    function setURL($par){
         $this->url = $par;
         //$url = 'test';
      }
      function getURL(){
        echo $this->url ."<br/>";
      }
      function setName($par){
         $this->title = $par;
      }
      function getName(){
         echo $this->title ." <br/>";
      }
      function setCitation($citation_dyn){
      	//$this->citation_number = 10; //static value
      		$this->citation_number = $citation_dyn; //dynamic value
      }
       function getCitation(){
         echo $this->citation_number ." <br/>";
      }
   } */
   $a = 'test';
   $b = $a;

  echo $a  . '-' . $b; //dash
$publication_1 = new Publication(); ///It is acontainter with property url and title which can store data
$publication_1->setName('Historical Background');
$publication_1->setURL('http://google.com');
$publication_1->setCitation(10);
//$publication_1->getName();
//$publication_1->getURL();
//$publication_1 = new Publication();
//$publication_1->setName('REligious Events');
//$publication_1->setURL('http://bbc.co.uk');
//constructor
$publication_1->getName();
$publication_1->getURL();
$publication_1->getCitation();


$publication_2 = new Publication(); ///It is acontainter with property url and title which can store data
$publication_2->setName('Medicine ');
$publication_2->setURL('http://medicine.com');
$publication_2->setCitation(11);
//$publication_1->getName();
//$publication_1->getURL();
//$publication_1 = new Publication();
//$publication_1->setName('REligious Events');
//$publication_1->setURL('http://bbc.co.uk');
//
$publication_2->getName();
$publication_2->getURL();
$publication_2->getCitation();




