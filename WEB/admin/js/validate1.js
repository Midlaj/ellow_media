
///////////////delete function

function delabout(id)
{
var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_about.php?id="+id;}
}

function del_placement(id)
{
var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_placements.php?id="+id;}
}

function login_pwd()
{
	submitOK="true";
	var title=document.getElementById("username").value;
	var news=document.getElementById("password").value;
	
	 
	 if (title=="") 
	 {
	 alert("Fill User Name");
	 submitOK="false";
 	 }
	 else if(news=="")
	 {
	  alert("Fill Password");
	  submitOK="false";
	 }	
	
	if (submitOK=="false")
 		{
 		return false;
 		}
}
/////////////////////


///////////////////////////

// ActionScript Document
function photos()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var title=document.getElementById("title").value;









    if(title=="")
	{
	msg+="...Fill Title\n";
	submitok="false";
	}



	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





//////////////////////////








///////////////////////////

// ActionScript Document
function invest()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var title=document.getElementById("title").value;

var image=document.getElementById("image").value;









    if(title=="")
	{
	msg+="...Fill Title\n";
	submitok="false";
	}




	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





//////////////////////////

function val_reg()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var user=document.getElementById("username").value;
var pass=document.getElementById("password").value;

    if(name=="")
	{
	msg+="...Fill Name\n";
	submitok="false";
	}
    
	if(email=="")
	{
	msg+="...Fill Email\n";
	submitok="false";
	}

	if(email=="")
	{
	msg+="...Fill User Name\n";
	submitok="false";
	}

	if(email=="")
	{
	msg+="...Fill Password\n";
	submitok="false";
	}

	 

	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





//////////////////////////









///////////////////////////

// ActionScript Document
function oper()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var image=document.getElementById("image").value;












	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





///////////////////////////

// ActionScript Document
function heado()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var title=document.getElementById("title").value;
var subtitle=document.getElementById("subtitle").value;







    if(title=="")
	{
	msg+="...Fill Title\n";
	submitok="false";
	}

   if(subtitle=="")
	{
	msg+="...Fill Subtitle\n";
	submitok="false";
	}  


	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}


// ActionScript Document
function advn()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var title=document.getElementById("title").value;
var image=document.getElementById("image").value;







    if(title=="")
	{
	msg+="...Fill Title\n";
	submitok="false";
	}

 
    
	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	 

	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}

function advns()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var title=document.getElementById("title").value;







    if(title=="")
	{
	msg+="...Fill Title\n";
	submitok="false";
	}

	 

	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}



///////////////////////////

// ActionScript Document
function about()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var image=document.getElementById("image").value;
    var content=document.getElementById("content").value;









	
	


	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}

    if(content==0)
    {
        msg+="...Select content\n";
        submitok="false";
    }
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}



///////////////////////////

// ActionScript Document
function events()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var image=document.getElementById("image").value;

var name=document.getElementById("name").value;
var place=document.getElementById("place").value;
var content=document.getElementById("content").value;










	
	
    if(name=="")
	{
	msg+="...Fill Name\n";
	submitok="false";
	}
	   if(place=="")
	{
	msg+="...Fill Place\n";
	submitok="false";
	}

   if(content=="")
	{
	msg+="...Fill discription\n";
	submitok="false";
	}



	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}
















///////////////////////////

// ActionScript Document
function port()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var content=document.getElementById("content").value;











	
	
    if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}




///////////////////////////

// ActionScript Document
function servi()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var content=document.getElementById("content").value;
var content_1=document.getElementById("content_1").value;
var content_2=document.getElementById("content_2").value;












	
	
    if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}


	  if(content_1=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}


  if(content_2=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}




///////////////////////////

// ActionScript Document
function apli()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var content=document.getElementById("content").value;











	
	
    if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}



	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}






///////////////////////////

///////////////////////////

// ActionScript Document
function edu()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;

var content=document.getElementById("content").value;








	
	
    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	
	   if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}







///////////////////////////























////////////delete function

///////////////////////////

// ActionScript Document
function cate()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var category=document.getElementById("category").value;
var title=document.getElementById("title").value;

var image=document.getElementById("image").value;









	
	if(category==0)
	{
	msg+="...Select Product\n";
	submitok="false";
	}
	
    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}


	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}






function slidin()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";



var image=document.getElementById("image").value;









	


	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





///////////////////////////

////////////delete function



// ActionScript Document
function head()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;
var subtitle=document.getElementById("subtitle").value;











    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	
	
    if(subtitle=="")
	{
	msg+="...Fill subtitle\n";
	submitok="false";
	}

	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}







///////////////////////////

// ActionScript Document
function reg()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;

var image=document.getElementById("image").value;










    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	


	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}




function edit()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;











    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	

	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





function regup()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;
var subtitle=document.getElementById("subtitle").value;











    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	
	
    if(subtitle=="")
	{
	msg+="...Fill subtitle\n";
	submitok="false";
	}



	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}






///////////////////////////

////////////delete function




// ActionScript Document
function reged()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;
var subtitle=document.getElementById("subtitle").value;

var content=document.getElementById("content").value;










    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}
	
	
    if(subtitle=="")
	{
	msg+="...Fill subtitle\n";
	submitok="false";
	}

	  if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}







///////////////////////////

////////////delete function



// ActionScript Document
function news()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var title=document.getElementById("title").value;
var content=document.getElementById("content").value;
var image=document.getElementById("image").value;










    if(title=="")
	{
	msg+="...Fill title\n";
	submitok="false";
	}

	  if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}



// ActionScript Document
function pack()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var category=document.getElementById("category").value;

var price=document.getElementById("price").value;
var content=document.getElementById("content").value;
var image=document.getElementById("image").value;










    if(category=="")
	{
	msg+="...Fill packages\n";
	submitok="false";
	}
	
	
	if(price=="")
	{
	msg+="...Fill price\n";
	submitok="false";
	}

	  if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}

	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}





// ActionScript Document
function about()
{
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";

var ch;
var submitok=true;	
var msg="";
var headermsg="Following errors are containing,Please fill the requiring field!......\n";


var content=document.getElementById("content").value;
var image=document.getElementById("image").value;









	

	  if(content=="")
	{
	msg+="...Fill content\n";
	submitok="false";
	}


	if(image==0)
	{
	msg+="...Select Image\n";
	submitok="false";
	}
	
	
	if(msg!="")
	{
	alert(headermsg+msg);
	submitok="false";
	}
	else
		{
			ch=window.confirm("Please verify entries you have made,Please proceed only if correct");
			if(ch!=true)
			{
			submitok="false";	
			}
			
		}


if(submitok=="false")
{
	return false;
}

}




///////////////////////////

////////////delete function















function delloan(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_loan.php?id="+id;}
}
function delvdo(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_vdo.php?id="+id;}
}

function delfct(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_vdo.php?id="+id;}
}

function delsub(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_head.php?id="+id;}
}




function delbook(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_book.php?id="+id;}
}


function delservi(id){
    var ch=window.confirm("are you sure want delete this item?");
    if(ch==true){location="delete_ser.php?id="+id;}
}

function delbaner(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_baner.php?id="+id;}
}



function delcareer(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_career.php?id="+id;}
}


function delslid(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_sliding.php?id="+id;}
}




function delacces(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_acces.php?id="+id;}
}


function delcar(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_car.php?id="+id;}
}

function deltestii(id){
    var ch=window.confirm("are you sure delete want to this items?");
    if(ch==true){location="delete_testimonials.php?id="+id;}
}

function delvilla(id){
    var ch=window.confirm("are you sure delete want to this items?");
    if(ch==true){location="delete_villa.php?id="+id;}
}




function deldes(id){
    var ch=window.confirm("are you sure delete want to this items?");
    if(ch==true){location="delete_des.php?id="+id;}
}





function delappo(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_appointment.php?id="+id;}
}

function delbook(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_book.php?id="+id;}
}

function delcate(id){
	var ch=window.confirm("are you sure want to delete this item?");
	if(ch==true){location="delete_mission.php?id="+id;}
}

function delcat(id){
    var ch=window.confirm("are you sure?");
    if(ch==true){location="delete_categories.php?id="+id;}
}
/*function delnews(id){
    var ch=window.confirm("are you sure?");
    if(ch==true){location="delete_placements.php?id="+id;}
}
*/
function delabou(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_about.php?id="+id;}
}


/////////////////////

////////////delete function


function delnews(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_placements.php?id="+id;}
}


/////////////////////



////////////delete function


function deltest(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_test.php?id="+id;}
}

function delplace(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_place.php?id="+id;}
}
function delcat(id){
    var ch=window.confirm("are you sure want to delete this item?");
    if(ch==true){location="delete_categories.php?id="+id;}
}


function delpac(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_pack.php?id="+id;}
}



function delphot(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_team.php?id="+id;}
}


function deledu(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_edu.php?id="+id;}
}

function delapli(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_apli.php?id="+id;}
}

function delre(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_resume.php?id="+id;}
}

function delser(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_service.php?id="+id;}
}

function delport(id){
	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_port.php?id="+id;}
}

function delta(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_talent.php?id="+id;}
}

function deleve(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_events.php?id="+id;}
}

function delph(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_photo.php?id="+id;}
}

function delvide(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_video.php?id="+id;}
}


function deadv(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_adv.php?id="+id;}
}


function detest(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_testing.php?id="+id;}
}


function detestin(id){

    var ch=window.confirm("are you sure?");
    if(ch==true){location="delete_ts.php?id="+id;}
}



function deltesttt(id){

    var ch=window.confirm("are you sure want to delete this item?");
    if(ch==true){location="delete_testing.php?id="+id;}
}


function detestin(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_ts.php?id="+id;}
}



function deteabout(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_about.php?id="+id;}
}
function deteholi(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_holiday.php?id="+id;}
}

function detenewsss(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_news.php?id="+id;}
}


function deteinv(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_invest.php?id="+id;}
}


function detepro(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_product.php?id="+id;}
}


function deteabo(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_about.php?id="+id;}
}

function detelwr(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_works.php?id="+id;}
}

function detelser(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_service.php?id="+id;}
}
function detelsevr(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_services.php?id="+id;}
}

function detelpor(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_port.php?id="+id;}
}

function delsdes(id){

    var ch=window.confirm("are you sure?");
    if(ch==true){location="delete_sdes.php?id="+id;}
}
function detelsli(id){

	var ch=window.confirm("are you sure?");
	if(ch==true){location="delete_slid.php?id="+id;}
}


/////////////////////
