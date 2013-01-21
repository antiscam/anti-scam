<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.pageBar{
	background-color:#87f596;
	width:420px;
	height:36px;
	background:-o-linear-gradient(bottom, #e6e6e6 5%, #dddddd 100%);
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.1, #e6e6e6), color-stop(1, #dddddd) ); 
	background:-moz-linear-gradient( center top, #e6e6e6 5%, #dddddd 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e6e6e6", endColorstr="#dddddd");
	background: -o-linear-gradient(top,#e6e6e6,#dddddd);
	margin:0px;
	padding:0px;
}
.pageBar .button{
	width:20px;
	height:22px;
	border:1px solid #acacac;
	
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;

	
	background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(241,241,241,1) 50%, rgba(225,225,225,1) 51%, rgba(246,246,246,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(50%,rgba(241,241,241,1)), color-stop(51%,rgba(225,225,225,1)), color-stop(100%,rgba(246,246,246,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* IE10+ */	
background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */

}

.pageBar .button:hover{
	cursor:pointer;
}

.pageBar .arrowLeft{
	width: 0; 
	height: 0; 
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;	
	border-right: 6px solid blue;
	border-left:0px;
	margin:0 auto;
}
.pageBar .arrowRight {
	width: 0; 
	height: 0; 
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;	
	border-left: 6px solid blue;
	border-right:0px;
	margin:0 auto;

}
.pageBar .line{
	height:12px;
	width:3px;
	background-color:blue;
}

.pageBar .floatL{
	margin:0;
	float:left;
}

.pageBar .floatR{ margin:0; float:right;}


.pageBar .toEnd{
	width:10px;
}


.space{
width:100%;
height:6px;
}

.pageBar .pageNumber{
height:auto;
width:25px;
}

.pageBar .table{
	border:0;
	margin:0 auto;
}
.pageBar .table td{
	padding-left:5px;
}
</style>

<div class="pageBar">
    <div class="space"></div>
    <table class="table">
	    <tr>
        	<td>
                <form method="post" class="forms" action="../report.php">
                    <button class="button"> <!--onclick="location.href='../index.php'" for input type button-->
                    <div class="toEnd"><div class="line floatL"></div> <div class="arrowLeft floatR"></div></div>
                    </button>	
                </form>
            </td>
            <td>
                <form method="post" class="forms" action="../index.php">
                    <button class="button"><div class="arrowLeft"></div>
                    </button>
                </form>
            </td>
            <td></td>
            <td>
        	    Page <input type="number" placeholder="1" class="pageNumber"/> of 200
            </td>
            <td></td>
            <td>
                <form method="post" class="forms" action="../index.php">
                    <button class="button"><div class="arrowRight"></div>
                    </button>
                </form>
            </td>
            <td>
                <form method="post" class="forms" action="../index.php">
                    <button class="button">
                    	<div class="toEnd"><div class="line floatR"></div> <div class="arrowRight floatL"></div></div>
                    </button>
                </form>
            </td>
            <td></td>
            <td>
            	Results 1-10 of 200
            </td>
            
        </tr>
    </table>
</div>