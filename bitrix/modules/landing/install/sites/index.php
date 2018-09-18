<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>

<?$APPLICATION->IncludeComponent(
	'bitrix:landing.start',
	'.default',
	array(
		'COMPONENT_TEMPLATE' => '.default',
		'SEF_FOLDER' => '/sites/',
		'SEF_MODE' => 'Y',
		'TYPE' => 'PAGE',
		'SEF_URL_TEMPLATES' => array(
			'domain_edit' => 'domain/edit/#domain_edit#/',
			'domains' => 'domains/',
			'landing_edit' => 'site/#site_show#/#landing_edit#/',
			'landing_view' => 'site/#site_show#/view/#landing_edit#/',
			'site_edit' => 'site/edit/#site_edit#/',
			'site_show' => 'site/#site_show#/',
			'sites' => ''
		)
	),
	false
);
?>

<script type="text/javascript">
	BX.ready(function ()
	{
		var pageTitle = BX('pagetitle');

		if (BX.type.isDomNode(pageTitle))
		{
			pageTitle.appendChild(BX.create('span', {
				attrs: {className: 'pagetitle-item-beta'},
				html: 'beta'
			}));
		}
	});
</script>

<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>