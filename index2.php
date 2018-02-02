<?php 

class Papers {
	var $title;
	var $link;
	var $author; 
	var $publication;

	function settitle($title){
		$this->title = $title;
	}
	function gettitle(){
		echo $this->title;
	}

	function setlink($link){
		$this->link = $link;
	}
	function getlink(){
		echo $this->link;
	}

	function setauthor($author){
		$this->author = $author;
	}
	function getauthor(){
		echo $this->author;
	}

	function setpublication($publication){
		$this->publication = $publication;
	}
	function getpublication(){
		echo $this->publication;
	}
}

	$paper1 = new Papers(); 

	$paper1-> settitle ('Historia de Egipto')	
	$paper1-> setlink ('historiadeegipto.com')
	$paper1-> setauthor ('Diego')
	$paper1-> setpublication ('Historia')
	

$paper2 = new Papers(); 

	$paper2-> settitle ('Quimica para principiantes')	
	$paper2-> setlink ('quimica.com')
	$paper2-> setauthor ('Martin')
	$paper2-> setpublication ('Quimica')


$paper3 = new Papers(); 

	$paper3-> settitle ('Fisica para Expertos')	
	$paper3-> setlink ('fisica.com')
	$paper3-> setauthor ('Juan')
	$paper3-> setpublication ('Fisica')


$paper4 = new Papers(); 

	$paper4-> settitle ('Matematica para intermedios')	
	$paper4-> setlink ('Matematica.com')
	$paper4-> setauthor ('Luis')
	$paper4-> setpublication ('Matematica')


$paper5 = new Papers(); 

	$paper5-> settitle ('Programacion 1')	
	$paper5-> setlink ('Programacion.com')
	$paper5-> setauthor ('Gonzalo')
	$paper5-> setpublication ('Programacion')



	
	$paper1->gettitle();
	$paper1->getlink();
	$paper1->getauthor();
	$paper1->getpublication();


	$paper2->gettitle();
	$paper2->getlink();
	$paper2->getauthor();
	$paper2->getpublication();

	$paper3->gettitle();
	$paper3->getlink();
	$paper3->getauthor();
	$paper3->getpublication();

	$paper4->gettitle();
	$paper4->getlink();
	$paper4->getauthor();
	$paper4->getpublication();

	$paper5->gettitle();
	$paper5->getlink();
	$paper5->getauthor();
	$paper5->getpublication();


	?>




	



 