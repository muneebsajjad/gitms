<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clone in progress</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" media="all">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.17.custom.css" media="all">

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
</head>
<body>

<? print_r($_POST);
?>
<form class="well" name="clone_frm" id="clone_frm" action="" action="" method="post">
<table border="0" align="center" id="hor-minimalist-a" summary="Employee Pay Sheet">
    <thead>
    	<tr>
        	<th colspan="2" scope="col"><h1>Clone IN Progress</h1></th>
        </tr>
    </thead>
    
    <tbody>
    	<tr id="insert_r">
        	<td>Addition dates :</td>
            <td id="check"><input id="copy_it" type="text" name="add_date[]"  class="txt_date_picker" />&nbsp;&nbsp;<i onclick="add_date_in_dom()" style="cursor:pointer" class="icon-plus"></i></td>
        </tr>
        <tr id="copy_it">
        	<td>List :</td>
            <td>
             <ul id="list" class="nav nav-list">
            	<li id="1" class="nav-header">Electronics</li>
                <li id="2" class="active">Mouse</li>
                <li id="3">Keyboard</li>
            </ul></td>
        </tr>
        <tr>
        	<td>what you waiting for :</td>
            <td><input type="submit" value="Hit it."/></td>
        </tr>
    </tbody>
 
</table>   </form>
</body></html>

<script type="text/javascript">

$('.txt_date_picker').datepicker();

function add_date_in_dom(){
	//var clone=$('#copy_it').clone(true).attr("id",'copy_it_'+Math.floor((Math.random()*100)+1)).insertAfter($('#insert_r'));
	$('#insert_r').clone().insertAfter($('#insert_r'));
	
	}
</script>