</div></div></div></main></div><script>/*<![CDATA[*/var site_url="<?php echo site_url();?>";/*]]>*/</script><script type="text/javascript" src="<?php echo resource_url('/assets/js/jquery-1.10.2.min.js');?>"></script> <script type="text/javascript" defer src="<?php echo resource_url('/assets/js/material.min.js');?>"></script><?php if(isset($js_lib)){foreach($js_lib as $jb){echo '<script type="text/javascript" src="'.resource_url($jb).'"></script>';}}if(isset($js)){foreach($js as $j){$this->view($j);}}?>
