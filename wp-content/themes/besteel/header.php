<!DOCTYPE html>
<html class="no-js" lang="fr">
    <head>
        <title><?php wp_title(''); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
		if (screen.width < 950){
		    var viewport = document.querySelector("meta[name=viewport]");
		    viewport.parentNode.removeChild(viewport);
		
		    var newViewport = document.createElement("meta");
		    newViewport.setAttribute("name", "viewport");
		    newViewport.setAttribute("content", "width=950");
		    document.head.appendChild(newViewport);
		}
	</script>
        
        <meta name="description" content="<?php echo(get_bloginfo('description')); ?>">
        <meta name="author" content="Blue Pixel">
        <link href="<?php theme_url('assets/css/front.min.css?v=1.2'); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
        <link rel="shortcut icon" href="<?php theme_url('assets/img/icon/favicon.ico'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php theme_url('assets/img/icon/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php theme_url('assets/img/icon//apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php theme_url('assets/img/icon/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php theme_url('assets/img/icon/apple-touch-icon-57-precomposed.png'); ?>">
        <?php wp_head(); ?>
    </head><!--/head-->
    <body <?php body_class(); ?> >
        <header class="header" role="banner">
            <div class="wrapper"><!--
            --><div class="headerLogo">
<!--                     <img class="headerLogo__img" src="<?php theme_url('assets/img/logo.svg'); ?>" alt="<?php _e('Logo de BeSteel','blue'); ?>" /> -->
                    <?php if (is_home()): ?>
                    <h1 class="headerLogo__heading"><?php _e('BeSteel','blue'); ?></h1>
                    <?php else: ?>
                    <h1 class="headerLogo__heading"><?php the_title(); ?></h1>
                    <?php endif; ?>
                    <a class="headerLogo__link" href="<?php echo(home_url()); ?>"><?php _e('Retourner à la page d’accueil','blue'); ?></a>
                </div><!--
             --><a class="header__phone" href="tel:<?php echo(cleanTel(get_field("phone",22))); ?>"><i class="icon icon-phone" aria-hidden="false"></i><?php echo(get_field("phone",22)); ?></a><!--
	           --><nav class="langNav">
		            <h2 class="hidden"><?php _e('Choissisez votre langue','blue'); ?></h2>
		            <?php foreach(getLangMenu() as $lang): ?>
<!--
		            <a class="langNav__item" href="<?php echo($lang->url); ?>">
			            <img class="" src="<?php echo($lang->flag); ?>" alt="<?php echo($lang->name); ?>" />
			            <abbr class="hidden" title="<?php echo($lang->name); ?>"><?php echo($lang->code); ?>
			        </a>
-->
		            <?php endforeach; ?>
		            <?php do_action('wpml_add_language_selector'); ?>
	            </nav><!--
             --><nav class="mainNav">
                    <h2 class="hidden"><?php _e('Navigation principal','blue'); ?></h2>
                    <ul><!--
                        <?php foreach (cleanMenu('mainMenu') as $k => $item): ?>
                     --><li class="mainNav__item <?php if($item->childs): ?> mainNav__item--hasChilds <?php endif; ?>">
                            <a class="mainNav__link <?php if($item->isCurrent): ?> mainNav__link--current <?php endif; ?>"  href="<?php echo($item->url) ?>"><?php echo($item->label) ?></a>

                            <?php if ($item->childs): ?>
                            <ul class="mainNav__childs">
                                <?php foreach ($item->childs as $sItem): ?>
                                <li class="mainNav__sItem">
                                    <a class="mainNav__sLink <?php if($sItem->isCurrent): ?> mainNav__sLink--current <?php endif; ?>"  href="<?php echo($sItem->url) ?>"><?php echo($sItem->label) ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li><!--
                        <?php endforeach; ?>
                 --></ul>
                </nav><!--
	        
         --></div>
        </header>
        <main class="mainContent">
