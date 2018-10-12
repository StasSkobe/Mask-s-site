<?php

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
// $this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add template js
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));

// Use of Google Font
if ($this->params->get('googleFont'))
{
	JHtml::_('stylesheet', '//fonts.googleapis.com/css?family=' . $this->params->get('googleFontName'));
	$this->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . str_replace('+', ' ', $this->params->get('googleFontName')) . "', sans-serif;
	}");
}

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>SpaceX</title>
		<link rel="stylesheet" href="templates/spacextmp/css/bootstrap.min.css">
        <link rel="stylesheet" href="templates/spacextmp/css/libs.min.css">
		<link rel="stylesheet" href="templates/spacextmp/css/template.css">
		<script src="templates/spacextmp/js/jquery-3.3.1.min.js"></script>
        <script src="templates/spacextmp/js/libs.min.js"></script>
        <script src="templates/spacextmp/js/template.js"></script>
		<link href="templates/spacextmp/img/favicon.ico" rel="icon" type="image/png">
	</head>
<body>
	<!-- Body -->
	<header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-8r">
                    <div class="logo-block">
                        <img src="templates/spacextmp/img/space.png" alt="logo">
                    </div>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-8r">
                    <a href="#" class="burger-icon">
                        <span></span>
                    </a>
                    <div class="navbar">
                        <a class="navbar--links" href="#">
                            Главная
                        </a>
                        <a class="navbar--links" href="#">
                            Технология
                        </a>
                        <a class="navbar--links" href="#">
                            График полетов
                        </a>
                        <a class="navbar--links" href="#">
                            Гарантии
                        </a>
                        <a class="navbar--links" href="#">
                            О компании
                        </a>
                        <a class="navbar--links" href="#">
                            Контакты
                        </a>
                    </div>
                </div>
			</div>
		</div>	
					<jdoc:include type="modules" name="top-menu"/>
				
				<!--END HEADER -->
			
			<!--—BEGIN MAIN CONTENT -->
			<section id="main-content" class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-8r">
                    <h1 class="title-container__text title-container__text--title">
                        Путешествие
                    </h1>
                    <p class="title-container__text title-container__text--subtitle">
                        на красную планету
                    </p>
                    <jdoc:include type="component"/>
                    <a href="#" class="fly--btn">
                        Начать путешествие
                    </a>
                    <svg height="100" width="500">
                        <linearGradient id="grad1">
                            <stop offset="0%" style="stop-color:transparent;" />
                            <stop offset="20%" style="stop-color:rgba(255,255,255,0.3);" />
                            <stop offset="100%" style="stop-color:#fff;" />
                        </linearGradient>
                        <polyline points="0,0 70,55 387,55" style="fill:none;" stroke="url(#grad1)" stroke-width="1"
                            stroke-linecap="round" />
                        <circle cx="390" cy="55" r="3" fill="white" />
                        <circle cx="390" cy="55" r="1.5" fill="black" />
                    </svg>

                </div>
                <div class="col-xs-5 col-sm-5 col-md-8r">
                    <div class="info--block">
                        <div class="bonus-block">
                            <p>
                                Мы <br><span>1</span><br> на рынке
                            </p>
                        </div>
                        <div class="bonus-block">
                            <p>
                                Гарантируем <br> <span>50%</span> <br> безопасность
                            </p>
                        </div>
                        <div class="bonus-block">
                            <p>
                                Календарик за <br><span>2001</span>г.<br> в подарок
                            </p>
                        </div>
                        <div class="bonus-block">
                            <p>
                                Путешествие<br> <span>597</span><br> дней
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--—END MAIN CONTENT -->
</body>

</html>
<!-- End Body -->