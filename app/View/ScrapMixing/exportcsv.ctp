<?php 

	//$line= $posts[0]['m'];
// ECHO'<PRE>';print_r($posts);die;
	
	$i=0;
	foreach($posts as $p):
		//ECHO'<PRE>';print_r($p);die;
		$line[$i]['date']=$p['scrap_mixings']['date'];
		$line[$i]['scrap_print']=$p['scrap_mixings']['scrap_sent'];
		$line[$i]['weight']=$p['scrap_mixings']['weight'];
		
		$i++;
	endforeach;
	//print'<pre>';print_r($line);print'</pre>';die;
	$this->CSV->addRow(array_keys($line));
	$j=0;
	//echo $this->CSV->addRow('Material','Total','Percentage');
	//print'<pre>';print_r($posts);print'</pre>';die;
	foreach ($posts as $post)
	{
		
	    echo $this->CSV->addRow($line[$j]);
	    $j++;
	 }
	 $filename='ScraptoMixingPDF';
	 echo  $this->CSV->render($filename);
?>