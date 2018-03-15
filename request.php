---
layout: default
section_id: contact
---

<?php
/**
 * This example shows how to handle a simple contact form.
 */
$msg = '';
//Don't run this unless we're handling a form submission
    require '../PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('team@ura.design', 'Ura Design');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('anxhelo1995@gmail.com', 'Anxhelo Lushka');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>

<div class="three spacing"></div>
<div class="full">
      <div class="large-9 large-centered columns">
      <h3>Email Us</h3>
      <p>Convinced yet? If you need some design magic for your open source project, send us your submission so we can help you. Don’t worry if you are on a tight budget!</p>
  <p>Fields marked with an * are required.</p>
      </div>
      <div class="one spacing"></div>
  <div class="row">
    <div class="large-10 large-centered columns">
      <div class='form'>
        <form id='contact_form' method='POST'>
          <p id='thanks' class='hide'>
            Thanks for contacting us, we'll be in touch soon!
          </p>
              <p>Project name: *<br />
          <input class='required' name='projectname' placeholder='Project Name' type='text'></p>
              <p>Requester Name: *<br />
          <input class='required' name='name' placeholder='NAME' type='text'></p>
              <p>E-mail: *<br />
          <input class='required email' name='email' placeholder='EMAIL' type='text'></p>
              <p>What services do you need? *<br />
              <input type="checkbox" name="Logo" value="1"> Logo/Visual Identity<br />
              <input type="checkbox" name="StyleGuide" value="0"> Style Guide<br />
              <input type="checkbox" name="Consultancy" value="0"> UX Design & Consultation<br />
              <input type="checkbox" name="Copywriting" value="0"> Copywriting<br />
              <input type="checkbox" name="Usability" value="0"> Usability Audit<br />
              <input type="checkbox" name="Research" value="0"> User Research<br /></p>
              <p>Tell us about your project with how much or little information you want to share: *<br />
                    <textarea class='required' name='message' placeholder='Details'></textarea></p>
              <p><strong>Usability Lab</strong><br />
              Are you interested to apply for Open Tech Fund's Usability Lab if your project meets the criteria? Read more <a href="https://www.opentech.fund/lab/usability-lab" target="_blank">here</a>:</p>
               <input type="radio" name="lab" value="yes"> Yes<br>
               <input type="radio" name="lab" value="no"> No<br>
              <div class="one spacing"></div>
              <p><strong>Budget (USD $)</strong><br />
              If you are not meeting the Usability Lab criteria, let us know what your budget is. We will get back to you afterwards. Alternatively you can also ask a quote by contacting us.</p>
                  <input class='required' name='budget' placeholder='0' type='number' min="0" max="9999999"></p>
            <p><strong>We partnered with Stickermule which supports many Open Source projects already! All approved projects can choose to receive a $50 Stickermule coupon to get started</strong>.</p>
          <div class='spacing'></div>
          <input class='button boxed blue' type='submit'>
        </form>
      </div>
    </div>
  </div>
</div>
      <div class="three spacing"></div>
