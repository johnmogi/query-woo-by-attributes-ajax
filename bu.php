<?php

/**
 * Child functions and definitions.
 */

add_action('astra_header', 'cb_child_do_header', -999);
add_action('astra_footer', 'cb_child_do_footer', -999);

/**
 * Apply Crocoblock custom headers
 *
 * @return [type] [description]
 */
function cb_child_do_header()
{
    cb_child_process_location('header', true);
}

/**
 * Apply Crocoblock custom footers
 *
 * @return [type] [description]
 */
function cb_child_do_footer()
{
    cb_child_process_location('footer', true);
}

/**
 * Process single location
 *
 * @return void
 */
function cb_child_process_location($location = null, $cleanup = false)
{

    if (!function_exists('jet_theme_core')) {
        return false;
    }
    if (!defined('ELEMENTOR_VERSION')) {
        return false;
    }

    $done = jet_theme_core()->locations->do_location($location);

    if ($done && $cleanup) {
        $hook = current_filter();
        remove_all_actions($hook);
    }

    return $done;
}

function my_super_filer_function($query_args)
{
    $query_args['meta_key'] = 'my_super_filer_function';
    $query_args['meta_value'] = 1;
    return $query_args;
}
add_filter('my_super_filter', 'my_super_filer_function');


// Search box and ajax search
add_action('wp_footer', 'ajax_fetch');
function ajax_fetch()
{ ?>


    <script type="text/javascript">
        function fetch() {
            jQuery('#fetched_data').html('');
            jQuery("#fetched_data").append("<img id='theImg' src='/wp-content/uploads/2021/03/Spinner-1s-200px.gif'/>");
            let retrievedProducts = [];
            var amountNumber = jQuery('#participentsNumber').val()


            setTimeout(() => {
                jQuery.ajax({
                    url: '/wp-json/wc/v3/products?consumer_key=ck_117b28a34356ce80179af73b10ea2f55cc8d374e&consumer_secret=cs_d1c8437af138118a68a75822b38dc8cd55b1f37e',
                    /*  url: '<! php echo admin_url('admin-ajax.php'); ?>', */
                    type: 'get',
                    data: {
                        action: 'data_fetch',
                        keyword: jQuery('#keyword').val()
                    },
                    success: function(data) {
                        data.forEach(item => {
                            retrievedProducts.push(item);

                        });

                        var returned = data.reduce((returned, item) => {
                            if (item.attributes.id = 1) {
                                returned.push(item.attributes);
                            }
                            return returned;
                        }, []);

                        jQuery('#fetched_data').html(JSON.stringify(returned));




                        /*	console.log(data.attributes); */
                        /*  jQuery('#fetched_data').html( data ); */
                    }
                });

            }, 2000);
        }
    </script>
<?php }
