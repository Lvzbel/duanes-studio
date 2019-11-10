<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo site_url('/home'); ?>">Duane's Studio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if(is_page('home')) echo 'active' ?>">
          <a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a>
        </li>
        <li class="nav-item <?php if(is_page('gallery')) echo 'active' ?>">
          <a class="nav-link" href="<?php echo site_url('/gallery'); ?>">Gallery</a>
        </li>
        <li class="nav-item <?php if(is_page('blog')) echo 'active' ?>">
          <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li>
        <li class="nav-item <?php if(is_page('about')) echo 'active' ?>">
          <a class="nav-link" href="<?php echo site_url('/about'); ?>">About</a>
        </li>
        <li class="nav-item <?php if(is_page('contact')) echo 'active' ?>">
          <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </nav>