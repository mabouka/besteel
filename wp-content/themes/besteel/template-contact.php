<?php /* Template Name: Contact */ ?>

<?php 
	if( isset($_POST['submit']) ) { 
		$error = "";
		$message = "";
		$admin_email = get_option('admin_email');
		
		$nom = htmlspecialchars($_POST['nom']);
		$email = htmlspecialchars($_POST['mail']);
		$tel = htmlspecialchars($_POST['phone']);
		$message = htmlspecialchars($_POST['message']);
		
		/* Mesure anti-spam */
		sleep(1);
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\n";
		
		$headers .= 'From: ' . $email . "\n" .
		'Reply-To: ' . $email . "\n" .
		'X-Mailer: PHP/' . phpversion();
		
		if( empty($email) ) {
			$error .= __("Le champ email ne peut être vide <br />", 'blue');
		} 
			
		if( empty($nom) )
			$error .= __("Le champ nom ne peut être vide <br />", 'blue');
			
		if( empty($tel) )
			$error .= __("Le champ téléphone ne peut être vide <br />", 'blue');
			
		if( empty($message) )
			$error .= __("Le champ message ne peut être vide <br />", 'blue');

			
		if( empty($error) ) {

		
				$texte = 'Nouveau message depuis le site Be Steel:<br /><br />';
				$texte .= 'Nom : ' .$nom . '<br />';
				$texte .= 'Email : ' .$email . '<br />';
				$texte .= 'Téléphone : ' .$tel . '<br />';
				$texte .= 'Message : ' .nl2br($message);
			
				if(! mail($admin_email, "Be Steel - Demande de contact", $texte , $headers))
				{
					$error = __("Impossible d'envoyer l'email. Merci d'essayer à nouveau plus tard", 'blue');
				} else {
					$success = __("Votre email a été envoyé avec succès.", 'blue');
				}
		}
				
	} 
?>


<?php get_header(); ?>

<section class="infoContact">
    <div class="wrapper">
        <h2 class="hidden"><?php _e('Informations de contact', 'blue'); ?></h2>

        <section class="infoContact__item">
            <h3 class="infoContact__title"><?php _e('Téléphone', 'blue'); ?></h3>
            <i class="infoContact__icon icon icon-phone" aria-hidden="true"></i>
            <span class="infoContact__content"><?php echo(get_field("phone",22)); ?></span>
            <a class="infoContact__link" href="tel:<?php echo(cleanTel(get_field("phone",22))); ?>" ><?php _e('Applez nous','blue'); ?></a>
        </section>

        <section class="infoContact__item">
            <h3 class="infoContact__title"><?php _e('E-mail', 'blue'); ?></h3>
            <i class="infoContact__icon icon icon-envelope" aria-hidden="true"></i>
            <span class="infoContact__content"><?php echo(get_field("email",22)); ?></span>
            <a class="infoContact__link" href="mailto:<?php echo(get_field("email",22)); ?>" ><?php _e('Envoyez nous un e-mail !','blue'); ?></a>

        </section>

        <section class="infoContact__item">
            <h3 class="infoContact__title"><?php _e('Fax', 'blue'); ?></h3>
            <i class="infoContact__icon icon icon-fax" aria-hidden="true"></i>
            <span class="infoContact__content"><?php echo(get_field("fax",22)); ?></span>
        </section>

        <section class="infoContact__item">
            <h3 class="infoContact__title"><?php _e('Skype', 'blue'); ?></h3>
            <i class="infoContact__icon icon icon-skype" aria-hidden="true"></i>
            <span class="infoContact__content"><?php echo(get_field("skype",22)); ?></span>
            <a class="infoContact__link" href="skype:<?php echo(get_field("skype",22)); ?>?call" ><?php _e('Applez nous !','blue'); ?></a>

        </section>


    </div>
    </div>
</section>

<section class="addressContact">
    <div class="wrapper">
        <h2 class="hidden"><?php _e('Adresse', 'blue'); ?></h2>
        <p class="addressContact__name"><?php echo(get_field("address_name",22)); ?></p>
        <p class="addressContact__line"><?php echo(get_field("address_street",22)); ?></p>
        <p class="addressContact__line"><?php echo(get_field("address_zipcode",22)); ?> <?php echo(get_field("address_city",22)); ?></p>

    </div>
</section>

<section class="contactForm">
    <div class="contactForm__content">
        <h2 class="contactForm__title"><?php _e('N’hésitez pas à nous contacter!', 'blue'); ?></h2>
		<?php if( !empty( $success ) ) { ?>
			<div id="success-content" style="text-align: center; padding: 15px; border: 2px solid green;">
				<?php echo $success; ?>
			</div>
		<?php } else { ?>
		
			<?php if ( !empty( $error ) ) { ?>
				<div id="error-content" style="text-align: center; padding: 15px; border: 2px solid red; margin-bottom: 30px;">
					<?php echo $error; ?>
				</div>
			<?php } ?>
		
	        <form class="contactForm__form" action="./" method="post">
	            <div class="fields">
	                <div class="field">
	                    <label class="field__label" for="name"><?php _e('Nom', 'blue'); ?></label>
	                    <input class="field__input" type="text" name="nom" id="name">
	                </div>
	
	                <div class="field">
	                    <label class="field__label" for="email"><?php _e('Email', 'blue'); ?></label>
	                    <input class="field__input" type="email" name="mail" id="email">
	                </div>
	
	                <div class="field">
	                    <label class="field__label" for="phone"><?php _e('Téléphone', 'blue'); ?></label>
	                    <input class="field__input" type="tel" name="phone" id="phone">
	                </div>
	            </div>
	
	            <div class="textarea">
	                <label class="textarea__label" for="message"><?php _e('Votre message', 'blue'); ?></label>
	                <textarea class="textarea__input" name="message" id="message" placeholder="<?php _e('Introduisez votre message', 'blue'); ?>"></textarea>
	            </div>
	
	            <input class="submit" type="submit" name="submit" value="<?php _e('Envoyer', 'blue'); ?>">
	
	        </form>
	        
	    <?php } ?>

    </div>
</section>



<?php get_footer(); ?>
