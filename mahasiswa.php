<?php

/*database connection*/
$connect = mysql_connect("localhost","root", "");
$db = mysql_db("univ");
if($connect){
	echo("Connection to MySQL succeed! <br>");
	if($db){
		echo ("Connection to database selected succeed! <br>");
	}
	else{
		echo ("Connection to database selected failed! <br>");
		}
	}
	else{
		echo("Connection to MySQL failed! <br>");
		}
	
		/*getting table 'mahasiswa field's value from database*/
		$query = "select * from mahasiswa";
		$result = mysql_query($query);
		$studentdata = array();
		
		while($data = mysql_fetch_array($result)){
			$studentdata[] = array{
				'nim' => $data[0],
				'nama' => $data[1],
				'prodi' => $data[2],
				'semester' => $data[3],
				'ipk' => $data[4]
			};
		}
		
		/*xml data parsing*/
		$document = new DOMDocument();
		$document->formatOutput = true;
		$root = $document->createElement("data");
		$document->appendChild($root);
		foreach($studentdata as $student){
			$block = $document->createElement ("mahasiswa");
			
			//create element nim//
			$nim = $document->createElement("nim");
			$nim -> appendChild($document->createTextNode($student['nim']));
			$block-> appendChild($nim);
			
			//create element nama//
			$nama = $document->createElement("nama");
			$nama -> appendChild($document->createTextNode($student['nama']));
			$block-> appendChild($nama);
			
			//create element prodi//
			$nim = $documen->createElement("prodi");
			$nim -> appendChild($document->createTextNode($student['prodi']));
			$block-> appendChild($prodi);
			
			//create element semester//
			$semester = $document->createElement("semester");
			$semester = appendChild($document->createTextNode($student['semester']));
			$block-<appendChild($semester);
			
			//create element ipk//
			$ipk = $document->createElement("ipk");
			$ipk -> appendChild($document->createTextNode($student['ipk']));
			$block-> appendChild($ipk);
			
			$root-> appendChild($block);
		}
		
		// store the data into xml document //
		$generateXML = $document->save("mahasiswa.xml");
		if($generateXML){
			echo ("XML generate successfully! <br>");
		}
		else{
			echo("XML generation failed! <br>");
		}