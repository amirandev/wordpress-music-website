 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title><?php title(); ?></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <style>
         @import url("//cdn.web-fonts.ge/fonts/bpg-arial/css/bpg-arial.min.css");
         @import url("//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css");

         html,
         body {
             background: #ddd;
             padding: 0;
             margin: 0;
             font-family: 'BPG Arial';
         }

         aside {
             min-height: 400px;
             background: #fff;
             border-radius: 12px;
             padding: 30px;
         }
     </style>
 </head>

 <body>

     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
         <div class="container-fluid">
             <a class="navbar-brand" href="<?php echo home_url('/'); ?>">Logo</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="mynavbar">
                 <ul class="navbar-nav me-auto">
                     <?php foreach (wp_get_nav_menu_items(13) as $item): ?>
                         <li class="nav-item">
                             <a href="<?php echo esc_url($item->url); ?>" class="nav-link">
                                 <?php echo esc_html($item->title); ?>
                             </a>
                         </li>
                     <?php endforeach; ?>
                 </ul>

                 <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="d-flex">
                     <input class="form-control me-2" type="search" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                     <button class="btn btn-primary" type="submit">Search</button>
                 </form>


             </div>
         </div>
     </nav>