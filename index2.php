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
		//$this->link is the member variable and we use  -> to assign the data to this member variable
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
$papers = []; //empty array

	$papers[0] = new Papers();  //first element

	$papers[0]-> settitle ('Historia de Egipto');
	$papers[0]-> setlink ('historiadeegipto.com');
	$papers[0]-> setauthor ('Diego');
	$papers[0]-> setpublication ('Historia');
	

 $papers[1] = new Papers(); //second element

	$papers[1]-> settitle ('Quimica para principiantes');	
	$papers[1]-> setlink ('quimica.com');
	$papers[1]-> setauthor ('Martin');
	$papers[1]-> setpublication ('Quimica');


$papers[2] = new Papers(); //third elemnet 
//we use -> to access the member functions of the object of the class; Here $papers[2] stores the object of Paper Class
	$papers[2]-> settitle ('Fisica para Expertos');	
	$papers[2]-> setlink ('fisica.com');
	$papers[2]-> setauthor ('Juan');
	$papers[2]-> setpublication ('Fisica');


$papers[3] = new Papers(); 

	$papers[3]-> settitle ('Matematica para intermedios');	
	$papers[3]-> setlink ('Matematica.com');
	$papers[3]-> setauthor ('Luis');
	$papers[3]-> setpublication ('Matematica');


$papers[4] = new Papers(); 

	$papers[4]-> settitle ('Programacion 1');	
	$papers[4]-> setlink ('Programacion.com');
	$papers[4]-> setauthor ('Gonzalo');
	$papers[4]-> setpublication ('Programacion');
//5 elements in a array; the scope of the paper variable is within the forloop only
foreach($papers as $paper){
	//create a variable $paper and assign the element
	$paper->gettitle();
	$paper->getlink();
	$paper->getauthor();
	$paper->getpublication();

	//destroy it here
}
//for loop
	
	/*$paper1->gettitle();
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
	$paper5->getpublication();*/

//I can access the $papers variable till here.
	?>




	



 