<?php include 'segment.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Section -->

<?php echo getNavigation();?>

  

  <!-- Hero Section -->

    <?php echo getHero();?>
  
  <!-- Features Section -->

    <?php echo getFeatures();?>

  <!-- About Section -->
  <?php echo getAbout();?>

  <!-- Call to Action -->
  <?php echo getCallToAction();?>

  <!-- Contact Section -->
  <?php echo getContact();?>

  <!-- Footer -->
  <?php echo getFooter();?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
