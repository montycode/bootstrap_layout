<!DOCTYPE html>
<html lang="en">
<?php 
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$start = $time;
include 'layout/head.php'; ?>
<body <?php if (isset($page_filename) && strlen($page_filename) > 0) echo " class='page_{$page_filename}'"; ?>>

    <?php include 'layout/header.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 text-center"><?php echo $config['site_title']; ?></h1>
      <hr>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <?php echo $config['site_title_context']; ?>
        </li>
      </ol>
      <div class="row">

    <?php include 'layout/aside.php'; ?>
    
    <!-- Post Content Column -->
    <div class="col-lg-8">