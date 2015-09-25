<?php
class block_epinoo_header extends block_base {
    public function init() {
        $this->title = get_string('epinoo_header', 'block_epinoo_header');
    }

  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    ob_start();
	?>
	<div class='epinooheader'>
		<a href="https://epinoodev.ellak.gr">EPINOO.gr</a>
		<a href="https://facebook.com/epinoo">FACEBOOK COMMUNITY BUILDING APP</a>
		<a class="selected" href="#">MOODLE</a>
	</div>
	<?php
	$this->content->text   =  ob_get_contents();
	ob_end_clean();
	
    $this->content->footer = '';
 
    return $this->content;
  }
  
  function hide_header() {
      return true;
  }
}

?>
<style>
	.block_epinoo_header { 
		background-color: transparent !important;
		
		border:0 !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		box-shadow: none !important;
	}
	.block_epinoo_header .content { padding:0 !important;}
	.epinooheader a,.epinooheader a:visited { padding:5px 5px; background: #014D6D; color: white; font-weight: bold;  font-size:12px; display:block; margin-bottom:2px; }
	.epinooheader a:hover { color:#EF8004; text-decoration:none; }
	.epinooheader a.selected{  background:#EF8004; }
	.epinooheader a.selected:hover { color:white; }
</style>
