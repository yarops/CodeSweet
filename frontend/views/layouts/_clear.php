<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="google-site-verification" content="y6i4FvC23p1Fj7D8FXBAjj8NLvFwNFQtWl6cFR3zIM8" />
    <meta name='yandex-verification' content='629a37a0e9b3d162' />
    <meta name="webmoney" content="EB02B9BF-70BD-43FD-A580-D03251AED6AF"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo \Yii::$app->request->BaseUrl; ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo \Yii::$app->request->BaseUrl; ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo \Yii::$app->request->BaseUrl; ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo \Yii::$app->request->BaseUrl; ?>/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo \Yii::$app->request->BaseUrl; ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter30164969 = new Ya.Metrika({
						id:30164969,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/30164969" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<script data-ad-client="ca-pub-9493950254006774" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>
<?php $this->beginBody() ?>
    <?php echo $content ?>
<?php $this->endBody() ?>
<!--<script src="/site.js"></script>-->

<svg version="1.1" id="svg-icons-set" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

	<symbol id="icon-timeline" x="0px" y="0px" viewBox="0 0 512 512">
        <path d="M503.983,111.165H281.632l30.242-20.969c2.16-1.497,3.449-3.959,3.449-6.589v-67.04V8.017
			c0-4.427-3.588-8.017-8.017-8.017H200.418c-4.428,0-8.017,3.589-8.017,8.017v8.551v67.041c0,2.733,1.393,5.278,3.695,6.752
			l32.506,20.804H8.017c-4.428,0-8.017,3.589-8.017,8.017v384.802C0,508.411,3.588,512,8.017,512H256h247.983
			c4.428,0,8.017-3.589,8.017-8.017V119.182C512,114.754,508.412,111.165,503.983,111.165z M247.983,440.384H54.514v-48.1h193.47
			V440.384z M247.983,333.495H54.514v-48.1h193.47V333.495z M247.983,226.605H54.514v-48.1h193.47V226.605z M247.983,162.472H46.497
			c-4.428,0-8.017,3.589-8.017,8.017v64.134c0,4.427,3.588,8.017,8.017,8.017h201.486v26.722H46.497
			c-4.428,0-8.017,3.589-8.017,8.017v64.134c0,4.427,3.588,8.017,8.017,8.017h201.486v26.722H46.497
			c-4.428,0-8.017,3.589-8.017,8.017v64.134c0,4.427,3.588,8.017,8.017,8.017h201.486v39.549H16.033V127.198h231.95V162.472z
			 M255.822,109.55l-47.387-30.329V16.568v-0.534h90.856v0.534v62.844L255.822,109.55z M264.017,178.505h39.549v48.1h-39.549
			V178.505z M264.017,285.395h112.234v48.1H264.017V285.395z M264.017,392.284h176.367v48.1H264.017V392.284z M495.967,495.967
			h-231.95v-39.549h184.384c4.428,0,8.017-3.589,8.017-8.017v-64.134c0-4.427-3.588-8.017-8.017-8.017H264.017v-26.722h120.25
			c4.428,0,8.017-3.589,8.017-8.017v-64.134c0-4.427-3.588-8.017-8.017-8.017h-120.25v-26.722h47.566
			c4.428,0,8.017-3.589,8.017-8.017v-64.134c0-4.427-3.588-8.017-8.017-8.017h-47.566v-35.273h231.95V495.967z"/>
    </symbol>
    <symbol id="icon-image" x="0px" y="0px" viewBox="0 0 512 512">
        <g>
            <path d="M499.604,0H12.396C7.931,0,4.312,3.62,4.312,8.084v400.977v30.181v64.674c0,4.465,3.62,8.084,8.084,8.084h487.208
        c4.465,0,8.084-3.62,8.084-8.084v-64.674v-25.87V8.084C507.688,3.62,504.069,0,499.604,0z M491.52,495.832H20.48v-48.505h471.04
        V495.832z M491.52,431.158H20.48v-19.535l125.643-178.331l131.34,182.645c1.359,1.89,3.468,3.102,5.785,3.326
        c2.317,0.223,4.619-0.562,6.315-2.156l102.194-96.063l99.762,95.773V431.158z M491.52,394.406l-94.107-90.343
        c-3.104-2.981-8-3.006-11.135-0.059l-101.072,95.008l-132.589-184.38c-1.519-2.113-3.962-3.364-6.563-3.364
        c-0.013,0-0.026,0-0.039,0c-2.616,0.013-5.063,1.29-6.57,3.428L20.48,383.551V16.168h471.04V394.406z"/>
        </g>
        <g>
            <path d="M335.764,155.217c-37.741,0-68.446,30.705-68.446,68.446c0,37.741,30.705,68.446,68.446,68.446
        s68.446-30.705,68.446-68.446C404.211,185.922,373.506,155.217,335.764,155.217z M335.764,275.941
        c-28.826,0-52.278-23.452-52.278-52.278c0-28.826,23.452-52.278,52.278-52.278c28.826,0,52.278,23.452,52.278,52.278
        C388.042,252.489,364.59,275.941,335.764,275.941z"/>
        </g>
        <g>
            <path d="M426.307,56.051c-10.351,0-19.637,4.656-25.87,11.985c-6.232-7.329-15.518-11.985-25.869-11.985
        c-10.352,0-19.637,4.656-25.869,11.985c-6.232-7.329-15.518-11.985-25.87-11.985c-18.722,0-33.954,15.232-33.954,33.954
        c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084c0-9.807,7.979-17.785,17.785-17.785
        c9.807,0,17.785,7.979,17.785,17.785c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084
        c0-9.807,7.979-17.785,17.785-17.785s17.785,7.979,17.785,17.785c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084
        c0-9.807,7.979-17.785,17.785-17.785c9.807,0,17.785,7.979,17.785,17.785c0,4.465,3.62,8.084,8.084,8.084
        c4.465,0,8.084-3.62,8.084-8.084C460.261,71.282,445.029,56.051,426.307,56.051z"/>
        </g>
        <g>
            <path d="M146.055,125.036c-10.352,0-19.637,4.656-25.869,11.985c-6.232-7.329-15.517-11.985-25.87-11.985
        c-18.722,0-33.954,15.232-33.954,33.954c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084
        c0-9.807,7.979-17.785,17.785-17.785s17.785,7.979,17.785,17.785c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084
        c0-9.807,7.979-17.785,17.785-17.785s17.785,7.979,17.785,17.785c0,4.465,3.62,8.084,8.084,8.084c4.465,0,8.084-3.62,8.084-8.084
        C180.008,140.268,164.777,125.036,146.055,125.036z"/>
        </g>
    </symbol>

    <symbol id="icon-tools" x="0px" y="0px" viewBox="0 0 512 512">
        <g>
            <path d="M509.658,369.507l-69.386-69.386c-1.679-1.679-4.017-2.525-6.38-2.31l-66.37,6.034c-1.863,0.17-3.608,0.987-4.932,2.31
			l-6.411,6.41l-74.185-74.185l75.952-75.952l12.444,12.445c1.561,1.561,3.609,2.343,5.656,2.343s4.095-0.781,5.656-2.343
			l51.285-51.285c0.678-0.678,1.229-1.473,1.625-2.346l30.167-66.37c1.38-3.036,0.733-6.609-1.625-8.967L439.02,21.771
			c-2.358-2.358-5.93-3.007-8.967-1.625l-66.37,30.169c-0.874,0.397-1.668,0.947-2.346,1.625l-51.281,51.286
			c-3.124,3.124-3.124,8.189,0,11.312l12.445,12.444l-75.952,75.952l-44.978-44.978l6.41-6.41c1.324-1.324,2.141-3.069,2.31-4.932
			l6.034-66.37c0.215-2.365-0.631-4.703-2.31-6.38L144.628,4.477c-3.124-3.124-8.189-3.124-11.313,0l-30.166,30.167
			c-3.124,3.124-3.124,8.189,0,11.312l51.662,51.662l-55.056,55.056l-51.662-51.661c-3.124-3.124-8.189-3.124-11.312,0
			L6.611,131.182c-3.124,3.124-3.124,8.189,0,11.312l69.386,69.386c1.507,1.507,3.544,2.343,5.656,2.343
			c0.241,0,0.483-0.011,0.725-0.033l66.37-6.034c1.863-0.17,3.608-0.987,4.932-2.31l6.41-6.41l44.978,44.978l-31.144,31.144
			l-9.428-9.428c-2.312-2.311-5.8-2.984-8.808-1.696l-42.089,18.038c-0.005,0.002-0.011,0.004-0.016,0.006l-0.13,0.055
			c-0.062,0.027-0.119,0.061-0.18,0.089c-0.164,0.075-0.326,0.151-0.486,0.238c-0.1,0.054-0.195,0.114-0.291,0.172
			c-0.125,0.075-0.25,0.149-0.372,0.232c-0.127,0.085-0.246,0.177-0.367,0.27c-0.085,0.065-0.172,0.127-0.255,0.196
			c-0.145,0.121-0.283,0.248-0.418,0.378c-0.045,0.043-0.093,0.079-0.137,0.124l-0.091,0.091c-0.009,0.009-0.017,0.017-0.026,0.026
			l-93.268,93.268c-0.002,0.001-0.003,0.003-0.005,0.005l-0.129,0.129c-0.049,0.049-0.091,0.103-0.139,0.154
			c-0.118,0.125-0.237,0.251-0.348,0.384c-0.083,0.099-0.159,0.204-0.237,0.306c-0.078,0.103-0.157,0.205-0.229,0.313
			c-0.098,0.144-0.186,0.291-0.274,0.439c-0.035,0.06-0.076,0.115-0.11,0.176l-0.09,0.161c-0.001,0.002-0.002,0.003-0.003,0.005
			L1.007,406.674c-1.734,3.122-1.189,7.016,1.336,9.541l66.37,66.369c1.539,1.539,3.587,2.343,5.659,2.343
			c1.327,0,2.663-0.33,3.882-1.007l27.15-15.084c0.066-0.036,0.125-0.08,0.19-0.118c0.142-0.084,0.285-0.17,0.422-0.263
			c0.111-0.076,0.215-0.157,0.321-0.237c0.1-0.076,0.202-0.15,0.299-0.231c0.134-0.111,0.26-0.229,0.385-0.348
			c0.05-0.048,0.105-0.09,0.154-0.139l0.131-0.131c0.001-0.001,0.002-0.002,0.003-0.003l93.385-93.385
			c0.104-0.103,0.194-0.213,0.29-0.321c0.065-0.073,0.133-0.142,0.196-0.216c0.02-0.023,0.044-0.046,0.063-0.07
			c0.199-0.244,0.377-0.5,0.543-0.76c0.035-0.057,0.067-0.115,0.101-0.172c0.174-0.289,0.329-0.585,0.463-0.888
			c0.012-0.027,0.028-0.049,0.039-0.076l0.051-0.121c0.004-0.01,0.009-0.02,0.013-0.03l18.036-42.084
			c1.288-3.007,0.617-6.494-1.696-8.808l-9.428-9.428l31.144-31.144l74.185,74.185l-6.41,6.41c-1.324,1.324-2.141,3.069-2.31,4.932
			l-6.034,66.37c-0.215,2.365,0.631,4.703,2.31,6.38l69.386,69.386c1.561,1.561,3.609,2.343,5.656,2.343s4.095-0.781,5.656-2.343
			l30.167-30.167c3.124-3.124,3.124-8.189,0-11.312l-51.662-51.662l55.056-55.056l51.662,51.662c3.124,3.124,8.189,3.124,11.312,0
			l30.167-30.167C512.782,377.695,512.782,372.63,509.658,369.507z M371.628,64.279l60.002-27.274l16.294,16.294l-27.274,60.002
			l-44.603,44.603l-12.444-12.444l-24.134-24.134l-12.444-12.444L371.628,64.279z M333.812,138.295l12.821,12.822l-75.952,75.952
			l-12.822-12.821L333.812,138.295z M154.432,182.468l-10.018,10.018l-59.754,5.432l-61.081-61.08l18.855-18.855l51.662,51.662
			c3.124,3.124,8.189,3.124,11.312,0l66.37-66.37c3.124-3.124,3.124-8.189,0-11.312l-51.662-51.662l18.855-18.855l61.08,61.081
			l-5.432,59.754l-10.02,10.02L154.432,182.468z M116.604,301.201l6.788,6.788l-82.208,82.208l-6.788-6.788L116.604,301.201z
			 M62.303,411.313l-9.804-9.804l82.208-82.208l9.804,9.804L62.303,411.313z M155.822,340.418l9.805,9.805L83.42,432.431
			l-9.805-9.805L155.822,340.418z M75.76,467.004l-57.836-57.836l7.003-12.606l31.719,31.719l31.719,31.719L75.76,467.004z
			 M101.52,450.531l-6.788-6.788l82.208-82.207l6.788,6.788L101.52,450.531z M192.343,354.313l-9.745-9.745l-21.064-21.063
			c-0.017-0.018-0.033-0.038-0.05-0.055c-0.018-0.017-0.037-0.033-0.055-0.05l-21.066-21.066l-9.747-9.746l26.397-11.313
			l11.255,11.254L192.4,316.66l11.254,11.255L192.343,354.313z M198.057,299.692l-12.822-12.821l31.144-31.144l12.821,12.821
			L198.057,299.692z M246.171,262.892l-24.135-24.135l-50.635-50.634l18.855-18.855l50.634,50.635l24.134,24.134h0.001
			l79.841,79.841l-18.855,18.855L246.171,262.892z M473.834,394.019l-51.662-51.662c-3.124-3.124-8.189-3.124-11.312,0l-66.37,66.37
			c-3.124,3.124-3.124,8.189,0,11.312l51.662,51.662l-18.855,18.855l-61.081-61.08l5.432-59.754l10.02-10.02l30.169-30.169
			c0.002-0.002,0.003-0.003,0.005-0.005l10.014-10.013l59.754-5.432l61.08,61.081L473.834,394.019z"/>
        </g>
    </symbol>

    <symbol id="icon-content" x="0px" y="0px" viewBox="0 0 512 512">
        <g>
            <path d="M503.983,4.276H256H8.017C3.589,4.276,0,7.865,0,12.292v102.614v384.802c0,4.427,3.589,8.017,8.017,8.017H256h247.983
        c4.427,0,8.017-3.589,8.017-8.017V114.906V12.292C512,7.865,508.411,4.276,503.983,4.276z M495.967,491.691H256H16.033V122.923
        H256h239.967V491.691z M495.967,106.889H256H16.033v-86.58H256h239.967V106.889z"/>
        </g>
        <g>
            <path d="M427.023,38.48H332.96c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h94.063
        c4.427,0,8.017-3.589,8.017-8.017C435.04,42.07,431.45,38.48,427.023,38.48z"/>
        </g>
        <g>
            <path d="M469.779,38.48h-17.102c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h17.102
        c4.427,0,8.017-3.589,8.017-8.017C477.795,42.07,474.206,38.48,469.779,38.48z"/>
        </g>
        <g>
            <path d="M264.551,29.929c-3.835,0-7.612,0.647-11.222,1.924c-0.009,0.003-0.016,0.008-0.025,0.01
        c-13.412,4.754-22.423,17.504-22.423,31.737c0,14.232,9.011,26.982,22.422,31.737c0.009,0.003,0.016,0.008,0.025,0.011
        c3.611,1.276,7.387,1.924,11.222,1.924c18.566,0,33.67-15.105,33.67-33.67S283.117,29.929,264.551,29.929z M264.551,81.236
        c-2.011,0-3.988-0.339-5.88-1.007c-0.001,0-0.002-0.001-0.003-0.001c-7.03-2.488-11.754-9.17-11.754-16.629
        s4.723-14.14,11.755-16.629c0.001,0,0.002,0,0.003-0.001c1.891-0.669,3.869-1.007,5.88-1.007c9.725,0,17.637,7.912,17.637,17.637
        S274.276,81.236,264.551,81.236z"/>
        </g>
        <g>
            <path d="M170.489,29.929c-18.566,0-33.67,15.105-33.67,33.67s15.105,33.67,33.67,33.67s33.67-15.104,33.67-33.67
        S189.054,29.929,170.489,29.929z M170.489,81.236c-9.725,0-17.637-7.912-17.637-17.637s7.912-17.637,17.637-17.637
        s17.637,7.912,17.637,17.637S180.213,81.236,170.489,81.236z"/>
        </g>
        <g>
            <path d="M76.426,29.929c-18.566,0-33.67,15.105-33.67,33.67s15.105,33.67,33.67,33.67s33.67-15.104,33.67-33.67
        S94.992,29.929,76.426,29.929z M76.426,81.236c-9.725,0-17.637-7.912-17.637-17.637s7.912-17.637,17.637-17.637
        s17.637,7.912,17.637,17.637S86.151,81.236,76.426,81.236z"/>
        </g>
        <g>
            <path d="M480.454,214.537l-84.651-84.653c-3.131-3.131-8.207-3.131-11.338,0L330.5,183.85H256H72.15
        c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H256h58.466l-64.135,64.135l-56.65,56.65H72.15
        c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h105.497l-17.278,17.278c-0.009,0.009-0.017,0.017-0.027,0.027
        l-0.014,0.014c-0.025,0.025-0.045,0.051-0.069,0.077c-0.159,0.164-0.314,0.332-0.461,0.51c-0.055,0.065-0.1,0.135-0.153,0.202
        c-0.108,0.14-0.216,0.28-0.315,0.429c-0.065,0.097-0.122,0.199-0.183,0.299c-0.074,0.122-0.151,0.243-0.218,0.37
        c-0.068,0.128-0.127,0.26-0.188,0.39c-0.049,0.105-0.102,0.207-0.146,0.315c-0.067,0.162-0.124,0.329-0.181,0.495
        c-0.028,0.082-0.06,0.161-0.086,0.245c-0.064,0.212-0.117,0.426-0.162,0.642c-0.009,0.042-0.022,0.081-0.031,0.123l-0.005,0.025
        c-0.002,0.01-0.004,0.019-0.005,0.029l-19.862,99.316H72.15c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017
        h72.641c0.012,0,0.023,0.001,0.036,0.001c0.003,0,0.005,0,0.009,0c0.003,0,0.005,0,0.009,0c0.012,0,0.024-0.001,0.036-0.001h6.276
        c2.139,0,4.077-0.843,5.514-2.208l35.038-7.008c0.005-0.001,0.01-0.002,0.015-0.003l0.032-0.006l60.415-12.083
        c0.007-0.001,0.015-0.003,0.023-0.004l0.028-0.005c0.047-0.01,0.091-0.025,0.138-0.035c0.21-0.046,0.419-0.096,0.625-0.158
        c0.088-0.027,0.171-0.061,0.258-0.09c0.161-0.056,0.324-0.11,0.482-0.175c0.112-0.047,0.219-0.102,0.328-0.153
        c0.126-0.059,0.253-0.115,0.377-0.182c0.13-0.07,0.253-0.148,0.378-0.223c0.097-0.059,0.197-0.114,0.291-0.177
        c0.149-0.099,0.29-0.208,0.431-0.316c0.066-0.051,0.136-0.097,0.201-0.152c0.175-0.144,0.341-0.297,0.503-0.455
        c0.027-0.027,0.057-0.048,0.082-0.075l0.016-0.016c0.009-0.009,0.017-0.016,0.025-0.025l5.309-5.309l110.306-110.306
        l48.015-48.015l60.465-60.465C483.584,222.743,483.584,217.667,480.454,214.537z M202.669,334.353
        c0.001-0.001,0.002-0.002,0.003-0.002l58.998-58.998l68-68l15.872,15.873L193.208,375.56l-15.873-15.873L202.669,334.353z
         M356.878,234.564l18.896,18.896l-69.556,69.556l-55.886,55.886l-26.891,26.891l-18.896-18.896L356.878,234.564z M155.055,455.283
        l3.774-18.869l15.095,15.095L155.055,455.283z M192.819,447.731l-30.211-30.211l8.314-41.57l16.618,16.618l30.233,30.233
        l16.618,16.617L192.819,447.731z M360.637,323.016L250.65,433.002l-15.873-15.872l26.891-26.891l55.886-55.886l69.556-69.556
        l15.872,15.872L360.637,323.016z M414.32,269.332l-21.54-21.54l-30.234-30.233l-21.54-21.541l49.129-49.128l73.314,73.314
        L414.32,269.332z"/>
        </g>
        <g>
            <path d="M394.211,169.096c-3.13-3.131-8.207-3.131-11.337,0l-19.24,19.24c-3.131,3.131-3.131,8.207,0,11.337
        c1.565,1.565,3.617,2.348,5.668,2.348s4.103-0.782,5.668-2.348l19.24-19.24C397.342,177.302,397.342,172.225,394.211,169.096z"/>
        </g>
    </symbol>

    <symbol id="icon-upload" x="0px" y="0px" viewBox="0 0 512 512">
        <g>
            <path d="M268.827,38.346c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017c39.194,0,71.081,31.886,71.081,71.081
        c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017C355.942,77.426,316.862,38.346,268.827,38.346z"/>
        </g>
        <g>
            <path d="M407.783,166.613c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017c30.943,0,56.117,25.174,56.117,56.117
        c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017C479.933,198.979,447.567,166.613,407.783,166.613z"/>
        </g>
        <g>
            <path d="M407.783,134.546c-6.845,0-13.631,0.664-20.287,1.98c0.34-3.678,0.512-7.373,0.512-11.065
        c0-65.717-53.465-119.182-119.182-119.182c-65.099,0-118.176,52.462-119.168,117.33c-11.799-4.096-24.16-6.165-36.891-6.165
        C50.588,117.444,0,168.032,0,230.212c0,28.114,10.407,55.046,29.304,75.833c18.105,19.916,42.533,32.635,69.055,36.023
        c1.112,0.584,2.377,0.913,3.72,0.913h72.685v94.864c0,4.427,3.589,8.017,8.017,8.017h145.37c4.427,0,8.017-3.589,8.017-8.017
        v-94.864h69.478c0.169,0,0.336-0.005,0.502-0.016c0.544,0.01,1.089,0.016,1.635,0.016c57.466,0,104.217-46.751,104.217-104.217
        S465.249,134.546,407.783,134.546z M328.15,254.53c-4.427,0-8.017,3.589-8.017,8.017v72.418v94.864H190.797v-94.864v-72.418
        c0-4.427-3.589-8.017-8.017-8.017h-58.543l131.237-105.947L387.166,254.53H328.15z M407.783,326.947
        c-0.656,0-1.309-0.011-1.961-0.025c-0.275-0.007-0.553,0.002-0.827,0.025h-68.827v-56.384h73.754c3.4,0,6.432-2.145,7.561-5.353
        c1.13-3.208,0.113-6.779-2.536-8.91L260.492,132.041c-2.938-2.363-7.126-2.36-10.06,0.009L96.51,256.308
        c-2.644,2.135-3.656,5.704-2.524,8.908c1.132,3.205,4.161,5.347,7.559,5.347h73.219v56.384h-69.792
        c-0.656-0.253-1.355-0.424-2.085-0.498c-49.514-5.018-86.854-46.391-86.854-96.237c0-53.34,43.395-96.735,96.735-96.735
        c14.68,0,28.776,3.202,41.897,9.517c2.602,1.253,5.676,1.009,8.049-0.638c2.372-1.647,3.675-4.443,3.411-7.319
        c-0.296-3.224-0.447-6.445-0.447-9.577c0-56.876,46.272-103.148,103.148-103.148c56.876,0,103.148,46.272,103.148,103.148
        c0,6.812-0.672,13.64-2,20.294c-0.558,2.794,0.41,5.675,2.542,7.565c2.131,1.891,5.105,2.509,7.814,1.623
        c8.843-2.895,18.079-4.362,27.452-4.362c48.625,0,88.184,39.559,88.184,88.184C495.967,287.389,456.408,326.947,407.783,326.947z"
            />
        </g>
        <g>
            <path d="M328.15,459.757h-145.37c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h145.37
        c4.427,0,8.017-3.589,8.017-8.017S332.579,459.757,328.15,459.757z"/>
        </g>
        <g>
            <path d="M328.15,489.686h-145.37c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h145.37
        c4.427,0,8.017-3.589,8.017-8.017S332.579,489.686,328.15,489.686z"/>
        </g>
    </symbol>

    <symbol id="icon-competition" x="0px" y="0px" viewBox="0 0 512 512">
        <g>
            <path d="M363.232,271.105c-3.463-2.757-8.508-2.183-11.264,1.281c-2.885,3.626-6.016,7.132-9.306,10.42
        c-6.794,6.795-14.348,12.765-22.451,17.746c-3.772,2.317-4.951,7.256-2.633,11.027c1.514,2.464,4.144,3.82,6.837,3.82
        c1.432,0,2.881-0.384,4.19-1.188c9.17-5.636,17.714-12.387,25.394-20.067c3.717-3.716,7.252-7.676,10.514-11.774
        C367.272,278.906,366.698,273.863,363.232,271.105z"/>
        </g>
        <g>
            <path d="M386.405,188.126c-4.428,0-8.017,3.589-8.017,8.017c0,16.794-3.265,33.003-9.706,48.174
        c-1.729,4.076,0.172,8.782,4.248,10.513c1.023,0.434,2.084,0.639,3.13,0.639c3.12,0,6.086-1.833,7.382-4.886
        c7.286-17.164,10.98-35.481,10.98-54.44C394.422,191.715,390.833,188.126,386.405,188.126z"/>
        </g>
        <g>
            <path d="M439.85,175.299c-4.506,0-8.97,0.432-13.361,1.258v-15.154h17.637c4.428,0,8.017-3.589,8.017-8.017v-47.031
        c0-4.427-3.588-8.017-8.017-8.017h-25.653H93.528H67.875c-4.428,0-8.017,3.589-8.017,8.017v47.031
        c0,4.427,3.588,8.017,8.017,8.017h17.637v15.154c-4.391-0.826-8.855-1.258-13.361-1.258c-39.784,0-72.15,32.366-72.15,72.15
        s32.366,72.15,72.15,72.15c18.295,0,35.606-6.87,48.848-19.087c26.11,33.787,63.865,56.311,105.607,63.568v70.283
        c-38.349,6.652-73.374,26.285-99.25,55.782c-2.076,2.365-2.575,5.727-1.276,8.594c1.3,2.867,4.156,4.708,7.303,4.708h245.236
        c3.147,0,6.003-1.842,7.303-4.708c1.299-2.867,0.799-6.228-1.276-8.594c-25.876-29.497-60.9-49.131-99.25-55.782v-70.283
        c41.742-7.257,79.497-29.782,105.607-63.568c13.243,12.217,30.553,19.087,48.848,19.087c39.784,0,72.15-32.366,72.15-72.15
        S479.634,175.299,439.85,175.299z M75.891,145.37v-30.998h17.637h324.944h17.637v30.998h-17.637H93.528H75.891z M439.85,225.537
        c12.083,0,21.912,9.83,21.912,21.912s-9.83,21.912-21.912,21.912c-11.476,0-20.808-8.678-21.793-19.965
        c1.572-4.825,2.948-9.807,4.101-14.862C426.288,228.878,432.808,225.537,439.85,225.537z M93.942,249.397
        c-0.983,11.286-10.316,19.965-21.792,19.965c-12.083,0-21.912-9.83-21.912-21.912s9.83-21.912,21.912-21.912
        c7.042,0,13.562,3.342,17.69,8.998C90.995,239.59,92.37,244.571,93.942,249.397z M72.15,303.566
        c-30.942,0-56.117-25.174-56.117-56.117s25.175-56.117,56.117-56.117c4.527,0,9,0.552,13.361,1.62v3.19
        c0,5.369,0.266,10.737,0.764,16.079c-4.419-1.769-9.197-2.718-14.125-2.718c-20.924,0-37.946,17.022-37.946,37.946
        s17.022,37.946,37.946,37.946c12.388,0,23.346-5.839,30.261-14.969c2.78,5.762,5.875,11.376,9.298,16.804
        C101.229,297.669,87.108,303.566,72.15,303.566z M359.429,487.416H152.57c23.169-20.763,52.084-34.153,83.094-38.216
        c3.99-0.523,6.975-3.924,6.975-7.949v-74.619h26.723v74.619c0,4.025,2.984,7.426,6.975,7.949
        C307.346,453.263,336.261,466.653,359.429,487.416z M383.578,283.487c-0.003,0.003-0.005,0.006-0.007,0.011
        c-28.745,42.016-76.434,67.1-127.57,67.1s-98.826-25.084-127.571-67.1c-0.002-0.003-0.005-0.006-0.008-0.011
        c-7.966-11.646-14.281-24.299-18.771-37.61c-1.774-5.262-3.293-10.762-4.514-16.347c0-0.002-0.001-0.004-0.002-0.006
        c-2.381-10.919-3.589-22.151-3.589-33.382v-9.163v-25.576h308.91v25.576v9.163c0,11.231-1.208,22.463-3.59,33.382
        c0,0.002-0.001,0.004-0.002,0.006c-1.221,5.585-2.74,11.084-4.514,16.347C397.859,259.188,391.544,271.842,383.578,283.487z
         M439.85,303.566c-14.958,0-29.078-5.897-39.559-16.336c3.424-5.428,6.518-11.042,9.298-16.804
        c6.915,9.129,17.872,14.969,30.26,14.969c20.924,0,37.946-17.022,37.946-37.946s-17.022-37.946-37.946-37.946
        c-4.929,0-9.707,0.949-14.125,2.718c0.498-5.342,0.764-10.71,0.764-16.079v-3.19c4.362-1.07,8.834-1.62,13.361-1.62
        c30.942,0,56.117,25.173,56.117,56.117S470.792,303.566,439.85,303.566z"/>
        </g>
        <g>
            <path d="M331.978,231.981c-1.123-3.218-4.159-5.375-7.569-5.375h-45.692l-15.183-41.754c-1.152-3.168-4.163-5.277-7.535-5.277
        s-6.382,2.109-7.535,5.277l-15.183,41.754h-45.692c-3.409,0-6.445,2.157-7.569,5.375c-1.123,3.219-0.088,6.797,2.582,8.918
        l38.617,30.68l-11.435,41.933c-0.909,3.329,0.416,6.866,3.287,8.779c2.871,1.915,6.646,1.778,9.369-0.342l33.558-26.1l33.559,26.1
        c1.443,1.122,3.181,1.689,4.922,1.689c1.546,0,3.096-0.446,4.445-1.347c2.872-1.914,4.195-5.45,3.287-8.779l-11.435-41.933
        l38.617-30.68C332.066,238.779,333.101,235.2,331.978,231.981z M276.667,262.313c-2.511,1.995-3.591,5.293-2.747,8.386
        l6.498,23.829l-19.496-15.163c-1.448-1.126-3.185-1.689-4.922-1.689c-1.737,0-3.474,0.563-4.922,1.689l-19.496,15.163
        l6.498-23.829c0.844-3.093-0.237-6.392-2.747-8.387l-24.764-19.674h28.329c3.37,0,6.382-2.109,7.535-5.277L256,211.049
        l9.568,26.313c1.152,3.168,4.163,5.277,7.535,5.277h28.329L276.667,262.313z"/>
        </g>
        <g>
            <path d="M277.378,29.93h-13.361V16.568c0-4.427-3.588-8.017-8.017-8.017c-4.428,0-8.017,3.589-8.017,8.017V29.93h-13.361
        c-4.428,0-8.017,3.589-8.017,8.017c0,4.427,3.588,8.017,8.017,8.017h13.361v13.361c0,4.427,3.588,8.017,8.017,8.017
        c4.428,0,8.017-3.589,8.017-8.017V45.963h13.361c4.428,0,8.017-3.589,8.017-8.017C285.395,33.519,281.806,29.93,277.378,29.93z"/>
        </g>
        <g>
            <path d="M397.094,29.93h-13.361V16.568c0-4.427-3.588-8.017-8.017-8.017c-4.428,0-8.017,3.589-8.017,8.017V29.93h-13.361
        c-4.428,0-8.017,3.589-8.017,8.017c0,4.427,3.588,8.017,8.017,8.017h13.361v13.361c0,4.427,3.588,8.017,8.017,8.017
        c4.428,0,8.017-3.589,8.017-8.017V45.963h13.361c4.428,0,8.017-3.589,8.017-8.017C405.111,33.519,401.522,29.93,397.094,29.93z"/>
        </g>
        <g>
            <path d="M166.213,29.93h-13.361V16.568c0-4.427-3.588-8.017-8.017-8.017c-4.428,0-8.017,3.589-8.017,8.017V29.93h-13.361
        c-4.428,0-8.017,3.589-8.017,8.017c0,4.427,3.588,8.017,8.017,8.017h13.361v13.361c0,4.427,3.588,8.017,8.017,8.017
        c4.428,0,8.017-3.589,8.017-8.017V45.963h13.361c4.428,0,8.017-3.589,8.017-8.017C174.23,33.519,170.641,29.93,166.213,29.93z"/>
        </g>
    </symbol>

    <symbol id="icon-phone" x="0px" y="0px" viewBox="0 0 376.076 376.076">
        <path d="M266.611,0.076h-158.32c-13.946-0.758-27.602,4.179-37.84,13.68c-9.859,10.682-14.918,24.933-14,39.44v269.76c0,39.12,27.44,53.12,53.12,53.12h157.04c39.12,0,53.12-27.44,53.12-53.12V53.116C319.731,13.996,292.291,0.076,266.611,0.076zM307.651,322.956c0.08,12.32-4,41.12-41.04,41.12h-157.04c-12.32,0-41.12-4-41.12-41.12v-32h239.2V322.956z M307.651,279.116h-239.2V69.836h239.2V279.116z M307.731,57.916H68.451v-4.72c-0.827-11.287,2.954-22.428,10.48-30.88c8.172-7.329,18.971-11.025,29.92-10.24h157.76c12.32,0,41.12,4,41.12,41.12V57.916z"/>
        <path d="M207.011,29.356h-37.6c-3.314,0-6,2.686-6,6c0,3.314,2.686,6,6,6h37.6c3.314,0,6-2.686,6-6C213.011,32.042,210.325,29.356,207.011,29.356z"/>
        <path d="M188.051,302.316c-14.536,0.044-26.284,11.864-26.24,26.4s11.864,26.284,26.4,26.24c14.474-0.044,26.196-11.766,26.24-26.24C214.451,314.136,202.631,302.316,188.051,302.316z M188.051,342.956C188.051,342.956,188.051,342.956,188.051,342.956l0,0.08c-7.909-0.044-14.284-6.491-14.24-14.4c0.044-7.909,6.491-14.284,14.4-14.24c7.877,0.044,14.24,6.442,14.24,14.32C202.407,336.625,195.96,343,188.051,342.956z"/>
    </symbol>

    <symbol id="icon-vk" x="0px" y="0px" viewBox="0 0 64 64">
        <path d="M63.6607 46.7196C63.5832 46.5526 63.511 46.414 63.4439 46.303C62.3335 44.3032 60.2115 41.8485 57.0793 38.9383L57.0131 38.8716L56.98 38.8389L56.9465 38.8054H56.9129C55.4913 37.4503 54.5911 36.5391 54.2141 36.0726C53.5244 35.184 53.3699 34.2845 53.7468 33.3731C54.0132 32.6845 55.0136 31.2302 56.7459 29.0084C57.657 27.8309 58.3787 26.8872 58.9116 26.1761C62.755 21.0665 64.4213 17.8014 63.9101 16.3794L63.7116 16.0472C63.5782 15.8471 63.2339 15.6641 62.6792 15.4972C62.1231 15.3307 61.4125 15.3031 60.5459 15.4141L50.9494 15.4804C50.7939 15.4253 50.5719 15.4305 50.2827 15.4972C49.9938 15.564 49.8494 15.5975 49.8494 15.5975L49.6823 15.6809L49.5498 15.7812C49.4386 15.8475 49.3164 15.9641 49.183 16.1307C49.0503 16.2968 48.9393 16.4917 48.8506 16.7138C47.8058 19.4018 46.6179 21.901 45.2847 24.2112C44.4627 25.5887 43.7078 26.7826 43.0184 27.7934C42.3299 28.8039 41.7523 29.5484 41.2862 30.0257C40.8193 30.5034 40.398 30.8861 40.0196 31.1752C39.6418 31.4644 39.3534 31.5866 39.1537 31.5419C38.9536 31.4972 38.7651 31.4528 38.5866 31.4085C38.2758 31.2084 38.0258 30.9364 37.8373 30.5921C37.648 30.2478 37.5206 29.8144 37.4539 29.2924C37.3877 28.7699 37.3484 28.3206 37.3372 27.9428C37.3268 27.5655 37.3316 27.0318 37.3542 26.3432C37.3773 25.6542 37.3877 25.1881 37.3877 24.9437C37.3877 24.0994 37.4041 23.1831 37.4371 22.1945C37.4708 21.206 37.4979 20.4227 37.5207 19.8457C37.5433 19.2681 37.5539 18.657 37.5539 18.0127C37.5539 17.3685 37.5146 16.8632 37.4371 16.4965C37.3606 16.1303 37.243 15.7748 37.0882 15.4301C36.9324 15.0858 36.7043 14.8195 36.4051 14.6304C36.1052 14.4416 35.7324 14.2917 35.2888 14.1804C34.1113 13.9139 32.6119 13.7698 30.7899 13.7474C26.6582 13.703 24.0033 13.9698 22.826 14.5474C22.3595 14.7915 21.9373 15.1249 21.5599 15.5467C21.1599 16.0356 21.1041 16.3024 21.3928 16.3463C22.7259 16.546 23.6697 17.0237 24.2251 17.7789L24.4253 18.1791C24.581 18.4679 24.7364 18.9791 24.892 19.712C25.0473 20.445 25.1476 21.2558 25.1917 22.144C25.3026 23.7659 25.3026 25.1543 25.1917 26.3093C25.0805 27.4648 24.9754 28.3643 24.8752 29.0085C24.7749 29.6528 24.6251 30.1748 24.4253 30.5746C24.2251 30.9744 24.0919 31.2188 24.0252 31.3075C23.9585 31.3962 23.903 31.4521 23.8589 31.4741C23.5701 31.5847 23.2698 31.6411 22.959 31.6411C22.6477 31.6411 22.2703 31.4854 21.8261 31.1742C21.382 30.8631 20.9211 30.4357 20.4434 29.8913C19.9657 29.3469 19.427 28.586 18.8269 27.6087C18.2274 26.6313 17.6053 25.4762 16.9611 24.1434L16.428 23.1768C16.0948 22.5549 15.6396 21.6495 15.062 20.4612C14.4841 19.2725 13.9732 18.1227 13.5291 17.0119C13.3516 16.5454 13.0849 16.1903 12.7295 15.9459L12.5628 15.8456C12.4519 15.7569 12.2739 15.6627 12.0297 15.5623C11.7852 15.4621 11.5301 15.3902 11.2633 15.346L2.13302 15.4123C1.20003 15.4123 0.56698 15.6236 0.23365 16.0458L0.100248 16.2455C0.0336055 16.3567 -7.62939e-06 16.5343 -7.62939e-06 16.7788C-7.62939e-06 17.0232 0.066635 17.3232 0.200037 17.6783C1.53289 20.8109 2.98234 23.832 4.54838 26.7421C6.11442 29.6522 7.47528 31.9963 8.63015 33.7725C9.78525 35.5499 10.9626 37.2274 12.1623 38.8042C13.362 40.3815 14.1561 41.3924 14.5447 41.8365C14.9337 42.2814 15.2392 42.614 15.4613 42.8361L16.2945 43.6357C16.8277 44.1689 17.6106 44.8076 18.6436 45.5516C19.6768 46.2961 20.8207 47.0291 22.0758 47.7517C23.3312 48.473 24.7916 49.0617 26.4579 49.517C28.124 49.9728 29.7456 50.1557 31.3229 50.0675H35.1551C35.9323 50.0003 36.5211 49.756 36.9213 49.3342L37.0539 49.1671C37.143 49.0346 37.2265 48.8286 37.3035 48.5514C37.3815 48.2737 37.4202 47.9678 37.4202 47.6351C37.3975 46.68 37.4702 45.8193 37.6364 45.0529C37.8024 44.2868 37.9918 43.7092 38.2035 43.3202C38.4151 42.9316 38.6539 42.6036 38.9196 42.3377C39.186 42.0713 39.3757 41.9099 39.4871 41.8543C39.5977 41.7984 39.6861 41.7605 39.7527 41.7377C40.2858 41.5601 40.9133 41.7321 41.636 42.2546C42.3581 42.7767 43.0354 43.4213 43.6689 44.1874C44.302 44.9542 45.0628 45.8145 45.9512 46.7695C46.8402 47.7249 47.6175 48.4351 48.2837 48.9023L48.9499 49.3022C49.3948 49.569 49.9724 49.8134 50.6834 50.0355C51.3931 50.2575 52.0149 50.313 52.5489 50.202L61.079 50.069C61.9227 50.069 62.5793 49.9293 63.0449 49.6521C63.5115 49.3744 63.7887 49.0685 63.8781 48.7358C63.9673 48.4027 63.9721 48.0248 63.8951 47.6023C63.8161 47.1808 63.7382 46.8861 63.6607 46.7196Z"/>
    </symbol>

    <symbol id="icon-insta" width="64" height="64" viewBox="0 0 64 64">
        <path d="M46.3377 0H17.6612C7.92282 0 0 7.9232 0 17.6616V46.338C0 56.0768 7.92282 63.9996 17.6612 63.9996H46.3377C56.0768 63.9996 63.9996 56.0764 63.9996 46.338V17.6616C64 7.9232 56.0768 0 46.3377 0ZM58.3216 46.338C58.3216 52.9458 52.9458 58.3213 46.338 58.3213H17.6612C11.0539 58.3216 5.67836 52.9458 5.67836 46.338V17.6616C5.67836 11.0542 11.0539 5.67836 17.6612 5.67836H46.3377C52.9454 5.67836 58.3213 11.0542 58.3213 17.6616V46.338H58.3216Z"/>
        <path d="M31.9998 15.5095C22.9065 15.5095 15.5087 22.9072 15.5087 32.0006C15.5087 41.0935 22.9065 48.4909 31.9998 48.4909C41.0931 48.4909 48.4909 41.0935 48.4909 32.0006C48.4909 22.9072 41.0931 15.5095 31.9998 15.5095ZM31.9998 42.8122C26.0379 42.8122 21.1871 37.9621 21.1871 32.0002C21.1871 26.0379 26.0375 21.1875 31.9998 21.1875C37.9621 21.1875 42.8125 26.0379 42.8125 32.0002C42.8125 37.9621 37.9617 42.8122 31.9998 42.8122Z"/>
        <path d="M49.1825 10.6946C48.0885 10.6946 47.0137 11.1375 46.2411 11.9136C45.4647 12.6858 45.0184 13.7609 45.0184 14.8587C45.0184 15.9532 45.4651 17.0279 46.2411 17.8039C47.0134 18.5762 48.0885 19.0229 49.1825 19.0229C50.2803 19.0229 51.3516 18.5762 52.1277 17.8039C52.9037 17.0279 53.3466 15.9528 53.3466 14.8587C53.3466 13.7609 52.9037 12.6858 52.1277 11.9136C51.3554 11.1375 50.2803 10.6946 49.1825 10.6946Z"/>
    </symbol>
</svg>
</body>
</html>
<?php $this->endPage() ?>
