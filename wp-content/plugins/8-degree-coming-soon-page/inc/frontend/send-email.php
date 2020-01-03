<?php
    //die('reached');
    $name = sanitize_text_field($_POST['name']);
    $settings_data = get_option('maintenance_settings');
    $admin_email = $settings_data['email_address'];
    $email = sanitize_text_field($_POST['email']);
    $msg = sanitize_text_field($_POST['msg']);
   // $no_reply = 'noreply@'.site_url();
    $site_name = site_url();
    $blog_title = get_bloginfo( 'name' ); 

        $message = 'Hi there, <br/><br/>
                You have got a new visitor at '.$site_name.'<br/><br/> 
                <strong>Visitor Details</strong> <br>
                Name: '.$name.'<br/>
                Email: '.$email.'<br/>Message: '.$msg.'<br/><br/> Thank you!';

         $subject = 'Contact Details From Visitors';

         
         $headers[]= 'Content-type: text/html';
         $headers[]= 'From: '.$blog_title.' <noreply@no-reply.com>';
         $headers[]= "Reply-To: $email";
         $headers[]= 'X-Mailer: PHP/' . phpversion();
            $mail = wp_mail( $admin_email, $subject, $message, $headers);   
            if($mail){
                echo "1";
            }else{
                echo "0";
            }

    
    
  