<?php
/**
 * This function is for escaping strings
 * You can use it everywhere
 * Exmaple:
 * $phone = '+1 (758) 422-555-222';
<a href="tel:<php echo am_esc($phone, 'phone'); ?>"><php echo $phone; ?></a>
it will return <a href="tel:+1758422555222">+1 (758) 422-555-222</a>
 */
function am_esc($value, $esc){
    try {
        switch ($esc) :
            case 'url':
                $toReturn = esc_url($value);
                break;
            case 'attr':
                $toReturn = esc_attr($value);
                break;
            case 'html':
                $toReturn = esc_html($value);
                break;
            case 'email':
                // $hex_encoding = true
                $toReturn = antispambot($value, true);
                break;
            case 'email2':
                $toReturn = antispambot($value, false);
                break;
            case 'phone':
                $toReturn = str_replace(array('(', ')', ' ', '-', '.', ','), '', $value);
                break;
            case '':
                $toReturn = $value;
                break;
            default:
                throw new Exception();
                break;
        endswitch;
        return $toReturn;
    } catch (Exception $e) {
        $trace = $e->getTrace()[0];
        ob_clean();
        printf(
            __( "Invalid escaping type (%s) provided for am_esc() in %s on the line %s!", 'am' ),
            $esc,
            $trace['file'],
            $trace['line']
        );
        exit();
    }
}
