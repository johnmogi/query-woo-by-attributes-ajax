
// Search box and ajax search
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() { ?>


<script type="text/javascript">
  function fetch(){ 
	  var amountNumber = jQuery('#participentsNumber').val()
	   jQuery('#fetched_data').html( amountNumber );


  jQuery.ajax({
   url: '/wp-json/wc/v3/products?consumer_key=ck_117b28a34356ce80179af73b10ea2f55cc8d374e&consumer_secret=cs_d1c8437af138118a68a75822b38dc8cd55b1f37e',
    /*  url: '<! php echo admin_url('admin-ajax.php'); ?>', */
      type: 'get',
      data: { action: 'data_fetch', keyword:jQuery('#keyword').val()    
    },
   success: function(data) 
    {
		console.log(data);
   /*  jQuery('#fetched_data').html( data ); */
    }
   });  
	  
	  
  }
</script>
<?php }
