
<section id="banner-secciones">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
          <h1><?php wp_title(null); ?></h1>
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
      </div>

    </div>
  </div>

</section>
