<?php $anatomy = $this->options; ?>
var anatomy_config = {
	'default':{
		'borderclr':'<?php echo $anatomy['borderclr']; ?>',
	}<?php echo (isset($anatomy['url_1']))?',':''; ?><?php $i = 1; 	while (isset($anatomy['url_'.$i])) { ?>'anatomy_<?php echo $i; ?>':{
		'hover': '<?php echo str_replace(array("\n","\r","\r\n","'"),array('','','','’'), is_array($anatomy['info_'.$i]) ?
				array_map('stripslashes_deep', $anatomy['info_'.$i]) : stripslashes($anatomy['info_'.$i])); ?>',
		'url':'<?php echo $anatomy['url_'.$i]; ?>',
		'targt':'<?php echo $anatomy['turl_'.$i]; ?>',
		'enbl':<?php echo $anatomy['enbl_'.$i]=='1'?'true':'false'; ?>,
		}
		<?php echo (isset($anatomy['url_'.($i+1)]))?',':''; ?><?php $i++;} ?>
}