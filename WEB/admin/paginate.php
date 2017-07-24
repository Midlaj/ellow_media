<?php
ob_start();
error_reporting(0);

	$param = $option['param'];
	$pass = "";
		foreach($param as $key=>$value){
			$pass .= "$key=$value&";
		}
	
	$counter = (int) $option['counter'];
	$limit = (int) $option['limit'];
	$totalrow = (int) $option['totalrow'];
	$type = (int) $option['type'];
	$splitpage = ceil($totalrow/$limit);
	
	$html='';	
	if($counter!=0)
	{
	$prv=$counter-1;
	$url = $option['url'].'?counter='.$prv.'&'.$pass;
	$html.= "<a href='".$url."' onclick='return paginate(".$prv.")' class=pagenext>Prev</a>";
	}	else	{	$html.= "<span class=pagenext>Prev&nbsp;&nbsp;</span>";	}
	
	
	
	$iof=floor($counter/$limit)*$limit;
	$next=$counter+1;
	$totalrow2=ceil($totalrow/$limit)-1;
	$limitone=$iof+$limit;
	
	$splitpage=ceil($totalrow/$limit);
	$limitone;
	
	if($splitpage>$limit)	{	if($limitone>$splitpage) $limitof=$splitpage; else $limitof=$limitone;	}
	else { $limitof=$splitpage; }
		
	
	for($i=$iof,$i1=0;$i<$limitof; $i++,$i1++ )
	{
	$pages=$i+1;
	$label="&nbsp;|&nbsp;"; 
	
	$url = $option['url'].'?counter='.$i.'&'.$pass;
	if($i!=$counter)
	{
	$html.= "<a href='".$url."' onclick='return paginate(".$i.")'  class=$css>".$pages."</a>";
	}else{ $html.= "<span class=$css>".$pages."</span>"; }
	}//end of for
	
	
	
	
	if($splitpage>($limit+1))
	{
	if($counter==$totalrow2)
	{ $html.= ".......<span class=text_jobsector>".$splitpage."</span><span class=text_jobsector>".$label."</span>";}
	else{
	$url = $option['url'].'?counter='.$totalrow2.'&'.$pass;
	$html.= "......<a href='".$url."' onclick='return paginate(".$totalrow2.")'   class>".$splitpage."</a><span class=text_jobsector>".$label."</span>"; }
	}
	
	//----------------next
	if($counter<$totalrow2)
	{
	$url = $option['url'].'?counter='.$next.'&'.$pass;	
	$html.= "<a href='".$url."'  onclick='return paginate(".$next.")' class=pageprev>Next</a>";
	}
	else	{	$html.= "<span class=pageprev>Next</span>";	}
	echo $html;
	?>