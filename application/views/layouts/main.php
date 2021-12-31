<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    	<script src="<?= base_url('vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js?v=' . VERSION); ?>"></script>
    	<script src="<?= base_url('resources/js/globais.js?v=' . VERSION); ?>"></script>
    	<script src="<?= base_url('resources/globais.js?v=' . VERSION); ?>" type="text/javascript" charset="utf-8"></script>
    	<script src="<?= base_url('resources/functions.js?v=' . VERSION); ?>" type="text/javascript" charset="utf-8"></script>
	</head>
	
	<body>
	
	<?phP
		if(isset($_view) && $_view) {
	    	$this->load->view($_view);
		}
	?>
	</body>
</html>
