<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" data-locale="<?php p($_['locale']); ?>" >
	<head
<?php if ($_['user_uid']) { ?>
	data-user="<?php p($_['user_uid']); ?>" data-user-displayname="<?php p($_['user_displayname']); ?>"
<?php } ?>
 data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">
		<title>
		<?php p($theme->getTitle()); ?>
		</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php } ?>
		<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
		<link rel="icon" href="<?php print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?>">
		<link rel="apple-touch-icon" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
		<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('', 'favicon-mask.svg')); ?>" color="<?php p($theme->getColorPrimary()); ?>">
		<link rel="manifest" href="<?php print_unescaped(image_path('', 'manifest.json')); ?>">
		<?php emit_css_loading_tags($_); ?>
		<?php emit_script_loading_tags($_); ?>
		<link rel="stylesheet" href="/themes/b2drop/core/css/bootstrap-grid.min.css" type="text/css"/>
		<link rel="stylesheet" href="/themes/b2drop/core/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="/themes/b2drop/core/css/server.css" type="text/css"/>
		<?php foreach($_['printcssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="print">
		<?php endforeach; ?>
		<?php if (isset($_['inline_ocjs'])): ?>
			<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" type="text/javascript">
				<?php print_unescaped($_['inline_ocjs']); ?>
			</script>
		<?php endif; ?>
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>
		<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" src="/themes/b2drop/core/js/theme-fixes.js"></script>
		<script nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>" src="/themes/b2drop/core/js/bootstrap.min.js"></script>
		<?php print_unescaped($_['headers']); ?>
    </head>
    <body id="<?php p($_['bodyid']);?>">
        <?php if ($_['bodyid'] === 'body-login' ): ?>
        <div class="page-wrap">
			<div class="primary-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="section-link">
								<div style="padding: 10px; font-size: 14px;">&nbsp;</div>
							</div>
						</div>
						<div class="col-md-6">
						</div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2 align-self-center" style="max-width: 199px">
							<div class="logo">
								<img src="/themes/b2drop/core/img/csc.png" alt="CSC+logo" width="199px">
							</div>
						</div>
						<div class="col-md-2 align-self-center" >
						<img src="/themes/b2drop/core/img/logo.png" alt="Placeholder+logo" width="199px">
							<div class="logo">
							</div>
						</div>
						<div class="col-md-8" style="flex: 0 0 50%; max-width: 50%">
							<div id="menu">
								<ul>
									<li><a href="/themes/b2drop/faq.html">FAQS</a></li>
									<li><a target="_blank" href="https://eudat.eu/services/b2drop">What is B2DROP</a></li>
									<li><a target="_blank" href="https://eudat.eu/services/userdoc/b2drop">USER GUIDE</a></li>
									<li><a target="_blank" href="mailto:servicedesk@csc.fi?subject=CSC Eudat B2DROP">CONTACT</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
			</div>
		</div>

        <div id="page">
            <div class="container" id="b2access-login">
                <div class="col-xs-12 col-sm-6 col-md-6 description-home">
                    <?php print_unescaped($_['content']); ?>
					<?php if(isset($_['alt_login'])): foreach($_['alt_login'] as $altlogin): ?>
						<a class="btn btn-primary btn-block active" href="<?php print($altlogin["href"]) ?>"><?php print($altlogin["name"]) ?></a>
					<?php endforeach; endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="page-wrap">
			<div class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2 align-self-center">
							<div class="logo">
								<img src="/themes/b2drop/core/img/Logo_eudat_CDI_white.svg" alt="Placeholder+logo" width="201px">
								<p>© 2019 EUDAT Collaborative Data Infrastructure </p>
							</div>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div id="menu">
								<ul>
									<li><a target="_blank" href="/themes/b2drop/acceptable-use-policy.html">Acceptable Use Policy</a></li>
									<li><a target="_blank" href="https://csc-eudat.pages.eudat.eu/privacy-policy/" rel="noreferrer noopener">Data Privacy Statement</a></li>
									<li><a target="_blank" href="https://eudat.eu/">About EUDAT</a></li>
								</ul>
							</div>
						</div>
					</div>
                </div>
                <div class="secondary-footer" style="padding:0px 15px;">
                    <div class="line" style="margin-bottom:15px;width:100%;border-bottom: 1px solid #888;"></div>
                    <div style="display: table; width: 100%;">
                        <div style="display: table-cell; width:60px;">
                            <img src="/themes/b2drop/core/img/euflag.png" height="40px;">
                        </div>
                        <div style="display: table-cell; padding-left:15px; width:135px">
                            <img src="/themes/b2drop/core/img/EOSC-hub-extended-grey.png" height="40px;">
                        </div>
                        <div style="display: table-cell; padding-top:10px; color:#fff;font-size:12px;font-weight:400;">B2DROP is co-funded by the EOSC-hub project (Horizon 2020) under Grant number 777536</div>
                        <div class="container-fluid">
                            <p>Powered by Nextcloud</p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </body>
</html>
