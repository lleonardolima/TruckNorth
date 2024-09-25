<?php 
ini_set('display_errors',0);
error_reporting(E_ALL);
?>

<script>
	url="<?php echo $url;?>";
	nomeSite="<?php echo $nomeSite;?>";
</script>

<?php
/*--------------------------------------------------------------
- SCHEMA.ORG
--------------------------------------------------------------*/

$filter = array("(", ")");
$ddd = str_replace($filter, "", $ddd);
$data = date("d/m/Y", filemtime($nomePagina));
$estrelas = '4.'.rand(1, 9);
$comentarios = rand(35, 35*1.5);
preg_match_all('/geo.position\" content="(.*?)\" \/>/s', $geolocation, $geolocation);
$geolocation = explode(";", $geolocation[1][0]);
$geo_longitude = $geolocation[0];
$geo_latitude = $geolocation[1];

?>
<script type="application/ld+json">
	{
		"@context": "http://www.schema.org",
		"@type": "Corporation",
		"name": "<?=$nomeSite;?>",
		"url": "<?=$url;?>",
		<?php if(file_exists($imagensPadrao.'logo.svg')) { ?>
		"logo": "<?php echo $url.$imagensPadrao.'logo.svg'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"logo": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"logo": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } ?>

		<?php if(file_exists($pastaImagens.$urlGaleria.'-01.webp')) { ?>
		"image": "<?php echo $url.$pastaImagens.$urlGaleria;?>-01.webp",
		<?php } elseif(file_exists($imagensPadrao.'logo.svg')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.svg'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } ?>

		"telephone": "55<?=$ddd.$telefone;?>",
		"email": "<?=$email;?>",
		"description": "<?=$description;?>",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "<?=$rua;?>",
			"addressLocality": "<?=$cidadeUF;?>",
			"addressRegion": "São Paulo",
			"postalCode": "<?=$cep;?>",
			"addressCountry": "BR"
		},

		"aggregateRating": {
			"@type": "aggregateRating",
			"ratingValue": "<?=$estrelas;?>",
			"reviewCount": "<?=$comentarios;?>"

		}
	}
</script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "LocalBusiness",
		"description": "<?=$description;?>",
		"name": "<?=$nomeSite;?>",
		<?php if(file_exists($pastaImagens.$urlGaleria.'-01.webp')) { ?>
		"image": "<?php echo $url.$pastaImagens.$urlGaleria;?>-01.webp",
		<?php } elseif(file_exists($imagensPadrao.'logo.svg')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.svg'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } ?>
		"telephone": "55<?=$ddd.$telefone;?>",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "<?=$rua;?>",
			"addressLocality": "<?=$cidadeUF;?>",
			"addressRegion": "São Paulo",
			"postalCode": "<?=$cep;?>",
			"addressCountry": "BR"
		},

		"geo": {
			"@type": "GeoCoordinates",
			"longitude": "<?=$geo_longitude;?>",
			"latitude": "<?=$geo_latitude;?>"
		}
	}
</script>
<script type='application/ld+json'>
	{
		"@context": "http://www.schema.org",
		"@type": "WebSite",
		"name": "<?=$nomeSite;?>",
		"url": "<?=$url;?>",
		"description": "<?=$description;?>",
		"publisher": "<?=$urlCreditos;?>"
	}
</script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "TechArticle",
		"headline": "<?=$h1;?>",
		"alternativeHeadline": "<?=$h1;?> - <?=$nomeSite;?>",
		"proficiencyLevel": "Expert",
		<?php if(file_exists($pastaImagens.$urlGaleria.'-01.webp')) { ?>
		"image": "<?php echo $url.$pastaImagens.$urlGaleria;?>-01.webp",
		<?php } elseif(file_exists($imagensPadrao.'logo.svg')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.svg'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
		"image": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } ?>
		"author": "<?=$nomeSite;?>",
		"genre": "<?=$classificacao;?>",
		"keywords": "<?=$key;?>",
		"publisher": "<?=$textoCreditos;?>",
		"url": "<?=$url.$nomePagina;?>",
		"datePublished": "<?=$data;?>",
		"description": "<?=$description;?>",
		"articleBody": "<?=$description;?> - <?=$nomeSite;?>"
	}
</script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement":[
		{
			"@type":"ListItem",
			"position":1,
			"item": { "@id":"<?=$url;?>", "name":"<?=$nomeSite;?>", "url":"<?=$url;?>" }
		},
		{
			"@type":"ListItem",
			"position":2,
			"item": { "@id":"<?=$url.$urlAtividadesEmpresa;?>", "name":"<?=$AtividadesEmpresa;?>", "url":"<?=$url.$urlAtividadesEmpresa;?>" }
		},
		{
			"@type":"ListItem",
			"position":3,
			"item": { "@id":"<?=$url.$nomePagina;?>", "name":"<?=$h1;?>", "url":"<?=$url.$nomePagina;?>" }
		}
		]
	}
</script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"url": "<?php echo $url; ?>",
		<?php if(file_exists($imagensPadrao.'logo.svg')) { ?>
			"logo": "<?php echo $url.$imagensPadrao.'logo.svg'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
			"logo": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } elseif(file_exists($imagensPadrao.'logo.webp')) { ?>
			"logo": "<?php echo $url.$imagensPadrao.'logo.webp'; ?>",
		<?php } ?>
		"description": "<?php echo $classificacao; ?>",
		"contactPoint" : [
			{
				"@type" : "ContactPoint",
				"telephone" : "+55 (11) <?php echo $telefone; ?>",
				"contactType" : "customer service"
			} ]},
		"location" : {
			"@type" : "Place",
			"name" : "<?php echo $nomeSite; ?>",
				"address" : "<?php echo $rua.' - '.$bairro.' - '.$cidadeUF;?>"
		},
		<?php if((isset($urlFacebook) && $urlFacebook != "#" && $urlFacebook != '') || (isset($urlTwitter) && $urlTwitter != "#" && $urlTwitter != '') || (isset($urlGooglePlus) && $urlGooglePlus != "#" && $urlGooglePlus != '')) { ?>
			"sameAs" : [
			<?php if(isset($urlFacebook) && $urlFacebook != "#") { ?>
				"<?php echo $urlFacebook; ?>",
			<?php } ?>
			<?php if(isset($urlTwitter) && $urlTwitter != "#") { ?>
				"<?php echo $urlTwitter; ?>",
			<?php } ?>
			<?php if(isset($urlGooglePlus) && $urlGooglePlus != "#") { ?>
				"<?php echo $urlGooglePlus; ?>"
			<?php } ?>
			]
		<?php } ?>
	}
</script>

<?php
/* VARIAVEIS SCHEMA.ORG */
$filter = array("(", ")");
$ddd = str_replace($filter, "", $ddd);
$data = date("d/m/Y", filemtime($nomePagina));
$estrelas = '4.'.rand(1, 9);
$comentarios = rand(35, 35*1.5);
$geolocation = explode(";", $geolocation[1][0]);
$geo_longitude = $geolocation[0];
$geo_latitude = $geolocation[1];
?>
<!-- Include all compiled plugins (below), or include individual files as needed -->